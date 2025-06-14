<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style type="text/css" id="s./node_modules/css-loader/index.js!./node_modules/sass-loader/lib/loader.js!./package/src/animation.scss-0">/**
 * @license
 * Copyright Akveo. All Rights Reserved.
 * Licensed under the MIT License. See License.txt in the project root for license information.
 */
.eva-animation {
  animation-duration: 1s;
  animation-fill-mode: both; }

.eva-infinite {
  animation-iteration-count: infinite; }

.eva-icon-shake {
  animation-name: eva-shake; }

.eva-icon-zoom {
  animation-name: eva-zoomIn; }

.eva-icon-pulse {
  animation-name: eva-pulse; }

.eva-icon-flip {
  animation-name: eva-flipInY; }

.eva-hover {
  display: inline-block; }

.eva-hover:hover .eva-icon-hover-shake, .eva-parent-hover:hover .eva-icon-hover-shake {
  animation-name: eva-shake; }

.eva-hover:hover .eva-icon-hover-zoom, .eva-parent-hover:hover .eva-icon-hover-zoom {
  animation-name: eva-zoomIn; }

.eva-hover:hover .eva-icon-hover-pulse, .eva-parent-hover:hover .eva-icon-hover-pulse {
  animation-name: eva-pulse; }

.eva-hover:hover .eva-icon-hover-flip, .eva-parent-hover:hover .eva-icon-hover-flip {
  animation-name: eva-flipInY; }

@keyframes eva-flipInY {
  from {
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    animation-timing-function: ease-in;
    opacity: 0; }
  40% {
    transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    animation-timing-function: ease-in; }
  60% {
    transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    opacity: 1; }
  80% {
    transform: perspective(400px) rotate3d(0, 1, 0, -5deg); }
  to {
    transform: perspective(400px); } }

@keyframes eva-shake {
  from,
  to {
    transform: translate3d(0, 0, 0); }
  10%,
  30%,
  50%,
  70%,
  90% {
    transform: translate3d(-3px, 0, 0); }
  20%,
  40%,
  60%,
  80% {
    transform: translate3d(3px, 0, 0); } }

@keyframes eva-pulse {
  from {
    transform: scale3d(1, 1, 1); }
  50% {
    transform: scale3d(1.2, 1.2, 1.2); }
  to {
    transform: scale3d(1, 1, 1); } }

@keyframes eva-zoomIn {
  from {
    opacity: 1;
    transform: scale3d(0.5, 0.5, 0.5); }
  50% {
    opacity: 1; } }
</style>
<?php
  //fr 
if(empty($s)){
    $plce="top";
}else{
    $plce=$s;
}  
if(empty($k)){
    $pr=1;
}else{
    $pr=$k;
}
if(empty($fr)){
    $arrc=1;
}else{
    $arrc=$fr;
}
$a=form_input($e);
$b=form_dropdown('place',$f,$plce,array('class'=>'rounded-5 SlectBox form-control','id'=>'place'));
$c=form_dropdown("Priority",$g,$pr,array('class'=>'rounded-5 SlectBox form-control','id'=>'Priority'));
$x=form_textarea($w);
$y=form_textarea($z);
$addset=form_textarea($addi);
$d=form_button($h);
$ad=form_dropdown('Comments',$ar,$arrc,array('class'=>'rounded-5 SlectBox form-control','id'=>'Comments'));
$_SESSION['mark_num']=(isset($_SESSION['mark_num'])&&!empty($_SESSION['mark_num'])?$_SESSION['mark_num']:0);
?>
<style>
    span.file-icon>p{
        font-size:23px !important;
    }
    #titleMp {
		background-color: #284068;
		color: white;
		width: 90%;
		margin-left: 5%;
		margin-right: 5%;
		border-radius: 10px;
		padding: 7px;
		box-shadow: 2px 3px 7px #84842e;
		margin-bottom: 5px;
	}

	#titleMp::placeholder {
		color: lightgrey;
	}

	.sure {
		background-color: #718d71;
		box-shadow: 2px 3px 7px #20b22c;
		margin-left: 5%;
		/*margin-right: 5%;*/
		width: 95%;
	}

	.unSure {
		background-color: #d4c73b;
		box-shadow: 2px 3px 7px #c481ab;
	}

	.del {
		background-color: #d43b3b;
		box-shadow: 2px 3px 7px mediumvioletred;
	}

	.inpBtn {
		margin-top: 3px;
		color: white;
		text-align: center;
		padding-left: 10px;
		padding-right: 10px;
		margin-right: 5px;
		border-radius: 10px;
		padding-top: 5px;
		padding-bottom: 4px;
		border: none;
		outline: none;
	}

	.inpBtn:hover, #title:hover {
		position: relative;
		top: 2px;
	}

	#error {
	    position: absolute;
        z-index: 402;
        width: 12%;
        margin-left: 44%;
        margin-right: 44%;
        top: 222px;
        height: 44px;
        line-height: 44px;
		border-radius: 10px;
		text-align: center;
		background-color: rgba(238, 115, 115, 0.28);
		box-shadow: 2px 3px 8px #b1375f;
		color: #fc0404;
		text-shadow: 2px 2px 3px #262424;
		font-weight: bold;
		font-size: 20px;
	}

	.leaflet-popup-content-wrapper {
		background: rgba(245, 222, 179, 0.35) !important;
		font-size: 15px;
		font-weight: bold;
	}
		
	.dropify-wrapper.touch-fallback {
        z-index: 0 !important;
        /*height:271px !important;*/
	}
	.dropify-wrapper.has-preview{
	    z-index:0;
	}
	.dropify-wrapper:hover {
	    z-index:0 !important;
	}
	
	.picture-div:hover{
	    opacity:0.9;
	}
