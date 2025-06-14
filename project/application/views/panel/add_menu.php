<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
if(!empty($con) && isset($con) && $con =='true'){
    if(empty($edit)){
        $a=form_input($m);
        $b=$e=form_dropdown("icons",$n,'0',array('class'=>'rounded-5 SlectBox form-control SumoUnder','id'=>'icons'));
        $c=form_input($o);
        $d=form_dropdown('parent_id',$p,'0',array('class'=>'rounded-5 SlectBox form-control SumoUnder','id'=>'parent_id'));
        $e=form_dropdown("side_id",$q,'0',array('class'=>'rounded-5 SlectBox form-control SumoUnder','id'=>'side_id'));
        $f=form_dropdown("mega",$r,'0',array('class'=>'rounded-5 SlectBox form-control SumoUnder','id'=>'mega'));
        $g=form_input($s);
        $h=form_input($t);
        $i=form_input($u);
        $j=form_input($v);
        $k=form_input($w);
        $l=form_input($x);
        $a1=form_input($y);
        $a2=form_input($z);
        $b1=form_button($btn);
    }else{
        $a=form_input($m);
        $b=$e=form_dropdown("icons",$n,$n1,array('class'=>'rounded-5 SlectBox form-control SumoUnder','id'=>'icons'));
        $c=form_input($o);
        $d=form_dropdown('parent_id',$p,$p1,array('class'=>'rounded-5 SlectBox form-control SumoUnder','id'=>'parent_id'));
        $e=form_dropdown("side_id",$q,$q1,array('class'=>'rounded-5 SlectBox form-control SumoUnder','id'=>'side_id'));
        $f=form_dropdown("mega",$r,$r1,array('class'=>'rounded-5 SlectBox form-control SumoUnder','id'=>'mega'));
        $g=form_input($s);
        $h=form_input($t);
        $i=form_input($u);
        $a1=form_input($v);
        $a2=form_input($z);
        $b1=form_button($btn);   
    }
?>
<style>
    textarea{
            height: 40px !important;
    }
    select{
         font-family: 'FontAwesome', 'Second Font name';
    }
    .sett{
        display:none;
    }
    label{
        margin:10px;
        padding-bottom:5px;
    }.asdfg{
        padding-top: 45px;
        padding-right: 30px;
    }
</style>
<?php if(!empty($edit)){?>


<?php }else{?>
<style>
    
</style>
<?php }?>
<div class="container-fluid mt-5" style="min-height:480px;">
    <div class="row mt-5">
        <div class="col-lg-11 col-md-11 mx-auto">
			<div class="card">
    			<div class="card-body">
					<div class="main-content-label mg-b-5">
		    			<a style="float:left;padding: 7px;color:red;" title="انصراف" href="<?php echo base_url()."sidebars".DS."show_menus";?>"><i class="fa fa-times" aria-hidden="true"></i></a>
			    		<?php if(isset($edit) && !empty($edit)){?>
				    	<h3 class="pull-right txt-start">
					        ویرایش منو
    					</h3>
	    				<?php }else{?>
		    			<h3 class="pull-right txt-start">
			    			ایجاد منو 
				    	</h3>
					    <?php }?>
					</div>
					<br><br>
					<p class="mg-b-20">
					<?php if(isset($edit) && !empty($edit)){?>
				به آسانی می توانید منو های خود را ویرایش کنید
					<?php }else{?>
					در این بخش شما می توانید به آسانی در هر سایدبار منو های مورد نظر خود را ایجاد کنید
					<?php }?>
					</p>
					<div class="pd-30 pd-sm-40 bg-gray-200">
						<?= form_open()?>
					    <?php if(!empty($id)){?>
					        <input value='<?= $id?>' type='hidden' id='id'>
					    <?php }?>
					    <?php if(!empty($edit)){?>
					        <div class="row row-xs mb-3" style="line-height: 0px;height: 55px;">
								<div class="col-md-6">
								    <label>عنوان منو</label>
									<?= $a ?>
									<br/>
									<span class="mt-2 text-danger tx-10 d-none" id="titleErr">نمیتوانید این فیلد را خالی بگذارید!</span>
								</div>
								
								<div class="col-md-3 mg-t-10 mg-md-t-0">
								    <label>سایدبار مورد نظر</label>
									<?= $e ?>
								</div>
								<div class="col-md-3 mg-t-10 mg-md-t-0">
								    <label>منوی مادر</label>
									<?= $d ?>
								</div>
							</div>
							<div class="row row-xs mb-3 mt-4" style="line-height: 0px;height: 55px;">
							    <div class="col-md-6 mg-t-10 mg-md-t-0">
								        <label>لینک منو (آدرس را کامل و در آغاز https را وارد کنید)</label>
							    		<?= $c ?>
						    	</div>
								<div class="col-md-3 mg-t-10 mg-md-t-0">
								    <label>آیکون مورد نظر</label>
									<?= $b ?>
								</div>
								<div class="col-md-3 mg-t-10 mg-md-t-0" id='bpr'>
								    <label>نوع منو (مخصوص منو های بالای صفحه)</label>
									<?= $f ?>
								</div>
								<div class="col-md-3 mg-t-10 mg-md-t-0 d-none" id='bpri'>
						          
							    </div>
							</div>
					        <div class="row row-xs mb-3" style="line-height: 0px;height: 55px;">
								<div class="col-md-12 mg-t-10 mg-md-t-0">
								    <label>نتظیمات لیست</label>
									<?= $g ?>
								</div>
							</div> 
							<div class="row row-xs mb-3" style="line-height: 0px;height: 55px;">
								<div class="col-md-12 mg-t-10 mg-md-t-0">
								    <label>تنظیمات لینک</label>
									<?= $h ?>
								</div>
							</div>
					        <div class="row row-xs mb-3" style="line-height: 0px;height: 55px;">
								<div class="col-md-12 mg-t-10 mg-md-t-0">
								    <label>تنظیمات ul فرزند</label>
									<?= $i ?>
								</div>
							</div>
					        <div class="row row-xs mb-3 sett" style="line-height: 0px;height: 55px;">
								<div class="col-md-6 mg-t-10 mg-md-t-0">
								    <label>تگ های html دلخواه</label>
									<?= $a1 ?>
								</div>
								<div class="col-md-6 mg-t-10 mg-md-t-0">
								    <label>بستن تگ های html دلخواه</label>
									<?= $a2 ?>
								</div>
							</div>
							<div class="row row-xs mb-2" style="line-height: 0px;height: 55px;">	
								<div class="col-md-12 mg-t-10 mg-md-t-0 my-auto">
									<?= $b1 ?>
								</div>
							</div>
					    <?php }else{?>
							<div class="row row-xs mb-3" style="line-height: 0px;height: 55px;">
								<div class="col-md-6">
								    <label>عنوان منو</label>
									<?= $a ?>
									<br/>
									<span class="mt-2 text-danger tx-10 d-none" id="titleErr">نمیتوانید این فیلد را خالی بگذارید!</span>
								</div>
								<div class="col-md-3 mg-t-10 mg-md-t-0">
								    <label>سایدبار مورد نظر</label>
									<?= $e ?>
								</div>
								<div class="col-md-3 mg-t-10 mg-md-t-0">
								    <label>منوی مادر</label>
									<?= $d ?>
								</div>
							</div>
							<div class="row row-xs mb-3 mt-4" style="line-height: 0px;height: 55px;">
								
								<div class="col-md-6 mg-t-10 mg-md-t-0">
								    <label>لینک منو (آدرس را کامل و در آغاز https را وارد کنید)</label>
									<?= $c ?>
								</div>
								
								<div class="col-md-3 mg-t-10 mg-md-t-0">
								    <label>آیکون مورد نظر</label>
									<?= $b ?>
								</div>
								<div class="col-md-3 mg-t-10 mg-md-t-0" id="bpr">
								    <label>نوع منو (مخصوص منو های بالای صفحه)</label>
									<?= $f ?>
								</div>
								<div class="col-md-3 mg-t-10 mg-md-t-0 d-none" id="bpri">
								  
								</div>
							</div>
							<span><a id="showSet" href="#">تنظیمات پیشرفته</a></span>
							<div class="row row-xs mb-3 sett" style="line-height: 0px;height: 55px;">	
							
								<div class="col-md-6 mg-t-10 mg-md-t-0">
								    <label>class لیست</label>
									<?= $g ?>
								</div>
								<div class="col-md-6 mg-t-10 mg-md-t-0">
								    <label>attribute لیست</label>
									<?= $h ?>
								</div>
						    </div>
						    <div class="row row-xs mb-3 sett" style="line-height: 0px;height: 55px;">
								<div class="col-md-6 mg-t-10 mg-md-t-0">
								    <label>class لینک</label>
									<?= $i ?>
								</div>
								<div class="col-md-6 mg-t-10 mg-md-t-0">
								    <label>attribute لینک</label>
									<?= $j ?>
								</div>
							</div>
							<div class="row row-xs mb-3 sett" style="line-height: 0px;height: 55px;">
								<div class="col-md-6 mg-t-10 mg-md-t-0">
								    <label>class ul منوی فرزند</label>
									<?= $k ?>
								</div>
								<div class="col-md-6 mg-t-10 mg-md-t-0">
								    <label>attribute ul منوی فرزند</label>
									<?= $l ?>
								</div>
							</div>
							<div class="row row-xs mb-3 sett" style="line-height: 0px;height: 55px;">
									<div class="col-md-6 mg-t-10 mg-md-t-0">
								    <label>تگ های html دلخواه</label>
									<?= $a1 ?>
								</div>
									<div class="col-md-6 mg-t-10 mg-md-t-0">
								    <label>بستن تگ های html دلخواه</label>
									<?= $a2 ?>
								</div>
							</div>
							
							<div class="row row-xs mb-2" style="line-height: 0px;height: 55px;">	
								<div class="col-md-12 mg-t-10 mg-md-t-0 my-auto">
									<?= $b1 ?>
								</div>
							</div>
							<?php }?>
						<?= form_close()?>
					</div>
				</div>
			</div>
		</div>        
    </div>
</div>
<?php if(empty($edit) || !isset($edit)){?>
<script>
    $(document).ready(function (){
        $("#send").click(function(){
          let title = $("#title").val();
          let link = $("#link").val();
          let parent_id = $("#parent_id").val();
          let side = $("#side_id").val();
          let mega = $("#mega").val();
          let icons = $("#icons").val(); 
          let list_class = $("#list_class").val();
          let list_attr = $("#list_attr").val();
          let link_class = $("#link_class").val();
          let link_attr = $("#link_attr").val();
          let ul_child_class = $("#ul_child_class").val();
          let ul_child_attr = $("#ul_child_attr").val();
          let custom_html=$("#custom_html").val();
          let end_custom_html=$("#end_custom_html").val();
          let send="ok";
            if(title == ''){
              $("#title").css({"border":"1px solid red"});
              $("#titleErr").removeClass("d-none");
              $("#titleErr").addClass("d-block");
            }else{
                $("#titleErr").removeClass("d-block");
                $("#titleErr").addClass("d-none");
                $("#title").css({"border":"1px solid green"}); 
            }
            if(title != '' && side != 0){
                $.ajax({
                    method:'POST',
                    url:"https://aseos.ir/sidebars/check_add_menu",
                    data:{title : title , link : link , parent_id : parent_id , side : side , mega : mega , icons : icons, list_class : list_class , list_attr : list_attr ,link_class:link_class,link_attr:link_attr,ul_child_class:ul_child_class,ul_child_attr:ul_child_attr, custom_html : custom_html , end_custom_html : end_custom_html , send : send },
                    success:function (values){
                        if(values == 0){
                            swal({
                                title: "خطا در اطلاعات",
                                text: "اطلاعات وارد شده تکراری و یا اشتباه می باشد",
                                icon: "error",
                                button: "متوجه شدم"
                            }).then(function(){
                                     window.location.replace("https://aseos.ir/sidebars/add_menu"); 
                            });
                        }
                        if(values == 1){
                            swal({
                                title: "عملیات موفق",
                                text: "منو ی جدید اضافه شد",
                                icon: "success",
                                button: "ادامه"
                            }).then(function(){
                                window.location.replace("https://aseos.ir/sidebars/show_menus"); 
                            });
                        }
                    },
                    error:function(){
                        alert('error');
                    }
                })
            }
        })
    })
</script>
<?php }else{?>
<script>
    $(document).ready(function (){
        $("#send").click(function(){
            let id=$("#id").val();
            let title = $("#title").val();
            let link = $("#link").val();
            let parent_id = $("#parent_id").val();
            let side = $("#side_id").val();
            let mega = $("#mega").val();
            let icons = $("#icons").val(); 
            let list_css = $("#list_css").val();
            let link_css = $("#link_css").val();
            let ul_css = $("#ul_css").val();
            let custom_html=$("#custom_html").val();
            let end_custom_html=$("#end_custom_html").val();
            let send="ok";
            if(title == ''){
                $("#title").css({"border":"1px solid red"});
                $("#titleErr").removeClass("d-none");
                $("#titleErr").addClass("d-block");
            }else{
                $("#titleErr").removeClass("d-block");
                $("#titleErr").addClass("d-none");
                $("#title").css({"border":"1px solid green"}); 
            }
            if(side == 0){
                $("#side_id").css('border',"1px solid red");
            }else{
                $("#side_id").css('border','1px solid green');
                
            }
            if(title != '' && side != 0){
                $.ajax({
                    method:'POST',
                    url:"https://aseos.ir/sidebars/edit_menu_check",
                    data:{id : id , title : title , link : link , parent_id : parent_id , side : side , mega : mega , icons : icons,list_css:list_css,link_css:link_css,ul_css:ul_css,custom_html : custom_html , end_custom_html : end_custom_html , send : send },
                    success:function (values){
                        if(values == 0){
                            swal({
                                title: "خطا در اطلاعات",
                                text: "اطلاعات وارد شده تکراری و یا اشتباه می باشد",
                                icon: "error",
                                button: "متوجه شدم"
                            }).then(function(){
                                     window.location.replace("https://aseos.ir/sidebars/edit_menu/"+id); 
                            });
                        }
                        if(values == 1){
                            swal({
                                title: "عملیات موفق",
                                text: "منو ویرایش شد",
                                icon: "success",
                                button: "ادامه"
                            }).then(function(){
                                window.location.replace("https://aseos.ir/sidebars/show_menus"); 
                            });
                        }
                    },
                    error:function(){
                        alert('error');
                    }
                })
            }
        })
    })
</script>
<?php }
}else{
?>
<div class="container-fluid mt-5" style="min-height:480px;">
    <div class="row mt-5">
        <div class="col-lg-12 col-md-12 mt-5">
            <div class="alert alert-danger rounded-10 mt-5 pd-x-25 text-center box-shadow-pink">ابتدا یک ساید بار ایجاد کنید تا منو ها در آن قرار گیرند
            <a class='btn btn-block btn-primary-gradient box-shadow-primary rounded-10' href='<?= base_url()."sidebars".DS."add_side"?>'>ایجاد سایدبار</a>
            </div>
        </div>
    </div>
</div>
<?php }?>
<script>
$(document).ready(function(){
    $("#showSet").click(function(){
        $(this).hide();
        $(".sett").css("display", "flex");
    })
})
</script>
<script>
    $(document).ready(function (){
        $('#side_id').on('change', function() {
            let selectBox=$(this).val();
            if(selectBox == 0){
                $("#side_id").css('border',"1px solid red");
                $('#parent_id').html('');
            }else{
                $("#side_id").css('border','1px solid green');
              
                 $.ajax({
                    method : "POST" ,
                    url :"<?php echo base_url();?>sidebars/side_place_id" ,
                    data : { selectBox : selectBox} ,
                    success:function (v){
                        if(v=='left'){
                            $("#bpr").addClass('d-none');
                            $("#bpri").removeClass('d-none');
                            $("#bpri").html('<p class="asdfg">سایدبار سمت چپ صفحه است</p>');
                        }
                        if(v=='right'){
                            $("#bpr").addClass('d-none');
                            $("#bpri").removeClass('d-none');
                            $("#bpri").html('<p class="asdfg">سایدبار سمت راست صفحه است</p>');
                        }
                        if(v=='foot'){
                            $("#bpr").addClass('d-none');
                            $("#bpri").removeClass('d-none');
                            $("#bpri").html('<p class="asdfg">سایدبار پایین صفحه است</p>');
                        }
                        if(v=='top'){
                            $("#bpri").addClass('d-none');
                            $("#bpr").removeClass('d-none');
                        }
                        $.ajax({
                            method : "POST" ,
                            url :"<?php echo base_url();?>sidebars/menuselectbox" ,
                            data : { selectBox : selectBox} ,
                            success:function (e){
                                $('#parent_id').html(e);
                            },
                            error:function(){
                                alert('error');
                            }
                        });
                    },
                    error:function(){
                        alert('error');
                    }
                });
            }
        });
    })
</script>
