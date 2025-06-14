<?php
header('Access-Control-Allow-Origin: *');
class Sidebars extends My_Controller{
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function use_model_creat(){
		return $this->Menu->create_table();
    }
 
    //xss cleaner
    
    public function direction_check($text=''){
        return empty($text)?'':strip_tags($text, '<p><a>'); 
    }    
    
    public function check_xss($text=""){
        return empty($text)?'':addslashes($text);
    }
    
    //map marker
    
    public function check_marks(){
        if(isset($_POST['aha'])&&!empty($_POST['aha'])){
            $datas = $this->Map_model->select_where(['side_id'=>'0']);
            $a='';
            if(!empty($datas)){
                foreach ($datas as $data) {
        			$a .= $data['longitude'] . '|' . $data['latitude'] . '|' . $data['title'] . ',';
        		}
            }
    		echo $a;
        }else{
            return false;
        }
    }
    
    public function add_mark(){
        $_SESSION['mark_num']++;
        $t=(isset($_POST['lt'])||!empty($_POST['lt'])?$_POST['lt']:false);
        $n=(isset($_POST['ln'])||!empty($_POST['ln'])?$_POST['ln']:false);
        $title=(isset($_POST['title'])||!empty($_POST['title'])?$_POST['title']:false);
        echo ($this->Map_model->insert_data(['title'=>$title,'longitude'=>$n,'latitude'=>$t])?1:0);
    }
    
    public function del_mark(){
        $_SESSION['mark_num']--;
        $t=(isset($_POST['lt'])||!empty($_POST['lt'])?$_POST['lt']:false);
        $n=(isset($_POST['ln'])||!empty($_POST['ln'])?$_POST['ln']:false);
        echo ($this->Map_model->delete_data(['longitude'=>$n,'latitude'=>$t])?1:0);
    }
    
    //pictures
    