</style>
<div class="container-fluid mt-5" style="min-height:480px;">
    <div class="row mt-5">
        <div class="col-lg-12 col-md-12">
			<div class="card">
    			<div class="card-body">
					<div class="main-content-label mg-b-5">
					<a style="float:left;padding: 7px;color:red;" title="انصراف" href="<?php echo base_url()."sidebars".DS."show_sides";?>"><i class="fa fa-times" aria-hidden="true"></i></a>
					<?php if(isset($edit) && !empty($edit)){?>
						<h3 class="pull-right txt-start">
						    ویرایش سایدبار
						</h3>
					<?php }else{?>
					<h3 class="pull-right txt-start">
						ایجاد ساید بار 
					</h3>
					<?php }?>
					</div>
					<?php if(isset($edit) && !empty($edit)){?>
					<p class="mg-b-20">به آسانی می توانید فضای منو های خود را ویرایش کنید</p>
					<?php }else{?>
					<p class="mg-b-20">در این بخش شما می توانید به آسانی در هر قسمت از صفحه ی خود فضایی به وجود آورید و بر اساس اولویت آنها را مرتب کنید و داخل آن منو های مورد نظر خود را وارد کنید</p>
					<?php }?>
					<div class="pd-30 pd-sm-20 bg-gray-200">
						<?php echo form_open();?>
					    <?php if(isset($id) && !empty($id)){echo "<input value='".$id."' type='hidden' id='id'>";}?>
							<div class="row row-xs" style="line-height: 0px;height: 55px;">
								<div class="col-md-3">
								    <label>عنوان سایدبار</label>
									<?= $a ?>
									<br/>
									<span class="mt-2 text-danger tx-10 d-none" id="titleErr">نمیتوانید این فیلد را خالی بگذارید!</span>
								</div>
								<div class="col-md-3 mg-t-10 mg-md-t-0">
								    <label>محل مورد نظر</label>
									<?= $b ?>
								</div>
								<div class="col-md-3 mg-t-10 mg-md-t-0">
								    <label>اولویت</label>
									<?= $c ?>
								</div>
								<div class="col-md-3 mg-t-10 mg-md-t-0">
								    <label>اضافه کردن بخش ها</label>
									<?= $ad ?>
								</div>
							</div>
							<div class="row row-xs mt-3" id="coa" style="line-height: 0px;height: 55px;">
								<div class="col-md-12 mg-t-10 mg-md-t-0">
								    <label>افرودن بخش ها به صورت دستی</label>
									<?= $addset ?>
								</div>
							</div>
							<a href='#' id="set">تنظیمات پیشرفته</a>
							<div class="row row-xs mt-3" id="co" style="line-height: 0px;height: 55px;">
								<div class="col-md-6 mg-t-10 mg-md-t-0">
								    <label>html قبل سایدبار</label>
									<?= $x ?>
								</div>
								<div class="col-md-6 mg-t-10 mg-md-t-0">
								    <label>html ها را ببندید</label>
									<?= $y ?>
								</div>
							</div>
							<div class="row row-xs mt-3 d-none" id="smap" style="line-height: 0px;height: 250px;">
								<input type="hidden" id="latLng" name="latLng">
				                <div id="error" style="display:none">پاک شد</div>
								<div class="col-md-6 mx-auto mg-t-10 mg-md-t-0" style="z-index:0" id="map">
								</div>
						    </div>
							<div class="row row-xs mt-3" style="line-height: 0px;height: 55px;">	
								<div class="col-md-12 mg-t-10 mg-md-t-0 mx-auto">
									<?= $d ?>
								</div>
							</div>
					    <?php echo form_close();?>
						<div id="selpic" class="row mb-4 d-none">
						    <!--upload pictures-->
						    <div class="col-sm-10 col-md-5 mg-t-10 mg-sm-t-0 mx-auto d-none" id='localoca'>
						        <form method="post" id="upload_form" align="center" enctype="multipart/form-data">
								    <input type="file" class="dropify" id="image_file" name="image_file" data-default-file="<?php echo base_url();?>assets/img/ecommerce/01.jpg" data-height="200">
								    <input type="submit" name="upload" id="upload" value="افزودن به گالری" class="btn btn-info-gradient btn-block mt-1" /> 
								</form> 
							</div>
							<div id="lod" class="col-md-12 d-none">
							    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: none; display: block; shape-rendering: auto;" width="28px" height="28px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid"><path fill="none" stroke="#497e68" stroke-width="14" stroke-dasharray="146.25568908691406 110.33323913574219" d="M24.3 30C11.4 30 5 43.3 5 50s6.4 20 19.3 20c19.3 0 32.1-40 51.4-40 C88.6 30 95 43.3 95 50s-6.4 20-19.3 20C56.4 70 43.6 30 24.3 30z" stroke-linecap="butt" style="transform:scale(1);transform-origin:50px 50px"><animate attributeName="stroke-dashoffset" repeatCount="indefinite" dur="1s" keyTimes="0;1" values="0;256.58892822265625"></animate></path></svg>
							</div>
							<!--show pictures-->
							<input type="hidden" id="pi"/>
							<div class='col-md-10 mx-auto col-sm-12 mg-t-10 mg-sm-t-0' id="pictures">
							</div>
						</div>
						<script>
						     $(document).ready(function(){  
                                    $('#upload_form').on('submit', function(e){ 
                                        e.preventDefault();
                                        if($('#lod').hasClass('d-none')){
                                           $('#lod').removeClass('d-none'); 
                                        }
                                        if($("#localoca").hasClass('d-none')){
                                            
                                        }else{
                                            $("#localoca").addClass('d-none');
                                        }
                                        if($('#image_file').val() == ''){  
                                            alert("Please Select the File");  
                                        }else{  
                                            
                                            $.ajax({  
                                                url:"<?php echo base_url(); ?>sidebars/pic_upload",   
                                                method:"POST",  
                                                data:new FormData(this),  
                                                contentType: false,  
                                                cache: false,  
                                                processData:false, 
                                                async:false,
                                                success:function(data)  
                                                {  
                                                    if($("#selpic").hasClass('d-none')){$("#selpic").removeClass('d-none');}
                                                    if($("#pictures").hasClass('d-none')){$("#pictures").removeClass('d-none');}
                                                    if($("#localoca").hasClass('d-none')){}else{$("#localoca").addClass('d-none');}
                                                    if($("#coa").hasClass('d-none')){}else{$("#coa").addClass('d-none');}
                                                    if($("#smap").hasClass('d-none')){}else{$("#smap").addClass('d-none');}
                                                    let xa='ok';
                                                    $.ajax({
                                                        url:'<?php echo base_url();?>sidebars/all_pic',
                                                        method:'POST',
                                                        data:{xa:xa},
                                                        success:function(x){
                                                            $('#pictures').html(x);
                                                            if($("#lod").hasClass('d-none')){
                                                                
                                                            }else{
                                                                $("#lod").addClass('d-none');
                                                            }
                                                        }
                                                    })
                                                }  
                                            });  
                                        }
                                    });
                                }); 
						</script>
					</div>
				</div>
			</div>
		</div>        
    </div>
