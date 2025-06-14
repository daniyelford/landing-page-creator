<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
$a=form_input($e);
$b=form_input($f);
$d=form_input($h);
$c=form_button($g);
?>
<div class="container-fluid mt-5" style="min-height:480px;">
    <div class="row mt-5">
        <div class="col-lg-12 col-md-12">
			<div class="card">
    			<div class="card-body">
					<div class="main-content-label mg-b-5">
					<a style="float:left;padding: 7px;color:red;" title="انصراف" href="<?php echo base_url()."sidebars".DS."show_icons";?>"><i class="fa fa-times" aria-hidden="true"></i></a>
					<?php if(isset($edit) && !empty($edit)){?>
						<h3 class="pull-right txt-start">
						    ویرایش آیکون
						</h3>
					<?php }else{?>
					<h3 class="pull-right txt-start">
					    ایجاد آیکون
					</h3>
					<?php }?>
					</div><p class="mg-b-20">
					<?php if(isset($edit) && !empty($edit)){?>
				        به آسانی می توانید آیکون های خود را ویرایش کنید
					<?php }else{?>
                        در این بخش شما می توانید به آسانی آیکون هایی را به وجود آورد تا کنار منو ها قرار بگیرند
					<?php }?>
					لیست آیکون ها را از 
					<!--<a href="https://fontawesome.com/icons">لیست اول</a> -->
					<!-- ؛ <a href="https://simplelineicons.github.io/">لیست دوم</a>-->
					<!-- ؛ <a href="https://cryptofont.com/">لیست سوم</a>-->
					<!-- ؛ <a href="https://themify.me/themify-icons">لیست چهارم</a>-->
					<!-- ؛ <a href="https://materialdesignicons.com/">لیست ینجم</a>-->
					<!-- ؛ <a href="https://feathericons.com/">لیست ششم</a>-->
					<!-- ؛ <a href="https://www.s-ings.com/typicons/">لیست هفتم</a>-->
					<!-- ؛ <a href="https://icons8.com/line-awesome">لیست هشتم</a> -->
                    <a href="https://fontawesome.com/v4/cheatsheet/">این لیست</a>
					بردارید
					
					
					</p>
					<div class="pd-30 pd-sm-40 bg-gray-200">
						<?= form_open()?>
					    <?php if(isset($id) && !empty($id)){echo "<input value='".$id."' type='hidden' id='id'>";}?>
							<div class="row row-xs" style="line-height: 0px;height: 55px;">
								<div class="col-md-3">
								    <label>عنوان آیکون</label>
									<?= $a ?>
									<br>
									<span class="mt-2 text-danger tx-10 d-none" id="titleErr">نمیتوانید این فیلد را خالی بگذارید!</span>
								</div>
								<div class="col-md-3 mg-t-10 mg-md-t-0">
								    <label>class مربوطه</label>
									<?= $b ?>
									<br>
									<span class="mt-2 text-danger tx-10 d-none" id="classErr">نمیتوانید این فیلد را خالی بگذارید!</span>
								</div>
								<div class="col-md-3 mg-t-10 mg-md-t-0">
								    <label>shourt code</label>
									<?= $d ?>
									<br>
									<span class="mt-2 text-danger tx-10 d-none" id="shrtcdErr">نمیتوانید این فیلد را خالی بگذارید!</span>
								</div>
								<div class="col-md-2 mg-t-10 mg-md-t-0 my-auto">
									<?= $c ?>
								</div>
							</div>
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
            let iconClass =$("#class").val();
            let shrtcd=$("#shrtcd").val();
            let send="ok";
            if(shrtcd == ''){
                $("#shrtcd").css({"border":"1px solid red"});
                $("#shrtcdErr").removeClass("d-none");
                $("#shrtcdErr").addClass("d-block");
            }
            if(title =='' && iconClass ==''){
                $("#title").css({"border":"1px solid red"});
                $("#titleErr").removeClass("d-none");
                $("#titleErr").addClass("d-block");    
                $("#class").css({"border":"1px solid red"});
                $("#classErr").removeClass("d-none");
                $("#classErr").addClass("d-block");
            }
            if(title != '' && iconClass == ''){
                $("#titleErr").removeClass("d-block");
                $("#titleErr").addClass("d-none");
                $("#title").css({"border":"1px solid green"}); 
                $("#class").css({"border":"1px solid red"});
                $("#classErr").removeClass("d-none");
                $("#classErr").addClass("d-block");
            }
            if(title =='' && iconClass != ''){
                $("#title").css({"border":"1px solid red"});
                $("#titleErr").removeClass("d-none");
                $("#titleErr").addClass("d-block");
                $("#classErr").removeClass("d-block");
                $("#classErr").addClass("d-none");
                $("#class").css({"border":"1px solid green"}); 
            }
            if(title != '' && iconClass != '' && shrtcd != ''){
                $("#titleErr").removeClass("d-block");
                $("#titleErr").addClass("d-none");
                $("#title").css({"border":"1px solid green"}); 
                $("#classErr").removeClass("d-block");
                $("#classErr").addClass("d-none");
                $("#class").css({"border":"1px solid green"});
                $("#shrtcdErr").removeClass("d-block");
                $("#shrtcdErr").addClass("d-none");
                $("#shrtcd").css({"border":"1px solid green"});
                
                $.ajax({
                    method:'post',
                    url:"https://aseos.ir/sidebars/check_add_icon",
                    data:{title : title , iconClass : iconClass ,shrtcd : shrtcd, send : send },
                    success:function (values){
                        if(values==0){
                            swal({
                                title: "خطا در اطلاعات",
                                text: "اطلاعات وارد شده تکراری و یا اشتباه می باشد",
                                icon: "error",
                                button: "متوجه شدم"
                            }).then(function(){
                                     window.location.replace("https://aseos.ir/sidebars/add_icon"); 
                            });
                        }
                        if(values==1){
                            swal({
                                title: "عملیات موفق",
                                text: "آیکون جدید اضافه شد",
                                icon: "success",
                                button: "ادامه"
                            }).then(function(){
                                window.location.replace("https://aseos.ir/sidebars/show_icons"); 
                            });
                        }
                        
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
            let title = $("#title").val();
            let iconClass =$("#class").val();
            let id=$("#id").val();
            let shrtcd=$("#shrtcd").val();
            let send="ok";
             if(shrtcd == ''){
                $("#shrtcd").css({"border":"1px solid red"});
                $("#shrtcdErr").removeClass("d-none");
                $("#shrtcdErr").addClass("d-block");
            }
            if(title =='' && iconClass ==''){
                $("#title").css({"border":"1px solid red"});
                $("#titleErr").removeClass("d-none");
                $("#titleErr").addClass("d-block");    
                $("#class").css({"border":"1px solid red"});
                $("#classErr").removeClass("d-none");
                $("#classErr").addClass("d-block");
            }
            if(title != '' && iconClass == ''){
                $("#titleErr").removeClass("d-block");
                $("#titleErr").addClass("d-none");
                $("#title").css({"border":"1px solid green"}); 
                $("#class").css({"border":"1px solid red"});
                $("#classErr").removeClass("d-none");
                $("#classErr").addClass("d-block");
            }
            if(title =='' && iconClass != ''){
                $("#title").css({"border":"1px solid red"});
                $("#titleErr").removeClass("d-none");
                $("#titleErr").addClass("d-block");
                $("#classErr").removeClass("d-block");
                $("#classErr").addClass("d-none");
                $("#class").css({"border":"1px solid green"}); 
            }
            if(title != '' && iconClass != ''){
                $("#titleErr").removeClass("d-block");
                $("#titleErr").addClass("d-none");
                $("#title").css({"border":"1px solid green"}); 
                $("#classErr").removeClass("d-block");
                $("#classErr").addClass("d-none");
                $("#class").css({"border":"1px solid green"});
                     $("#shrtcdErr").removeClass("d-block");
                $("#shrtcdErr").addClass("d-none");
                $("#shrtcd").css({"border":"1px solid green"});
                $.ajax({
                    method:'post',
                    url:"https://aseos.ir/sidebars/edit_icon_check",
                    data:{title : title , iconClass : iconClass , send : send , shrtcd : shrtcd , id : id},
                    success:function (values){
                        if(values==0){
                            swal({
                                title: "خطا در اطلاعات",
                                text: "اطلاعات وارد شده تکراری و یا اشتباه می باشد",
                                icon: "error",
                                button: "متوجه شدم"
                            }).then(function(){
                                     window.location.replace("https://aseos.ir/sidebars/add_icon"); 
                            });
                        }
                        if(values==1){
                            swal({
                                title: "عملیات موفق",
                                text: "آیکون ویرایش شد",
                                icon: "success",
                                button: "ادامه"
                            }).then(function(){
                                window.location.replace("https://aseos.ir/sidebars/show_icons"); 
                            });
                        }
                        
                    }
                })
            }
        })
    })
</script>
<?php }?>
