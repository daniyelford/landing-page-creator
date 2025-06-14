<?php
defined('BASEPATH') or exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
class Map extends My_Controller
{
	public function __construct()
	{
		parent::__construct();
		 $this->load->library('Leaflet');
		 
	}
	
    public function map(){
        $config = array(
 	        'center'         => '-0.959, 100.39716', // Center of the map
 	        'zoom'           => 12, // Map zoom
 	    );
        $this->leaflet->initialize($config);
        $marker = array(
 	        'latlng' 		=>'-0.959, 100.39716', // Marker Location
 	        'popupContent' 	=> 'Hi, iam a popup!!', // Popup Content
 	    );
 	    $this->leaflet->add_marker($marker);
        $map =  $this->leaflet->create_map();
        echo $this->load->view('panel/map.php',['map'=>$map],true);
    }
	
	

	public function index()
	{
		$this->load->view('panel'.DS.'map.php', []);
	}

	public function addMarker()
	{
		if (isset($_POST['lt'], $_POST['ln']) && !empty($_POST['lt']) && !empty($_POST['ln'])) {
			$lt = $_POST['lt'];
			$ti = $_POST['title'];
			if (!empty($ti) && $ti !== '') {
				$title = $ti;
			} else {
				$title = "empty";
			}
			$ln = $_POST['ln'];
			$data = array(
				//'user_id'=>$this->session->userdata('user_id'),
				'latitude' => $lt, 'title' => $title, 'longitude' => $ln);
			$this->Map_model->insert_data($data);
		} else {
			redirect(base_url() . 'map'.DS.'index');
		}
	}

	public function delMarker()
	{
		if (isset($_POST['lt'], $_POST['ln']) && !empty($_POST['lt']) && !empty($_POST['ln'])) {
			//$user_id = $this->session->userdata('user_id');
			$lt = $_POST['lt'];
			$ti = $_POST['title'];
			$ln = $_POST['ln'];
			if (!empty($ti) && $ti !== '') {
				$title = $ti;
			} else {
				$title = "empty";
			}
			$data = array(
				//'user_id'=>$this->session->userdata('user_id'),
				'latitude' => $lt, 'longitude' => $ln, 'title' => $title);
			$this->Map_model->delete_data($data);
		} else {
			redirect(base_url() . 'map'.DS.index);
		}
	}

	public function marks()
	{
		$user_id = $this->session->userdata('user_id');
		$datas = $this->Map_model->s_a();
		$a='';
		foreach ($datas as $data) {
			$a .= $data['longitude'] . '|' . $data['latitude'] . '|' . $data['title'] . ',';
		}
		echo $a;
	}

	public function other()
	{
		function repToAmp($url, $pats, $repl = '')
		{
			$content = file_get_contents($url);
			if (is_array($pats)) {
				foreach ($pats as $val => $rpl) {
					echo preg_replace($val, $rpl, $content);
				}
			} elseif (is_string($pats)) {
				echo preg_replace($pats, $repl, $content);
			} else {
				return false;
			}
		}

		$data = array("~<a\s(.+?)>(.+?)<\/a>~" => "<a $1>$2</a>", "~/<img\s\(.+?\)><\/img>~" => "<amp-img ($1)></amp-img>");
		$content = repToAmp('https://stackoverflow.com/questions/5202496/replacing-a-tag-with-b-tag-using-php/5202513', $data);
		$this->load->view('m.php', array('content' => $content));
	}
	
// 	function image_upload()  
//       {  
//           $data['title'] = "Upload Image using Ajax JQuery in CodeIgniter";  
//           $this->load->view('image_upload', $data);  
//       }  
//     function ajax_upload()  
//       {  
//           if(isset($_FILES["image_file"]["name"]))  
//           {  
//                 $config['upload_path'] = './upload/';  
//                 $config['allowed_types'] = 'jpg|jpeg|png|gif';  
//                 $this->load->library('upload', $config);  
//                 if(!$this->upload->do_upload('image_file'))  
//                 {  
//                      echo $this->upload->display_errors();  
//                 }  
//                 else  
//                 {  
//                      $data = $this->upload->data();  
//                      echo '<img src="'.base_url().'upload/'.$data["file_name"].'" width="300" height="225" class="img-thumbnail" />';  
//                 }  
//           }  
//       }


 
    // function image_upload(){
    //     $this->load->view('image_upload');
    // }
 
 
    // public function do_upload(){
    //     $config['upload_path']="./assets/image";
    //     $config['allowed_types']='gif|jpg|png';
    //     $config['encrypt_name'] = TRUE;
         
    //     $this->load->library('upload',$config);
    //     if($this->upload->do_upload("file")){
    //         $data = array('upload_data' => $this->upload->data());
 
    //         $title= $this->input->post('title');
    //         $image= $data['upload_data']['file_name']; 
             
    //         $result= $this->Map_model->img_create($title,$image);
    //         echo json_decode($result);
    //     }
 
    // }
    
}

?>