</div>
<!-- Internal Select2 js-->
<script src="<?php echo base_url();?>assets/plugins/select2/js/select2.min.js"></script>
<!--Internal Fileuploads js-->
<script src="<?php echo base_url();?>assets/plugins/fileuploads/js/fileupload.js"></script>
<script src="<?php echo base_url();?>assets/plugins/fileuploads/js/file-upload.js"></script>
<!--Internal Fancy uploader js-->
<script src="<?php echo base_url();?>assets/plugins/fancyuploder/jquery.ui.widget.js"></script>
<script src="<?php echo base_url();?>assets/plugins/fancyuploder/jquery.fileupload.js"></script>
<script src="<?php echo base_url();?>assets/plugins/fancyuploder/jquery.iframe-transport.js"></script>
<script src="<?php echo base_url();?>assets/plugins/fancyuploder/jquery.fancy-fileupload.js"></script>
<script src="<?php echo base_url();?>assets/plugins/fancyuploder/fancy-uploader.js"></script>
<!--Internal  Form-elements js-->
<script src="<?php echo base_url();?>assets/js/advanced-form-elements.js"></script>
<script src="<?php echo base_url();?>assets/js/select2.js"></script>
<!--Internal Sumoselect js-->
<script src="<?php echo base_url();?>assets/plugins/sumoselect/jquery.sumoselect.js"></script>
<script>
    let ln, marker, lt, map, popup, x, title, i, marks, mark, z;
    
    // start map
    
    function onMapClick(e) {
		map.addLayer(marker);
	}

	function f(x, y) {
		return '<label style="margin-left: 25%;margin-bottom: 5px" for="titleMp">عنوان مکان</label>' +
			'<input type="text" id="titleMp" placeholder="عنوانی را وارد کنید">' +
			'<button type="button" onclick="s(' + x + ',' + y +')" class="sure inpBtn">درسته</button>';
	}

	function g(x, y) {
		return '<div><button class="inpBtn del" onclick="del(' + x + ',' + y+');" type="button">پاک شود</button></div>';
	}

	function s(lti, lng) {
		lt = parseFloat(lti);
		ln = parseFloat(lng);
		title = $("#titleMp").val();
		marker = new L.marker({lon: ln,lat: lt}).bindPopup(title + g(ln, lt)).addTo(map);
		ln = lt = 0;
		map.closePopup();
		$.ajax({
			method: 'post',
			url: '<?php echo base_url()?>sidebars/add_mark',
			data: {lt: lti, ln: lng, title: title},
			success: function (ha) {
			    if(ha==0){
			        alert('error');
			    }
			},
			error:function(){
			}
		})
	}

	function del(ln, lt) {
		$.ajax({
			method: 'post',
			url: '<?php echo base_url()?>sidebars/del_mark',
			data: {lt: lt, ln: ln},
			success: function (viii) {
				if (viii == 1) {
					if(map.removeLayer(marker)){
    					$("#error").show();
    					function h() {
    						$("#error").hide();
    					}
    					setTimeout(h, 3000);
					}
				}
			}
		});
	}

	function j() {
	    let aha='ha';
		$.ajax({
			method: 'post',
			data:{aha:aha},
			url: '<?php echo base_url()?>sidebars/check_marks',
			success: function (value) {
				if (value) {
					marks = value.split(',');
					for (i = 0; i <= marks.length; i++) {
						mark = marks[i].split('|');
						L.marker({lon: parseFloat(mark[0]), lat:parseFloat(mark[1])}).bindPopup(mark[2]+ g(parseFloat(mark[0]), parseFloat(mark[1]))).addTo(map);
					}
				} 
				else {	
				    function f(x, y) {
		                return '<label style="margin-left: 25%;margin-bottom: 5px" for="titleMp">عنوان مکان</label>' +'<input type="text" id="titleMp" placeholder="عنوانی وارد کنید">' +'<button type="button" onclick="s(' + x + ',' + y + ')" class="sure inpBtn">im sure</button>';
	                }
				}
			}
		})
	}

    $(document).ready(function () {
		map = L.map('map').setView({lon: 50.615054368972785 , lat: 35.955950233885645}, 13);
		j();
		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			maxZoom: 19,
			attribution: '&copy; <a href="https://openstreetmap.org/copyright">OpenStreetMap contributors</a>'
		}).addTo(map);
		L.control.scale({imperial: true, metric: true}).addTo(map);
		popup = L.popup();
		map.on('click', function (e) {
			popup.setLatLng(e.latlng).setContent(f(e.latlng.lat, e.latlng.lng)).openOn(map);
		});
	})
    
    // end map
    // start config this page

    $(document).ready(function(){
        if($("#Comments option:nth-child(3)").hasClass('d-none')){}else{$("#Comments option:nth-child(3)").addClass('d-none');}
        if($("#Comments option:last-child").hasClass('d-none')){}else{$("#Comments option:last-child").addClass('d-none');}
        $('#place').on('change',function(){
            if($(this).val()=='top'){
                if($("#Comments option:nth-child(3)").hasClass('d-none')){}else{$("#Comments option:nth-child(3)").addClass('d-none');}
                if($("#Comments option:last-child").hasClass('d-none')){}else{$("#Comments option:last-child").addClass('d-none');}
                if($("#coa").hasClass('d-none')){}else{$("#coa").addClass('d-none');}
                if($("#smap").hasClass('d-none')){}else{$("#smap").addClass('d-none');}
                $("#Comments").val('1');
            }
            if($(this).val()=='foot'){
                $("#Comments option:last-child").removeClass('d-none');
                if($("#Comments option:nth-child(3)").hasClass('d-none')){}else{$("#Comments option:nth-child(3)").addClass('d-none');}
                if($("#coa").hasClass('d-none')){}else{$("#coa").addClass('d-none');}
                $("#Comments").val('1');
            }
            if($(this).val()=='right' || $(this).val()=='left'){
                if($("#Comments option:last-child").hasClass('d-none')){}else{$("#Comments option:last-child").addClass('d-none');}
                $("#Comments option:nth-child(3)").removeClass('d-none');
                if($("#smap").hasClass('d-none')){}else{$("#smap").addClass('d-none');}
                $("#Comments").val('1');
            }    
        
        })
        $("#Comments").on('change',function(){
            if($(this).val()==5){
                if($("coa").hasClass('d-none')){}else{$("coa").addClass('d-none');}
                if($("#smap").hasClass('d-none')){$('#smap').removeClass('d-none');}
                if($("#selpic").hasClass('d-none')){}else{$("#selpic").addClass('d-none');}
            }
            if($(this).val()==2){
                if($("#coa").hasClass('d-none')){$('#coa').removeClass('d-none');}
                if($("#smap").hasClass('d-none')){}else{$("#smap").addClass('d-none');}
                if($("#selpic").hasClass('d-none')){}else{$("#selpic").addClass('d-none');}
            }
            if($(this).val()==1 || $(this).val()== 3){
                if($("#coa").hasClass('d-none')){}else{$("#coa").addClass('d-none');}
                if($("#smap").hasClass('d-none')){}else{$("#smap").addClass('d-none');}
                if($("#selpic").hasClass('d-none')){}else{$("#selpic").addClass('d-none');}
            }
            if($(this).val()== 4){
                if($("#selpic").hasClass('d-none')){$("#selpic").removeClass('d-none');}
                if($("#pictures").hasClass('d-none')){$("#pictures").removeClass('d-none');}
                if($("#localoca").hasClass('d-none')){}else{$("#localoca").addClass('d-none');}
                if($("#coa").hasClass('d-none')){}else{$("#coa").addClass('d-none');}
                if($("#smap").hasClass('d-none')){}else{$("#smap").addClass('d-none');}
                let xa='ok';
                $.ajax({
                    url:'<?php echo base_url();?>sidebars/all_pic',
                    method:'POST',
                    data:{xa:xa},
                    success:function(x){
                        $('#pictures').html(x);
                    }
                })
            }
        });
    })
    
    //end config this page
    // start send data for insert and update
    
    <?php if(empty($edit) || !isset($edit)){?>
        $(document).ready(function (){
            if($("#co").hasClass('d-none')){}else{$("#co").addClass('d-none');}
            if($("#coa").hasClass('d-none')){}else{$("#coa").addClass('d-none');}
            $('#set').click(function(){
                if($("#co").hasClass('d-none')){$('#co').removeClass('d-none');}
                if($("#set").hasClass('d-none')){}else{$("#set").addClass('d-none');}
            });
            $("#send").click(function(){
                let pic_user;
                if($("#Comments").val()=='3'){
                    pic_user='ok';
                }
                let title = $("#title").val();
                let place =$("#place").val();
                let Priority = $("#Priority").val();
                let Comments= $("#Comments").val();
                let co = $('#addi').val();
                let customHtml=$("#custom_html").val();
                let endCustomHtml=$("#custom_html_end").val();
                let pic_id=$('#pi').val();
                let send="ok";
                if(title==''){
                    $("#title").css({"border":"1px solid red"});
                    if($("#titleErr").hasClass('d-none')){$("#titleErr").removeClass("d-none");}
                    if($("#titleErr").hasClass('d-block')){}else{$("#titleErr").addClass("d-block");}
                }else{
                    if($("#titleErr").hasClass('d-block')){$("#titleErr").removeClass("d-block");}
                    if($("#titleErr").hasClass('d-none')){}else{$("#titleErr").addClass("d-none");}
                    $("#title").css({"border":"1px solid green"});  
                    $.ajax({
                        method:'post',
                        url:"https://aseos.ir/sidebars/check_add_side",
                        data:{pic_id:pic_id,pic_user:pic_user, title : title , place : place , Priority : Priority , customHtml : customHtml , endCustomHtml : endCustomHtml , send : send ,Comments:Comments,co:co},
                        success:function (values){
                            if(values==0){
                                swal({
                                    title: "خطا در اطلاعات",
                                    text: "اطلاعات وارد شده تکراری و یا اشتباه می باشد",
                                    icon: "error",
                                    button: "متوجه شدم"
                                }).then(function(){
                                         window.location.replace("https://aseos.ir/sidebars/add_side"); 
                                });
                            }
                            if(values==1){
                                swal({
                                    title: "عملیات موفق",
                                    text: "سایدبار جدید اضافه شد",
                                    icon: "success",
                                    button: "ادامه"
                                }).then(function(){
                                    window.location.replace("https://aseos.ir/sidebars/show_sides"); 
                                });
                            }
                            
                        }
                    })
                }
            })
        })
    <?php }else{?>
        $(document).ready(function (){
            $('#set').addClass('d-none');
            $("#send").click(function(){
                let title = $("#title").val();
                let classIcon =$("#class").val();
                let id=$("#id").val();
                let send="ok";
                if(title==''){
                    $("#title").css({"border":"1px solid red"});
                    $("#titleErr").removeClass("d-none");
                    $("#titleErr").addClass("d-block");
                }else{
                    $("#titleErr").removeClass("d-block");
                    $("#titleErr").addClass("d-none");
                    $("#title").css({"border":"1px solid green"});  
                    $.ajax({
                        method:'post',
                        url:"https://aseos.ir/sidebars/edit_side_check",
                        data:{title : title , classIcon : classIcon , send : send , id : id},
                        success:function (values){
                            if(values==0){
                                swal({
                                    title: "خطا در اطلاعات",
                                    text: "اطلاعات وارد شده تکراری و یا اشتباه می باشد",
                                    icon: "error",
                                    button: "متوجه شدم"
                                }).then(function(){
                                         window.location.replace("https://aseos.ir/sidebars/add_side"); 
                                });
                            }
                            if(values==1){
                                swal({
                                    title: "عملیات موفق",
                                    text: "سایدبار ویرایش شد",
                                    icon: "success",
                                    button: "ادامه"
                                }).then(function(){
                                    window.location.replace("https://aseos.ir/sidebars/show_sides"); 
                                });
                            }
                            
                        }
                    })
                }
            })
        })
    <?php }?>
</script> 