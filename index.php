<?php session_start();
if(!isset($_SESSION['run_project']) && empty($_SESSION['run_project'])){ ?>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="Description" content="">
			<meta name="Author" content="DanialFrd">
			<meta name="Keywords" content=""/>
			<!-- Title -->
			<title>ثبت نام</title>
			<!-- Favicon -->
			<link rel="icon" href="project/assets/img/brand/logo1.png" type="image/x-icon"/>
			<!--  Custom Scroll bar-->
			<link href="project/assets/plugins/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet"/>
			<link href="project/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet"/>
			<!--- Style css -->
			<link href="project/assets/css-rtl/style.css" rel="stylesheet">
			<!--- Dark-mode css -->
			<link href="project/assets/css-rtl/style-dark.css" rel="stylesheet">
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" />
			<!---Skinmodes css-->
			<link href="project/assets/css-rtl/skin-modes.css" rel="stylesheet">
			<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
			<link href="project/assets/plugins/fileuploads/css/fileupload.css" rel="stylesheet" type="text/css">
			<link href="project/assets/plugins/fancyuploder/fancy_fileupload.css" rel="stylesheet">
			<link rel="stylesheet" href="project/assets/plugins/sumoselect/sumoselect-rtl.css">
			<link rel="stylesheet" href="project/assets/plugins/telephoneinput/telephoneinput-rtl.css">
			<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		</head>
		<body class="main-body app sidebar-mini" id="tmMode">
			<div class="container-fluid mt-3" style="min-height:480px;">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									ثبت نام 		
								</div>
								<p class="mg-b-20">مراحل ثبت نام را به ترتیب پشت سر بگذارید</p>
								<div id="wizard3" role="application" class="wizard clearfix vertical"><div class="steps clearfix">
									<ul role="tablist">
										<li role="tab" class="first" aria-disabled="false" aria-selected="false">
											<a id="wizard3-t-0" href="#" aria-controls="wizard3-p-0">
												<span class="number">1</span>
												<span class="title">ثبت دامنه واطلاعات دیتابیس</span>
											</a>
										</li>
										<li role="tab" class="" aria-disabled="false" aria-selected="false">
											<a id="wizard3-t-1" href="#" aria-controls="wizard3-p-1">
												<span class="number">2</span> 
												<span class="title">ثبت کاربر آدمین</span> 
											</a>
										</li>
									</ul> 
								</div>  
								<div class="content clearfix">            
									<form id='f2'>
										<h3 id="wizard3-h-0" tabindex="-1" class="title">اطلاعات دامنه</h3>
										<section id="wizard3-p-0" role="tabpanel" aria-labelledby="wizard3-h-0" class="body" aria-hidden="true">
											<div class="control-group form-group">
												<label class="form-label">نام کسب و کار و یا شرکت خود را وارد کنید</label>
												<input  name='com' class='form-control rounded-5' id='com' placeholder='نام سایت و کسب و کار' type='text'/>
											</div>
											<div class="control-group form-group">
												<label class="form-label">نام دیتابیس سایت خود را وارد کنید</label>
												<input  name='dbname' class='form-control rounded-5' id='dbname' placeholder='نام دیتابیس' type='text'/>
											</div>
											<div class="control-group form-group">
												<label class="form-label">نام کاربری سایت خود را وارد کنید</label>
												<input name='username' class='form-control rounded-5' id='username' placeholder='نام کاربری سایت' type='text'/>
											</div>
											<div class="control-group form-group">
												<label class="form-label">رمز عبور سایت خود را وارد کنید</label>
												<input name='password' class='form-control rounded-5' id='password' placeholder='رمز عبور سایت' type='password'/>
											</div>
											<div class="control-group form-group mb-0">
												<input class="btn btn-success-gradient btn-block rounded-5" value='ثبت اطلاعات'type='button'id='send' name='send' content='ثبت اطلاعات'style='height:40px;'/>
											</div>
										</section>
									</form>
									<form id='f1'>
										<h3 id="wizard3-h-2" tabindex="-1" class="title current">در این بخش  شما به عنوان مدیر سایت در سایت خود ثبت نام می کنید</h3>
										<section id="wizard3-p-2" role="tabpanel" aria-labelledby="wizard3-h-2" class="body current" aria-hidden="false">
										<div class="form-group">
											<label class="form-label">نام کاربری</label>
											<input  name='username_user' class='form-control rounded-5' id='username_user' placeholder='نام کاربری' type='text'/>
										</div>
										<div class="form-group">
											<label class="form-label">رمز عبور</label>
											<input name='password_user' class='form-control rounded-5' id='password_user' placeholder='رمز عبور' type='password'/>
										</div>
										<div class="form-group">
											<label class="form-label">تکرار رمز عبور</label>
											<input name='password_config_user' class='form-control rounded-5' id='password_config_user' placeholder='تکرار رمز عبور' type='password'/>
										</div>									
										<div class="form-group">
											<label class="form-label">کد کپچا را وارد کنید</label>
											<input name = 'captcha_x' type = 'number' id = 'captcha_x' placeholder = 'کد فعال سازی' class = 'form-inter-captcha form-control rounded-10'/>
											<img src="cap.php" class='img-captcha' alt="captcha">
										</div>
										<div class="control-group form-group mb-0">
											<input class="btn btn-success-gradient btn-block rounded-5" value='ثبت نام' type='button' id='send_user' name='send_user' content='ثبت نام' style='height:40px;'/>
										</div>
									</section>
								</form>
							</div>
							<div class="actions clearfix" style="display: none;">
								<ul role="menu" aria-label="Pagination">
									<li class="" aria-disabled="false">
										<a href="#previous" role="menuitem">قبلی</a>
									</li>
									<li aria-hidden="true" aria-disabled="true" class="disabled" style="display: none;">
										<a href="#next" role="menuitem">بعدی</a>
									</li>
									<li aria-hidden="false">
										<a href="#finish" role="menuitem">پایان</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</body>
	</html>
	<script>
		$(document).ready(function(){
			$("#f1").hide();
			$("#send").click(function(e){
    			e.preventDefault();
    			let url1='https://'+window.location.hostname,
    			dbname=$("#dbname").val(),
				com=$("#com").val(),
				username =$("#username").val(),
    			password = $("#password").val();
    			if(dbname==''){
    				$("#dbname").css('border','1px solid red');
    			}else{
    				$("#dbname").css('border','1px solid green');
    			}
    			if(com==''){
    				$("#com").css('border','1px solid red');
    			}else{
    				$("#com").css('border','1px solid green');
    			}
    			if(username==''){
    				$("#username").css('border','1px solid red');
    			}else{
    				$("#username").css('border','1px solid green');
    			}
    			if(password==''){
    				$("#password").css('border','1px solid red');
    			}else{
    				$("#password").css('border','1px solid green');
    			}
    			if(password=='' || username=='' || com=='' || dbname==''){
					return false;
    			}else{
    				let send='ok';
    				$.ajax({
						url:window.location.origin + "/checking.php",
						method:"POST",
						data:{send:send,url1:url1,dbname:dbname,com:com,username:username,password:password},
						success:function(z){
							if(z==1){
								$("#f2").hide();
								$('#f1').show();
							}
							if(z==0){
								swal("اخطار", "اطلاعات اشتباه وارد شده است", "error");
								$("#dbname").css('border','1px solid red');
								$("#username").css('border','1px solid red');
								$("#password").css('border','1px solid red');
							}
						}
						,erroe:function(){
							
						}
					})
				}
			})
		});
		$(document).ready(function(){
			$('#send_user').click(function(e){
				e.preventDefault();
				let usr=$("#username_user").val();
				let pss=$("#password_user").val();
				let psscon=$("#password_config_user").val();
				let cap=$("#captcha_x").val();
				let a='';
				let b='';
				let send_user='ok';
				if(usr==''){
					$("#username_user").css('border','1px solid red');
				}else{
					$("#username_user").css('border','1px solid green');
				}
				if(pss==''){
					$("#password_user").css('border','1px solid red');
				}else{
					$("#password_user").css('border','1px solid green');							                        
				}
				if(psscon==''){
					$("#password_config_user").css('border','1px solid red');
				}else{
					$("#password_config_user").css('border','1px solid green');
				}
				if(pss==''&& psscon=='' && pss==psscon){
					b='ok';
				}else{
					$("#password_user").css('border','1px solid red');
					$("#password_config_user").css('border','1px solid red');
				}
				if(cap==''){
					$("#captcha_x").css('border','1px solid red');
				}else{
					let send_cap="ok";
					$.ajax({
						url:window.location.origin + "/checking.php",
						method:"POST",
						data:{cap:cap,send_cap:send_cap},
						success:function(y){
							if(y==1){
								a='ok';
								$("#captcha_x").css('border','1px solid green');
							}
							if(y==0){
								swal("اخطار", "اطلاعات اشتباه وارد شده است", "error");
								$("#captcha_x").css('border','1px solid red');
							}
						},error:function(){
							
						}
					})
				}
				if(usr!='' && pss!='' && psscon!='' && b!='' && a!='' && cap!=''){
					$.ajax({
						url:window.location.origin + "/checking.php",
						method:"POST",
						data:{send_user:send_user,usr:usr,pss:pss},
						success:function(x){
							if(x==1){
								window.location.reload();
							}
							if(x==0){
								swal("اخطار", "اطلاعات اشتباه وارد شده است", "error");
							}
						},error:function(){
				
						}
					})
				}
							       
			})
		})		                
	</script>
<?php }else{
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2019, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2019, British Columbia Institute of Technology (https://bcit.ca/)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */

/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * current environment. Setting the environment also influences
 * things like logging and error reporting.
 *
 * This can be set to anything, but default usage is:
 *
 *     development
 *     testing
 *     production
 *
 * NOTE: If you change these, also change the error_reporting() code below
 */
	define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'development');

/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but testing and live will hide them.
 */
switch (ENVIRONMENT)
{
	case 'development':
		error_reporting(-1);
		ini_set('display_errors', 1);
	break;

	case 'testing':
	case 'production':
		ini_set('display_errors', 0);
		if (version_compare(PHP_VERSION, '5.3', '>='))
		{
			error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
		}
		else
		{
			error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
		}
	break;

	default:
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'The application environment is not set correctly.';
		exit(1); // EXIT_ERROR
}

/*
 *---------------------------------------------------------------
 * SYSTEM DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * This variable must contain the name of your "system" directory.
 * Set the path if it is not in the same directory as this file.
 */
	$system_path = 'system';

/*
 *---------------------------------------------------------------
 * APPLICATION DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * If you want this front controller to use a different "application"
 * directory than the default one you can set its name here. The directory
 * can also be renamed or relocated anywhere on your server. If you do,
 * use an absolute (full) server path.
 * For more info please see the user guide:
 *
 * https://codeigniter.com/user_guide/general/managing_apps.html
 *
 * NO TRAILING SLASH!
 */
	$application_folder = 'application';

/*
 *---------------------------------------------------------------
 * VIEW DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * If you want to move the view directory out of the application
 * directory, set the path to it here. The directory can be renamed
 * and relocated anywhere on your server. If blank, it will default
 * to the standard location inside your application directory.
 * If you do move this, use an absolute (full) server path.
 *
 * NO TRAILING SLASH!
 */
	$view_folder = '';


/*
 * --------------------------------------------------------------------
 * DEFAULT CONTROLLER
 * --------------------------------------------------------------------
 *
 * Normally you will set your default controller in the routes.php file.
 * You can, however, force a custom routing by hard-coding a
 * specific controller class/function here. For most applications, you
 * WILL NOT set your routing here, but it's an option for those
 * special instances where you might want to override the standard
 * routing in a specific front controller that shares a common CI installation.
 *
 * IMPORTANT: If you set the routing here, NO OTHER controller will be
 * callable. In essence, this preference limits your application to ONE
 * specific controller. Leave the function name blank if you need
 * to call functions dynamically via the URI.
 *
 * Un-comment the $routing array below to use this feature
 */
	// The directory name, relative to the "controllers" directory.  Leave blank
	// if your controller is not in a sub-directory within the "controllers" one
	// $routing['directory'] = '';

	// The controller class file name.  Example:  mycontroller
	// $routing['controller'] = '';

	// The controller function you wish to be called.
	// $routing['function']	= '';


/*
 * -------------------------------------------------------------------
 *  CUSTOM CONFIG VALUES
 * -------------------------------------------------------------------
 *
 * The $assign_to_config array below will be passed dynamically to the
 * config class when initialized. This allows you to set custom config
 * items or override any default config values found in the config.php file.
 * This can be handy as it permits you to share one application between
 * multiple front controller files, with each file containing different
 * config values.
 *
 * Un-comment the $assign_to_config array below to use this feature
 */
	// $assign_to_config['name_of_config_item'] = 'value of config item';



// --------------------------------------------------------------------
// END OF USER CONFIGURABLE SETTINGS.  DO NOT EDIT BELOW THIS LINE
// --------------------------------------------------------------------

/*
 * ---------------------------------------------------------------
 *  Resolve the system path for increased reliability
 * ---------------------------------------------------------------
 */

	// Set the current directory correctly for CLI requests
	if (defined('STDIN'))
	{
		chdir(dirname(__FILE__));
	}

	if (($_temp = realpath($system_path)) !== FALSE)
	{
		$system_path = $_temp.DIRECTORY_SEPARATOR;
	}
	else
	{
		// Ensure there's a trailing slash
		$system_path = strtr(
			rtrim($system_path, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
		).DIRECTORY_SEPARATOR;
	}

	// Is the system path correct?
	if ( ! is_dir($system_path))
	{
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your system folder path does not appear to be set correctly. Please open the following file and correct this: '.pathinfo(__FILE__, PATHINFO_BASENAME);
		exit(3); // EXIT_CONFIG
	}

/*
 * -------------------------------------------------------------------
 *  Now that we know the path, set the main path constants
 * -------------------------------------------------------------------
 */
	// The name of THIS file
	define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));

	// Path to the system directory
	define('BASEPATH', $system_path);

	// Path to the front controller (this file) directory
	define('FCPATH', dirname(__FILE__).DIRECTORY_SEPARATOR);

	// Name of the "system" directory
	define('SYSDIR', basename(BASEPATH));

	// The path to the "application" directory
	if (is_dir($application_folder))
	{
		if (($_temp = realpath($application_folder)) !== FALSE)
		{
			$application_folder = $_temp;
		}
		else
		{
			$application_folder = strtr(
				rtrim($application_folder, '/\\'),
				'/\\',
				DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
			);
		}
	}
	elseif (is_dir(BASEPATH.$application_folder.DIRECTORY_SEPARATOR))
	{
		$application_folder = BASEPATH.strtr(
			trim($application_folder, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
		);
	}
	else
	{
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your application folder path does not appear to be set correctly. Please open the following file and correct this: '.SELF;
		exit(3); // EXIT_CONFIG
	}

	define('APPPATH', $application_folder.DIRECTORY_SEPARATOR);

	// The path to the "views" directory
	if ( ! isset($view_folder[0]) && is_dir(APPPATH.'views'.DIRECTORY_SEPARATOR))
	{
		$view_folder = APPPATH.'views';
	}
	elseif (is_dir($view_folder))
	{
		if (($_temp = realpath($view_folder)) !== FALSE)
		{
			$view_folder = $_temp;
		}
		else
		{
			$view_folder = strtr(
				rtrim($view_folder, '/\\'),
				'/\\',
				DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
			);
		}
	}
	elseif (is_dir(APPPATH.$view_folder.DIRECTORY_SEPARATOR))
	{
		$view_folder = APPPATH.strtr(
			trim($view_folder, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
		);
	}
	else
	{
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your view folder path does not appear to be set correctly. Please open the following file and correct this: '.SELF;
		exit(3); // EXIT_CONFIG
	}

	define('VIEWPATH', $view_folder.DIRECTORY_SEPARATOR);

/*
 * --------------------------------------------------------------------
 * LOAD THE BOOTSTRAP FILE
 * --------------------------------------------------------------------
 *
 * And away we go...
 */
require_once BASEPATH.'core/CodeIgniter.php';

}