    public function pic_upload(){
        $y=explode('.',$_FILES["image_file"]['name']);
        $x=end($y);
        $new_name=rand(1,999).'.'.$x;
        $config['upload_path']="./pic/";
        $config['allowed_types']='gif|jpg|png';
        $config['file_name'] = $new_name;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);
        if($this->upload->do_upload("image_file")){
            $data = array('image_file' => $this->upload->data());
            $image= $data['image_file']['file_name'];
            $result= $this->Menu->img_create(['name'=>$image]);
            echo json_decode($result);
        }
 
    }
    
    public function all_pic(){
        if(isset($_POST['xa']) && !empty($_POST['xa'])){
            $pictures=$this->Menu->all_pictures();
            if(!empty($pictures)){
				$a='<div style="height:255px;background-color:white;margin-top: 1px;overflow-y: auto;overflow-x:hidden;"><div class="m-2" style="position: absolute;left:20px;"><a id="rola" title="افزودن عکس" style="color:grey;" class="pull-left" href="#"><i class="fa fa-plus"></i></a></div><div class="row mt-3 px-5 pt-2 mx-auto text-center" id="bit-pic" style="padding-right: 10px;padding-left:10px;width:100%;">';
				foreach($pictures as $pic){
					$a .= "<div class='col-md-3 my-1 p-3 picture-div'><input class='pic-id' type='hidden' value='".$pic['id']."' /><img src='".base_url().'pic'.DS.$pic['name']."'></div>";
			    }
			    $a.='</div></div>';
			    $a.="<script>
			            $(document).ready(function (){
                            $('.picture-div').on('click',function(){
                                if($('#bit-pic').children().hasClass('rounded-10 box-shadow-primary')){
                                    $('#bit-pic').children().removeClass('rounded-10 box-shadow-primary');
                                }
                                if( $(this).hasClass('rounded-10 box-shadow-primary') ){
                                }else{
                                    $(this).addClass('rounded-10 box-shadow-primary');
                                }
                                $('#pi').val($(this).children( '.pic-id' ).val());
                            });
                            $('#rola').on('click',function (){
                                $(this).addClass('d-none');
                                if( $(this).parents('#pictures').hasClass('d-none') ){
                                    
                                }else{
                                    $('#pictures').addClass('d-none');  
                                }
                                if( $('#localoca').hasClass('d-none') ){
                                   $('#localoca').removeClass('d-none'); 
                                }
                            });
                        })
                </script>";
			}else{
				$a='<div class="m-auto text-center alert alert-danger rounded-10 box-shadow-pink" id="pictures">
				<div class="m-2" style="position: absolute;left:7px;top:7px;"><a id="rola" title="افزودن عکس" style="color:grey;" class="pull-left" href="#"><i class="fa fa-plus"></i></a></div> 
				عکسی وجود ندارد ابتدا عکس اضافه کنید</div>';
				$a.="<script>
			            $(document).ready(function (){
			                $('#rola').on('click',function (){
                                $(this).addClass('d-none');
                                if( $(this).parents('#pictures').hasClass('d-none') ){
                                    
                                }else{
                                    $('#pictures').addClass('d-none');  
                                }
                                if( $('#localoca').hasClass('d-none') ){
                                   $('#localoca').removeClass('d-none'); 
                                }
                            });
			            })
                </script>";
			}
			echo $a;
        }else{
            return false;
        }
    }
    
    //menus
    
    public function side_place_id(){
        if(isset($_POST['selectBox']) && is_numeric($_POST['selectBox']) && !empty($_POST['selectBox'])){
            $side=$this->Menu->side_w_id($_POST['selectBox']);
            if(!empty($side)){
                echo $side['0']['place'];
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
    
    public function menuselectbox(){
        if(isset($_POST['selectBox']) && is_numeric($_POST['selectBox']) && !empty($_POST['selectBox'])){
            $menus=$this->Menu->menu_w_side($_POST['selectBox']);
            $p='<option value="0">خودش منوی مادر باشد</option>';
            if(!empty($menus)){
                foreach ($menus as $key){
                    // $p[$key['id']]=$key['title'];
                    $p.='<option value="'.$key['id'].'">'.$key['title'].'</option>';
                }
            }
            echo $p;
        }else{
            return false;
        }
       
    }
    
    public function edit_menu_check(){
        if(isset($_POST['send']) && $_POST['send']=="ok"){
            if(!empty($_POST['id']) && isset($_POST['id'])){
                $id=$_POST['id'];
            }else{
                return false;
            }
            if(isset($_POST['title'])){
                $t= $this->check_xss($_POST['title']);
            }else{
                echo 0;
                die();
            }
            if(!is_numeric($_POST['side']) && $_POST['side'] == 0){
                echo 0;
                die();
            }else{
                $side=$_POST['side'];
                $asd=$this->Menu->select_where('sidebars_place',array('id'=>$side));
                if(!empty($asd)){
                    $pl=$asd['0']['place'];   
                }else{
                    echo 0;
                    die();
                }
            }
            $icons=(isset($_POST['icons']) && !empty($_POST['icons'])?$this->direction_check($_POST['icons']):'');
            $link=(isset($_POST['link']) && !empty($_POST['link'])?$this->direction_check($_POST['link']):'');
            $li=(isset($_POST['list_css']) && !empty($_POST['list_css'])?$this->direction_check($_POST['list_css']):'');
            $a=(isset($_POST['link_css']) && !empty($_POST['link_css'])?$this->direction_check($_POST['link_css']):''); 
            $ul=(isset($_POST['ul_css']) && !empty($_POST['ul_css'])?$this->direction_check($_POST['ul_css']):'');
            $h=(isset($_POST['custom_html']) && !empty($_POST['custom_html'])?$this->direction_check($_POST['custom_html']):'');
            $e=(isset($_POST['end_custom_html']) && !empty($_POST['end_custom_html'])?$this->direction_check($_POST['end_custom_html']):'');
            if(is_numeric($_POST['parent_id'])){
                if($_POST['parent_id'] == 0){
                    $menga_menu_p = ($_POST['mega'] == 1 ? 1 : 0);
                    $par_id = 0;
                }else{
                    $data_par = $this->Menu->select_where('menu',array('id'=>$_POST['parent_id']));
                    $menga_menu_p = ($_POST['mega'] == 1 && $data_par['0']['megaMenu'] == 1 ? 1 : ($_POST['mega'] == 0 && $data_par['0']['megaMenu'] == 1 ? 1 : 0));
                    if($menga_menu_p == 1){
                        $par_id = ($data_par['0']['parent_id'] == 0?$data_par['0']['id']:$data_par['0']['parent_id']);
                    }
                }
            }else{
                echo 0;
                die();
            }
            if(!empty($t) && !empty($side) && !empty($pl)){
                $data=[
                    'title'=>$t,
                    'link'=>$link,
                    'parent_id'=>$par_id,
                    'side_id'=>$side,
                    'icon_name'=>$icons,
                    'place'=>$pl,
                    'li_css'=>$li,
                    'link_css'=>$a,
                    'ul_css'=>$ul,
                    'custom_html'=>$h,
                    'end_custom_html'=>$e,
                    'megaMenu'=>$menga_menu_p
                    ];
                echo $this->Menu->edit("menu",$data,array('id'=>$id))?1:0;
            }else{
                echo 0;
                die();
            }
        }else{
            return false;
        }
    }

    public function edit_menu($id){
        $info_m = $this->Menu->select_where('menu',array('id'=>$id));
        $n1=$info_m['0']['icon_name'];
        $p1=$info_m['0']['parent_id'];
        $q1=$info_m['0']['side_id'];
        $r1=$info_m['0']['megaMenu'];
        $n=    ['0'=>'انتخاب کنید'];
        $p=    ['0'=>'منوی والد باشد'];
        $q=    ['0'=>'انتخاب کنید'];
        $icons=$this->Menu->all_icons();
        $menus=$this->Menu->menus();
        $sides=$this->Menu->sides();
        $condition=(!empty($sides))?true:false;
        $m=['name'=>'title',
            'class'=>'form-control rounded-5',
            'id'=>'title',
            'value'=>$info_m['0']['title'],
            'placeholder'=>'عنوان منو',
            'type'=>'text'];
        foreach($icons as $val){
            $n[$val['class']] = $val['title']." ".$val['shrtcd'];
        }
        $o=['name'=>'link',
            'class'=>'form-control rounded-5',
            'id'=>'link',
            'value'=>$info_m['0']['link'],
            'placeholder'=>'https://www.aseos.ir',
            'type'=>'text'];
        foreach ($menus as $key){
            $p[$key['id']]=$key['title'];
        }
        foreach ($sides as $value){
            $q[$value['id']] = $value['title'];
        }
        $r=['0'=>'منوی ساده',
            '1'=>'مگا منو'];
        
        $s=['name'=>'list_css',
            'class'=>'form-control rounded-5',
            'id'=>'list_css',
            'value'=>$info_m['0']['li_css'],
            'placeholder'=>'(li)',
            'type'=>'text'];
            
        $t=['name'=>'link_css',
            'class'=>'form-control rounded-5',
            'id'=>'link_css',
            'value'=>$info_m['0']['link_css'],
            'placeholder'=>'(a)',
            'type'=>'text'];
        
        $u=['name'=>'ul_css',
            'class'=>'form-control rounded-5',
            'id'=>'ul_css',
            'value'=>$info_m['0']['ul_css'],
            'placeholder'=>'(ul)',
            'type'=>'text'];
            
        $v=['name'=>'custom_html',
            'class'=>'form-control rounded-5',
            'id'=>'custom_html',
            'value'=>$info_m['0']['custom_html'],
            'placeholder'=>'<html tags>',
            'type'=>'text'];
            
        $z=['name'=>'end_custom_html',
            'class'=>'form-control rounded-5',
            'id'=>'end_custom_html',
            'value'=>$info_m['0']['end_custom_html'],
            'placeholder'=>'</html tags> ',
            'type'=>'text'];
        $btn=['class'=>"btn btn-main-primary btn-block rounded-5",
            'value'=>'ویرایش',
            'type'=>'button',
            'id'=>'send',
            'name'=>'send',
            'content'=>'ویرایش',
            'style'=>'height:40px;'
            ];
		$pic = $this->session->userdata('pic') ?: '1.png';
        $role=$this->session->userdata('role');
        $name = $this->session->userdata('name') ?: 'مهمان';
		$url=base_url().'auth'.DS.'logout';
		$top_menu_one = array(
			'rule_users' => $role,
			'username' => $name,
			'profilePicture' => $pic,
			'exitS' => $url,
			'timeNews' => 'friday',
			'icon1' => 'logo1.png',
			'icon2' => 'logo1.png',
			'icon3' => 'logo1.png',
			'icon4' => 'logo1.png',
			'icon1Des' => '',
			'icon2Des' => '',
			'icon3Des' => '',
			'icon4Des' => '',
			'editProfile' => '#',
			'country' => array(),
			'news' => array(),
			'message' => array());
        $foot = array('footer' => "<span>پرتال ساز پردازش هوشمند علاءالدین _ پشتیبانی: 02644909</span>");
		$head = array('favicon' => 'logo1.png',
			'description' => 'description',
			'keyword' => 'keywords',
			'page_title' => 'ویرایش منو');
	    $edit='run';
		$a = $this->load->view('panel/header.php', $head, true);
	    $a .= $this->load->view('panel/loader.php', array(), true);
	    $a .= $this->load->view('panel/topNavMenuOne.php', $top_menu_one, true);
        $a.= $this->Menu->fetch_for_menu('top','topNavMenuTwo.php');
        $a .= $this->load->view('panel'.DS.'add_menu.php',array('id'=>$id,'m'=>$m,'n'=>$n,'o'=>$o,'p'=>$p,'q'=>$q,'r'=>$r,'s'=>$s,'t'=>$t,'u'=>$u,'v'=>$v,'r1'=>$r1,'q1'=>$q1,'p1'=>$p1,'n1'=>$n1,'z'=>$z,'con'=>$condition,'btn'=>$btn,'edit'=>$edit),true);
        $a.= $this->Menu->fetch_for_menu('footer','footer.php',$foot);
		echo $a;
    }
     
    public function config_tag ($a,$b,$c=0){
        // $e=$this->security->entity_decode($a);
        $e=$a;
        $f=$b;
        // $f=$this->security->entity_decode($b);
        if($c == 0){
            if(!empty($e) && !empty($f)){
                $d=' class="'.$a.'" '.$b;
            }elseif(!empty($e) && empty($f)){
                $d=' class="'.$e.'"';
            }elseif(empty($e) && !empty($f)){
                $d=$f;
            }else{
                $d='';
            }
        }elseif($c == 1){
            if(!empty($e) && !empty($f)){
                $d=' class="sub-menu '.$a.'" '.$b;
            }elseif(!empty($e) && empty($f)){
                $d=' class="sub-menu '.$e.'"';
            }elseif(empty($e) && !empty($f)){
                $d=$f;
            }else{
                $d='';
            }
        }else{
            echo 0;
            die();
        }
        return $d;
    }
    
    public function check_add_menu(){
        if(isset($_POST['send']) && !empty($_POST['send'])){
            if(isset($_POST['title']) && !empty($_POST['title'])){
                $t=$this->direction_check($_POST['title']);
            }else{
                echo 0;
                die();
            }
            $a=(isset($_POST['link']) && !empty($_POST['link']))?$this->direction_check($_POST['link']):'#';
            
            $li1=(isset($_POST['list_class']) && !empty($_POST['list_class'])?$this->direction_check($_POST['list_class']):'');
            $li2=(isset($_POST['list_attr']) && !empty($_POST['list_attr'])?$this->direction_check($_POST['list_attr']):'');
            $li3=$this->config_tag($li1,$li2);
           
            $li=$this->direction_check($li3);
            
            $link1=(isset($_POST['link_class']) && !empty($_POST['link_class'])?$this->direction_check($_POST['link_class']):'');
            $link2=(isset($_POST['link_attr']) && !empty($_POST['link_attr'])?$this->direction_check($_POST['link_attr']):'');
            $link3=$this->config_tag($link1,$link2);
           
            $link=$this->direction_check($link3);
            
            $ul1=(isset($_POST['ul_child_class']) && !empty($_POST['ul_child_class'])?$this->direction_check($_POST['ul_child_class']).'"':'');
            $ul2=(isset($_POST['ul_child_attr']) && !empty($_POST['ul_child_attr'])?$this->direction_check($_POST['ul_child_attr']):'');
            $ul3=$this->config_tag($ul1,$ul2,1);
           
            $ul=$this->direction_check($ul3);
            
            $c=(isset($_POST['custom_html']) && !empty($_POST['custom_html'])?$this->direction_check($_POST['custom_html']):'');
            $e=(isset($_POST['end_custom_html']) && !empty($_POST['end_custom_html'])?$this->direction_check($_POST['end_custom_html']):'');
    
            $ali=$this->Menu->select_where('sidebars_place',array('id'=>$_POST['side']));
            if(!empty($ali)){
                $p=$ali['0']['place'];
                $i=$ali['0']['id'];
            }else{
                echo 0;
                die();
            }
            if(is_numeric($_POST['parent_id'])){
                if($_POST['parent_id'] == 0){
                    $menga_menu_p = ($_POST['mega'] == 1 ? 1 : 0);
                    $par_id = 0;
                }else{
                    $data_par = $this->Menu->select_where('menu',array('id'=>$_POST['parent_id']));
                    $menga_menu_p = ($_POST['mega'] == 1 && $data_par['0']['megaMenu'] == 1 ? 1 : ($_POST['mega'] == 0 && $data_par['0']['megaMenu'] == 1 ? 1 : 0));
                    if($menga_menu_p == 1){
                        $par_id = ($data_par['0']['parent_id'] == 0?$data_par['0']['id']:$data_par['0']['parent_id']);
                    }
                }
            }else{
                echo 0;
                die();
            }
            $abas = $this->Menu->select_where('menu',array('title'=>$t));
            if(empty($abas)){
                $data=array(
                    'title'=> $t,
                    'link'=> $a,
                    'parent_id'=> $par_id,
                    'side_id'=> $i,
                    'icon_name'=> $_POST['icons'],
                    'place'=>$p,
                    'li_css'=> $li,
                    'link_css'=>$link,
                    'ul_css'=>$ul,
                    'custom_html'=>$c,
                    'end_custom_html'=>$e,
                    'megaMenu'=>$menga_menu_p
                    );
                echo $this->Menu->add("menu",$data);
                die();
            }else{
                echo 0;
                die();
            }
        }else{
            return false;
        }
    }
    
    public function add_menu(){
        $p='';
        $q=    ['0'=>'انتخاب کنید'];
        $n=    ['0'=>'انتخاب کنید'];
        $icons=$this->Menu->all_icons();
        $sides=$this->Menu->sides();
        $condition=(!empty($sides))?true:false;
        $m=['name'=>'title',
            'class'=>'form-control rounded-5',
            'id'=>'title',
            'value'=>set_value('title'),
            'placeholder'=>'عنوان منو',
            'type'=>'text'];
        foreach($icons as $val){
            $n[$val['class']] = $val['title']." ".$val['shrtcd'];
        }
        $o=['name'=>'link',
            'class'=>'form-control rounded-5',
            'id'=>'link',
            'value'=>set_value('link'),
            'placeholder'=>'https://aseos.ir',
            'type'=>'text'];
        
        foreach ($sides as $value){
            $q[$value['id']] = $value['title'];
        }
        $r=['0'=>'منوی ساده',
            '1'=>'مگا منو'];
        
        $s=['name'=>'list_class',
            'class'=>'form-control rounded-5',
            'id'=>'list_class',
            'value'=>set_value('list_class'),
            'placeholder'=>'(li) class=value',
            'type'=>'text'];
            
        $t=['name'=>'list_attr',
            'class'=>'form-control rounded-5',
            'id'=>'list_attr',
            'value'=>set_value('list_attr'),
            'placeholder'=>'(li) attribute=value',
            'type'=>'text'];
            
        $u=['name'=>'link_class',
            'class'=>'form-control rounded-5',
            'id'=>'link_class',
            'value'=>set_value('link_class'),
            'placeholder'=>'(a) class=value ',
            'type'=>'text'];
        
        $v=['name'=>'link_attr',
            'class'=>'form-control rounded-5',
            'id'=>'link_attr',
            'value'=>set_value('link_attr'),
            'placeholder'=>'(a) attribute=value',
            'type'=>'text'];
            
        $w=['name'=>'ul_child_class',
            'class'=>'form-control rounded-5',
            'id'=>'ul_child_class',
            'value'=>set_value('ul_child_class'),
            'placeholder'=>'(ul) class=value',
            'type'=>'text'];
        
        $x=['name'=>'ul_child_attr',
            'class'=>'form-control rounded-5',
            'id'=>'ul_child_attr',
            'value'=>set_value('ul_child_attr'),
            'placeholder'=>'(ul) attribute=value',
            'type'=>'text'];
            
        $y=['name'=>'custom_html',
            'class'=>'form-control rounded-5',
            'id'=>'custom_html',
            'value'=>set_value('custom_html'),
            'placeholder'=>'<html tags>',
            'type'=>'text'];
            
        $z=['name'=>'end_custom_html',
            'class'=>'form-control rounded-5',
            'id'=>'end_custom_html',
            'value'=>set_value('end_custom_html'),
            'placeholder'=>'</html tags> ',
            'type'=>'text'];
        $btn=['class'=>"btn btn-main-primary btn-block rounded-5",
            'value'=>'ایجاد',
            'type'=>'button',
            'id'=>'send',
            'name'=>'send',
            'content'=>'ایجاد',
            'style'=>'height:40px;'
            ];
		$pic = $this->session->userdata('pic') ?: '1.png';
        $role=$this->session->userdata('role');
        $name = $this->session->userdata('name') ?: 'مهمان';
		$url=base_url().'auth'.DS.'logout';
		$top_menu_one = array(
			'rule_users' => $role,
			'username' => $name,
			'profilePicture' => $pic,
			'exitS' => $url,
			'timeNews' => 'friday',
			'icon1' => 'logo1.png',
			'icon2' => 'logo1.png',
			'icon3' => 'logo1.png',
			'icon4' => 'logo1.png',
			'icon1Des' => '',
			'icon2Des' => '',
			'icon3Des' => '',
			'icon4Des' => '',
			'editProfile' => '#',
			'country' => array(),
			'news' => array(),
			'message' => array());
        $foot = array('footer' => "<span>پرتال ساز پردازش هوشمند علاءالدین _ پشتیبانی: 02644909</span>");
		$head = array('favicon' => 'logo1.png',
			'description' => 'description',
			'keyword' => 'keywords',
			'page_title' => 'افزودن منو');
	
		$a = $this->load->view('panel/header.php', $head, true);
	    $a .= $this->load->view('panel/loader.php', array(), true);
	    $a .= $this->load->view('panel/topNavMenuOne.php', $top_menu_one, true);
        $a.= $this->Menu->fetch_for_menu('top','topNavMenuTwo.php');
        $a .= $this->load->view('panel'.DS.'add_menu.php',array('m'=>$m,'n'=>$n,'o'=>$o,'p'=>$p,'q'=>$q,'r'=>$r,'s'=>$s,'t'=>$t,'u'=>$u,'v'=>$v,'w'=>$w,'x'=>$x,'y'=>$y,'z'=>$z,'con'=>$condition,'btn'=>$btn),true);
        $a.= $this->Menu->fetch_for_menu('footer','footer.php',$foot);
		echo $a;
    }
        
    public function delete_menu($id){
        if(!empty($id)){
            if(empty($this->Menu->select_where('menu',array('parent_id'=>$id)))){
                $a=$this->Menu->remove_menu_id($id);
                if($a){
                    redirect(base_url()."sidebars".DS.'show_menus');
                }else{
                     redirect(base_url()."sidebars".DS.'show_menus?delMenu=err');
                }
            }else{
                redirect(base_url()."sidebars".DS.'show_menus?hasChild=err');
            }
        }else{
             redirect(base_url()."sidebars".DS.'show_menus');
        }
    }
    
    public function show_menus(){
        $info=$this->Menu->select_join('menu','sidebars_place','menu.*,sidebars_place.title as stitle','sidebars_place.id=menu.side_id');
        $data=array('data'=>$info);
        $role=$this->session->userdata('role');
        $name = $this->session->userdata('name') ?: 'مهمان';
		$pic = $this->session->userdata('pic') ?: '1.png';
		$head = array('favicon' => 'logo1.png',
			'description' => 'description',
			'keyword' => 'keywords',
			'page_title' => 'مدیریت منو ها');
		$url=base_url().'auth'.DS.'logout';
		$top_menu_one = array(
			'rule_users' => $role,
			'username' => $name,
			'profilePicture' => $pic,
			'exitS' => $url,
			'timeNews' => 'friday',
			'icon1' => 'logo1.png',
			'icon2' => 'logo1.png',
			'icon3' => 'logo1.png',
			'icon4' => 'logo1.png',
			'icon1Des' => '',
			'icon2Des' => '',
			'icon3Des' => '',
			'icon4Des' => '',
			'editProfile' => '#',
			'country' => array(),
			'news' => array(),
			'message' => array()
		);
		$foot = array('footer' => "<span>پرتال ساز پردازش هوشمند علاءالدین _ پشتیبانی: 02644909</span>");
		
		
		$a = $this->load->view('panel/header.php', $head, true);
		
		$a .= $this->load->view('panel/loader.php', array(), true);
        
		$a .= $this->load->view('panel/topNavMenuOne.php', $top_menu_one, true);
	
        $a.= $this->Menu->fetch_for_menu('top','topNavMenuTwo.php');

        $a.= $this->load->view('panel'.DS.'show_menu.php',$data,TRUE);
		
		$a.= $this->Menu->fetch_for_menu('footer','footer.php',$foot);
		
		
		echo $a;
    }
        
    public function enable_menu($id){
        if(!empty($id)){
            $this->Menu->edit('menu',array('status'=>'1'),array('id'=>$id));
          if(!empty($this->Menu->select_where('menu',array('parent_id'=>$id)))){
                $this->Menu->edit('menu',array('status'=>'0'),array('parent_id'=>$id));
            }
        }
        redirect(base_url()."sidebars".DS.'show_menus');
    }
    
    public function disable_menu($id){
          if(!empty($id)){
            $this->Menu->edit('menu',array('status'=>'0'),array('id'=>$id));
            if(!empty($this->Menu->select_where('menu',array('parent_id'=>$id)))){
                $this->Menu->edit('menu',array('status'=>'0'),array('parent_id'=>$id));
            }
        }
        redirect(base_url()."sidebars".DS.'show_menus');
    }
    
    //icons
    
    public function edit_icon_check(){
        if(isset($_POST['send']) && $_POST['send']=="ok"){
            if(!empty($_POST['id']) && isset($_POST['id'])){
                $id=$_POST['id'];
            }else{
                return false;
            }
            if(isset($_POST['title']) && !empty($_POST['title'])){
                $a= $this->check_xss($_POST['title']);
            }else{
                echo 0;
                die();
            }
            if(isset($_POST['iconClass']) && !empty($_POST['iconClass'])){
                $b=$this->direction_check($_POST['iconClass']);
            }else{
                echo 0;
                die();
            }
            if(isset($_POST['shrtcd']) && !empty($_POST['shrtcd'])){
                $c=$this->direction_check($_POST['shrtcd']);
            }else{
                echo 0;
                die();
            }
            if(!empty($a) && !empty($b) && !empty($c)){
                $data=['title' => $a ,'class' => $b,'shrtcd'=>$c];
                echo $this->Menu->edit("icons",$data,array('id'=>$id))?1:0;
            }else{
                echo 0;
                die();
            }
        }else{
            return false;
        }
    }
    
    public function edit_icon($id){
        $edit="run";
        $info_side=$this->Menu->select_where('icons',array('id'=>$id));
        $e=['name'=>'title',
            'class'=>'form-control rounded-5',
            'id'=>'title',
            'value'=>$info_side['0']['title'],
            'placeholder'=>'عنوان آیکون',
            'type'=>'text'];
        $f=['name'=>'class',
            'class'=>'form-control rounded-5',
            'id'=>'class',
            'value'=>$info_side['0']['class'],
            'placeholder'=>'class آیکون',
            'type'=>'text'];
        $g=['class'=>"btn btn-main-primary btn-block rounded-5",
            'value'=>'ویرایش',
            'type'=>'button',
            'id'=>'send',
            'name'=>'send',
            'content'=>'ویرایش',
            'style'=>'height:40px;'
            ];
        $h=['name'=>'shrtcd',
            'class'=>'form-control rounded-5',
            'id'=>'shrtcd',
            'value'=>$info_side['0']['shrtcd'],
            'placeholder'=>'shourt code آیکون',
            'type'=>'text'];
		$pic = $this->session->userdata('pic') ?: '1.png';
        $role=$this->session->userdata('role');
        $name = $this->session->userdata('name') ?: 'مهمان';
		$url=base_url().'auth'.DS.'logout';
		$top_menu_one = array(
			'rule_users' => $role,
			'username' => $name,
			'profilePicture' => $pic,
			'exitS' => $url,
			'timeNews' => 'friday',
			'icon1' => 'logo1.png',
			'icon2' => 'logo1.png',
			'icon3' => 'logo1.png',
			'icon4' => 'logo1.png',
			'icon1Des' => '',
			'icon2Des' => '',
			'icon3Des' => '',
			'icon4Des' => '',
			'editProfile' => '#',
			'country' => array(),
			'news' => array(),
			'message' => array());
        $foot = array('footer' => "<span>پرتال ساز پردازش هوشمند علاءالدین _ پشتیبانی: 02644909</span>");
		$head = array('favicon' => 'logo1.png',
			'description' => 'description',
			'keyword' => 'keywords',
			'page_title' => 'ویرایش آیکون');
	
		$a = $this->load->view('panel/header.php', $head, true);
	    $a .= $this->load->view('panel/loader.php', array(), true);
	    $a .= $this->load->view('panel/topNavMenuOne.php', $top_menu_one, true);
        $a.= $this->Menu->fetch_for_menu('top','topNavMenuTwo.php');
        $a .= $this->load->view('panel'.DS.'add_icon.php',array('g'=>$g,'f'=>$f,'e'=>$e,'edit'=>$edit,'id'=>$id),true);
        $a.= $this->Menu->fetch_for_menu('footer','footer.php',$foot);
		echo $a;
    }
    
    public function check_add_icon(){
        if(isset($_POST['send']) && $_POST['send']="ok"){
            if(isset($_POST['title']) && !empty($_POST['title'])){
                $a= $this->check_xss($_POST['title']);
            }else{
                echo 0;
                die();
            }
            if(isset($_POST['shrtcd']) && !empty($_POST['shrtcd'])){
                $c=$this->direction_check($_POST['shrtcd']);
            }else{
                echo 0;
                die();
            }
            if(isset($_POST['iconClass']) && !empty($_POST['iconClass'])){
                $b=$this->direction_check($_POST['iconClass']);
            }else{
                echo 0;
                die();
            }
            if(!empty($a) && !empty($b) && !empty($c)){
                $abas = $this->Menu->select_where('icons',array('title'=>$a,'shrtcd'=>$c));
                if(empty($abas)){
                    $data=['title' => $a ,'class' => $b,'shrtcd'=>$c];
                    echo $this->Menu->add("icons",$data)?1:0;
                }else{
                    echo 0;
                    die();
                }
            }else{
                echo 0;
                die();
            }
        }else{
            return false;
        }
    }
    
    public function add_icon(){
        $e=['name'=>'title',
            'class'=>'form-control rounded-5',
            'id'=>'title',
            'value'=>set_value('title'),
            'placeholder'=>'عنوان آیکون',
            'type'=>'text'];
        $h=['name'=>'shrtcd',
            'class'=>'form-control rounded-5',
            'id'=>'shrtcd',
            'value'=>set_value('shrtcd'),
            'placeholder'=>'کد کوتاه شده آیکون',
            'type'=>'text'];
        $f=['name'=>'class',
            'class'=>'form-control rounded-5',
            'id'=>'class',
            'value'=>set_value('class'),
            'placeholder'=>'class آیکون',
            'type'=>'text'];
 
        $g=['class'=>"btn btn-main-primary btn-block rounded-5",
            'value'=>'ایجاد',
            'type'=>'button',
            'id'=>'send',
            'name'=>'send',
            'content'=>'ایجاد',
            'style'=>'height:40px;'
            ];
		$pic = $this->session->userdata('pic') ?: '1.png';
        $role=$this->session->userdata('role');
        $name = $this->session->userdata('name') ?: 'مهمان';
		$url=base_url().'auth'.DS.'logout';
		$top_menu_one = array(
			'rule_users' => $role,
			'username' => $name,
			'profilePicture' => $pic,
			'exitS' => $url,
			'timeNews' => 'friday',
			'icon1' => 'logo1.png',
			'icon2' => 'logo1.png',
			'icon3' => 'logo1.png',
			'icon4' => 'logo1.png',
			'icon1Des' => '',
			'icon2Des' => '',
			'icon3Des' => '',
			'icon4Des' => '',
			'editProfile' => '#',
			'country' => array(),
			'news' => array(),
			'message' => array());
        $foot = array('footer' => "<span>پرتال ساز پردازش هوشمند علاءالدین _ پشتیبانی: 02644909</span>");
		$head = array('favicon' => 'logo1.png',
			'description' => 'description',
			'keyword' => 'keywords',
			'page_title' => 'افزودن آیکون');
	
		$a = $this->load->view('panel/header.php', $head, true);
	    $a .= $this->load->view('panel/loader.php', array(), true);
	    $a .= $this->load->view('panel/topNavMenuOne.php', $top_menu_one, true);
        $a.= $this->Menu->fetch_for_menu('top','topNavMenuTwo.php');
        $a .= $this->load->view('panel'.DS.'add_icon.php',array('h'=>$h,'g'=>$g,'f'=>$f,'e'=>$e),true);
        $a.= $this->Menu->fetch_for_menu('footer','footer.php',$foot);
		echo $a;   
    }
    
    public function delete_icon($id){
        if(!empty($id)){
            $b = $this->Menu->remove('icons',array('id'=>$id));
            if($b){
                redirect(base_url()."sidebars".DS.'show_icons');
            }else{
                $this->Auth_model->s_alert('خطا',"برای سایت شما مشکلی به وجود آمده در اصرع وقت آن را بررسی کنید","error","حتما",base_url()."sidebars".DS."show_icons");
                die();
            }
        }
    }
    
    public function disable_icon($id){
        if(!empty($id)){
           $this->Menu->edit('icons',array('status'=>'0'),array('id'=>$id));
        }
        redirect(base_url()."sidebars".DS.'show_icons');
    }
    
    public function enable_icon($id){
                if(!empty($id)){
           $this->Menu->edit('icons',array('status'=>'1'),array('id'=>$id));
        }
        redirect(base_url()."sidebars".DS.'show_icons');
    }
    
    public function show_icons(){
                $role=$this->session->userdata('role');
        $name = $this->session->userdata('name') ?: 'مهمان';
		$pic = $this->session->userdata('pic') ?: '1.png';
		$head = array('favicon' => 'logo1.png',
			'description' => 'description',
			'keyword' => 'keywords',
			'page_title' => 'مدیریت آیکون ها');
		$url=base_url().'auth'.DS.'logout';
		$top_menu_one = array(
			'rule_users' => $role,
			'username' => $name,
			'profilePicture' => $pic,
			'exitS' => $url,
			'timeNews' => 'friday',
			'icon1' => 'logo1.png',
			'icon2' => 'logo1.png',
			'icon3' => 'logo1.png',
			'icon4' => 'logo1.png',
			'icon1Des' => '',
			'icon2Des' => '',
			'icon3Des' => '',
			'icon4Des' => '',
			'editProfile' => '#',
			'country' => array(),
			'news' => array(),
			'message' => array()
		);
		$foot = array('footer' => "<span>پرتال ساز پردازش هوشمند علاءالدین _ پشتیبانی: 02644909</span>");
		
		$data=$this->Menu->all_icons();
		
		$a = $this->load->view('panel/header.php', $head, true);
		
		$a .= $this->load->view('panel/loader.php', array(), true);
        
		$a .= $this->load->view('panel/topNavMenuOne.php', $top_menu_one, true);
	
        $a.= $this->Menu->fetch_for_menu('top','topNavMenuTwo.php');
        
        $a.= $this->Menu->fetch_for_menu('right','rightMenu.php');

        $a.= $this->load->view('panel'.DS.'show_icons.php',array('data'=>$data),TRUE);
		
		$a.= $this->Menu->fetch_for_menu('footer','footer.php',$foot);
		
		echo $a;
    }
    
    //sidebars
    
    public function check_add_side(){
        if(isset($_POST['send']) && $_POST['send']=="ok"){
            if(isset($_POST['title']) && !empty($_POST['title'])){
                $a= $this->check_xss($_POST['title']);
            }else{
                echo 0;
                die();
            }
            if(isset($_POST['pic_id']) && !empty($_POST['pic_id'])){
                $logo_id=(is_numeric($_POST['pic_id'])?$_POST['pic_id']:0);
            }
            $pic_user=(isset($_POST['pic_user']) && !empty($_POST['pic_user'])?'true':'');
            if(isset($_POST['co']) && !empty($_POST['co'])){
                $Comments=$this->direction_check($_POST['co']);
            }
            $ctop='<div class="sticky sticky-pin" style="margin-bottom: 0px;"><div class="horizontal-main hor-menu clearfix side-header"><div class="horizontal-mainwrapper container clearfix"><nav class="horizontalMenu clearfix" style="height: 55px;line-height: 28px"><div class="horizontal-overlapbg"></div><ul class="horizontalMenu-list">';
            $etop='</ul></nav></div></div></div>';
            $cleft='';
            $eleft='';
            $cright='';
            $eright='';
            $cfoot='';
            $efoot='';
            $b=( !empty($_POST['customHtml']) ?$this->direction_check($_POST['customHtml']):($_POST['place']=='top'?$ctop:($_POST['place']=='left'?$cleft:($_POST['place']=='right'?$cright:$cfoot) ) ) );
            $c=(!empty($_POST['endCustomHtml'])?$this->direction_check($_POST['endCustomHtml']):($_POST['place']=='top'?$etop:($_POST['place']=='left'?$eleft:($_POST['place']=='right'?$eright:$efoot) ) ) );
            if(empty($_POST['place']) || empty($_POST['Priority'])){
                echo 0;
                die();
            }else{
                $abas = $this->Menu->select_where('sidebars_place',array('title'=>$a));
                if(empty($abas)){
                    $data=['title' => $a ,	'place' => $_POST['place'],	'Priority' => $_POST['Priority'],'custom_html' => $b ,'end_custom_html'=>$c,'logo'=>$logo_id,'user_pic'=>$pic_user,'com'=>$Comments];
                    if($this->Menu->add("sidebars_place",$data)){
                        $con_map_1=(is_numeric($_SESSION['mark_num']) && $_SESSION['mark_num'] != 0?$_SESSION['mark_num']:'');
                        $con_map_2=$this->session->userdata('user_id');
                        if(!empty($con_map_1) && $_POST['place']=='foot'){
                            echo ($this->Menu->set_foot_loc($data,$con_map_1,$con_map_2)?1:0);
                            die();
                        }else{
                            $_SESSION['mark_num']='';
                            $this->Menu->remove('map',['side_id'=>0]);
                        }
                        echo 1;
                        die();
                    }else{
                        echo 0;
                        die();
                    }
                }else{
                    echo 0;
                    die();
                }
            }
        }else{
            return false;
        }
    }
    
    public function add_side(){
        
        $e=['name'=>'title',
            'class'=>'form-control rounded-5',
            'id'=>'title',
            'value'=>set_value('title'),
            'placeholder'=>'عنوان ساید بار',
            'type'=>'text'];
        $f=[
            'top'=>'بالا',
            'left'=>'دست چپ',
            'right'=>'دست راست',
            'foot'=>'پایین'
            ];
        $ar=[
            '1'=>'بدون تغییر',
            '2'=>'افرودن دستی',
            '3'=>'افزودن عکس و اسم کاربر',
            '4'=>'افرودن لوگو',
            '5'=>'افزودن نقشه'
            ];
        $addi=[
            'name'  => 'addi',
            'id'    => 'addi',
            'value' => set_value(strip_tags('addi')),
            'rows'  => '50',
            'cols'  => '10',
            'style' => 'width:100%;height:40px',
            'class' => 'form-control rounded-5']; 
        $g=[
            '1'=>'بالاترین سطح',
            '2'=>'بالا',
            '3'=>'متوسط',
            '4'=>'کم',
            '5'=>'کمترین سطح'
            ];
        $h=['class'=>"btn btn-main-primary btn-block rounded-5",
            'value'=>'ایجاد',
            'type'=>'button',
            'id'=>'send',
            'name'=>'send',
            'content'=>'ایجاد',
            'style'=>'height:40px;'
            ];
        $w=['name'  => 'custom_html',
            'id'    => 'custom_html',
            'value' => set_value(strip_tags('custom_html')),
            'rows'  => '50',
            'cols'  => '10',
            'style' => 'width:100%;height:40px',
            'class' => 'form-control rounded-5'];  
        $z=['name'  => 'custom_html_end',
            'id'    => 'custom_html_end',
            'value' =>set_value(strip_tags('custom_html_end')),
            'rows'  => '50',
            'cols'  => '10',
            'style' => 'width:100%;height:40px',
            'class' => 'form-control rounded-5'];
		$pic = $this->session->userdata('pic') ?: '1.png';
        $role=$this->session->userdata('role');
        $name = $this->session->userdata('name') ?: 'مهمان';
		$url=base_url().'auth'.DS.'logout';
		$top_menu_one = array(
			'rule_users' => $role,
			'username' => $name,
			'profilePicture' => $pic,
			'exitS' => $url,
			'timeNews' => 'friday',
			'icon1' => 'logo1.png',
			'icon2' => 'logo1.png',
			'icon3' => 'logo1.png',
			'icon4' => 'logo1.png',
			'icon1Des' => '',
			'icon2Des' => '',
			'icon3Des' => '',
			'icon4Des' => '',
			'editProfile' => '#',
			'country' => array(),
			'news' => array(),
			'message' => array());
        $foot = array('footer' => "<span>پرتال ساز پردازش هوشمند علاءالدین _ پشتیبانی: 02644909</span>");
		$head = array('favicon' => 'logo1.png',
			'description' => 'description',
			'keyword' => 'keywords',
			'page_title' => 'افزودن ساید بار ها');
	
		$a = $this->load->view('panel/header.php', $head, true);
	    $a .= $this->load->view('panel/loader.php', array(), true);
	    $a .= $this->load->view('panel/topNavMenuOne.php', $top_menu_one, true);
        $a.= $this->Menu->fetch_for_menu('top','topNavMenuTwo.php');
        $a .= $this->load->view('panel'.DS.'add_sides.php',array('z'=>$z,'w'=>$w,'h'=>$h,'g'=>$g,'f'=>$f,'e'=>$e,'ar'=>$ar,'addi'=>$addi),true);
        $a.= $this->Menu->fetch_for_menu('footer','footer.php',$foot);
		echo $a;
    }

    public function edit_side_check(){
        if(isset($_POST['send']) && $_POST['send']=="ok"){
            if(!empty($_POST['id']) && isset($_POST['id'])){
                $id=$_POST['id'];
            }else{
                return false;
            }
            if(isset($_POST['title'])){
                $a= $this->check_xss($_POST['title']);
            }else{
                return false;
            }
            if(empty($_POST['title'])){
                echo 0;
            }else{
                if(empty($_POST['place']) || empty($_POST['Priority'])){
                        echo 0;
                }else{
                    $data=['title' => $a ,	'place' => $_POST['place'],	'Priority' => $_POST['Priority'],'custom_html' => $this->direction_check($_POST['customHtml']),'end_custom_html'=>$this->direction_check($_POST['endCustomHtml'])];
                    echo $this->Menu->edit("sidebars_place",$data,array('id'=>$id))?1:0;
                }
            }
        }else{
            return false;
        }
    }

    public function edit_side($id){
        $edit="run";
        $info_side=$this->Menu->select_where('sidebars_place',array('id'=>$id));
        $s=$info_side['0']['place'];
        $k=$info_side['0']['Priority'];
           $e=['name'=>'title',
            'class'=>'form-control rounded-5',
            'id'=>'title',
            'value'=>$info_side['0']['title'],
            'placeholder'=>'عنوان ساید بار',
            'type'=>'text'];
        $f=[
            'top'=>'بالا',
            'left'=>'دست چپ',
            'right'=>'دست راست',
            'foot'=>'پایین'
            ];
        $g=[
            '1'=>'بالاترین سطح',
            '2'=>'بالا',
            '3'=>'متوسط',
            '4'=>'کم',
            '5'=>'کمترین سطح'
            ];
        $h=['class'=>"btn btn-main-primary btn-block rounded-5",
            'value'=>'ویرایش',
            'type'=>'button',
            'id'=>'send',
            'name'=>'send',
            'content'=>'ویرایش',
            'style'=>'height:40px;'
            ];
        $w=['name'  => 'custom_html',
            'id'    => 'custom_html',
            'value' =>  set_value($info_side['0']['custom_html']),
            'rows'  => '50',
            'cols'  => '10',
            'style' => 'width:100%;height:40px',
            'class' => 'form-control rounded-5'];  
        $z=['name'  => 'custom_html_end',
            'id'    => 'custom_html_end',
            'value' => set_value($info_side['0']['end_custom_html']),
            'rows'  => '50',
            'cols'  => '10',
            'style' => 'width:100%;height:40px',
            'class' => 'form-control rounded-5'];
		$pic = $this->session->userdata('pic') ?: '1.png';
        $role=$this->session->userdata('role');
        $name = $this->session->userdata('name') ?: 'مهمان';
		$url=base_url().'auth'.DS.'logout';
		$top_menu_one = array(
			'rule_users' => $role,
			'username' => $name,
			'profilePicture' => $pic,
			'exitS' => $url,
			'timeNews' => 'friday',
			'icon1' => 'logo1.png',
			'icon2' => 'logo1.png',
			'icon3' => 'logo1.png',
			'icon4' => 'logo1.png',
			'icon1Des' => '',
			'icon2Des' => '',
			'icon3Des' => '',
			'icon4Des' => '',
			'editProfile' => '#',
			'country' => array(),
			'news' => array(),
			'message' => array());
        $foot = array('footer' => "<span>پرتال ساز پردازش هوشمند علاءالدین _ پشتیبانی: 02644909</span>");
		$head = array('favicon' => 'logo1.png',
			'description' => 'description',
			'keyword' => 'keywords',
			'page_title' => 'ویرایش ساید بار ها');
	
		$a = $this->load->view('panel/header.php', $head, true);
	    $a .= $this->load->view('panel/loader.php', array(), true);
	    $a .= $this->load->view('panel/topNavMenuOne.php', $top_menu_one, true);
        $a.= $this->Menu->fetch_for_menu('top','topNavMenuTwo.php');
        $a .= $this->load->view('panel'.DS.'add_sides.php',array('z'=>$z,'w'=>$w,'h'=>$h,'g'=>$g,'f'=>$f,'e'=>$e,'k'=>$k,'s'=>$s,'edit'=>$edit,'id'=>$id),true);
        $a.= $this->Menu->fetch_for_menu('footer','footer.php',$foot);
		echo $a;
    }
    
    public function show_sides(){
        $role=$this->session->userdata('role');
        $name = $this->session->userdata('name') ?: 'مهمان';
		$pic = $this->session->userdata('pic') ?: '1.png';
		$head = array('favicon' => 'logo1.png',
			'description' => 'description',
			'keyword' => 'keywords',
			'page_title' => 'مدیریت ساید بار ها');
		$url=base_url().'auth'.DS.'logout';
		$top_menu_one = array(
			'rule_users' => $role,
			'username' => $name,
			'profilePicture' => $pic,
			'exitS' => $url,
			'timeNews' => 'friday',
			'icon1' => 'logo1.png',
			'icon2' => 'logo1.png',
			'icon3' => 'logo1.png',
			'icon4' => 'logo1.png',
			'icon1Des' => '',
			'icon2Des' => '',
			'icon3Des' => '',
			'icon4Des' => '',
			'editProfile' => '#',
			'country' => array(),
			'news' => array(),
			'message' => array()
		);
		$foot = array('footer' => "<span>پرتال ساز پردازش هوشمند علاءالدین _ پشتیبانی: 02644909</span>");
		
		$data=$this->Menu->all_side();
		
		$a = $this->load->view('panel/header.php', $head, true);
		
		$a .= $this->load->view('panel/loader.php', array(), true);
        
		$a .= $this->load->view('panel/topNavMenuOne.php', $top_menu_one, true);
	
        $a.= $this->Menu->fetch_for_menu('top','topNavMenuTwo.php');

        $a.= $this->load->view('panel'.DS.'show_side.php',array('data'=>$data),TRUE);
		
		$a.= $this->Menu->fetch_for_menu('footer','footer.php',$foot);
		
		echo $a;
    }
    
    public function delete_side($id){
        if(!empty($id)){
            if(!empty($this->Menu->select_where('menu',array('side_id'=>$id,'status'=>1)))){
                redirect(base_url()."sidebars".DS.'show_sides?hasChild=err');
                die();
            }else{
                 $a = $this->Menu->remove('sidebars_place',array('id'=>$id));
                 $b = $this->Menu->remove('menu',array('side_id'=>$id));
                if($a){
                    redirect(base_url()."sidebars".DS.'show_sides');
                }else{
                     redirect(base_url()."sidebars".DS.'show_sides?delMenu=err');
                     die();
                }
            }
        }else{
             redirect(base_url()."sidebars".DS.'show_sides');
        }
    }
    
    public function enable_side($id){
        if(!empty($id)){
            $this->Menu->edit('sidebars_place',array('status'=>'1'),array('id'=>$id));
            if(!empty($this->Menu->select_where('menu',array('side_id'=>$id)))){
                $this->Menu->edit('menu',array('status'=>'1'),array('side_id'=>$id));
            }
        }
        redirect(base_url()."sidebars".DS.'show_sides');
    }
    
    public function disable_side($id){
        if(!empty($id)){
            $this->Menu->edit('sidebars_place',array('status'=>'0'),array('id'=>$id));
            if(!empty($this->Menu->place_menu('','',$id))){
                $this->Menu->edit('menu',array('status'=>'0'),array('side_id'=>$id));
            }
        }
        redirect(base_url()."sidebars".DS.'show_sides');
    }
}
?>