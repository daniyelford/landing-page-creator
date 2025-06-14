<?php
$data = array("class" => "navbar-form", "method" => "post", "role" => "search");
$formOpen = form_open();
$formOpen1 = form_open(array(), $data);
$formSearch = form_input(array('type' => 'search', 'name' => 'search', 'class' => 'form-control', 'placeholder' => 'هر چیزی را جستجو کنید ...'));
$formSearch1 = form_input(array('type' => 'search', 'name' => 'search1', 'class' => 'form-control', 'placeholder' => 'هر چیزی را جستجو کنید ...'));
$btnSearch = form_button(array("content" => "<i class='fas fa-search d-none d-md-block'></i>", "name" => "btnSearch", "value" => "btnSearch", "type" => "submit", "class" => "btn"));
$btnReset = form_button(array("content" => "<i class='fas fa-times'></i>", "name" => "btnReset", "value" => "btnReset", "type" => "reset", "class" => "btn btn-default"));
$btnSearch1 = form_button(array("content" => "<svg xmlns='http://www.w3.org/2000/svg' class='header-icon-svgs'  style='color:black;width:20px;height:20px;' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'>
												 <circle cx='11' cy='11' r='8'></circle>
												 <line x1='21' y1='21' x2='16.65' y2='16.65'></line>
												 </svg>", "name" => "btnSearch1", "value" => "btnSearch1", "type" => "submit", "class" => "btn btn-default nav-link resp-btn"));
$formClose = form_close();
//another var
$company_name='پرتال ساز علاءالدین';
$company_name_ex='علاءالدین';
$answerPicProfile = '3.jpg';
$numberMassageUnread = '4';
$usernameMassageSender = 'ali';
$contentOfMassage = 'hi man';
$timeMassageSend = 'friday';
$allMassageLink = '#';
$numberNewsUnread = '4';
$titleNews = 'news';
//$levelNews = 'pink';
//$levelNews = 'danger';
//$levelNews = 'warning';
//$levelNews = 'primary';
$levelNews = 'success';
$allNewsLink = '#';
$userManager = '#';

$news = '';
$message = '';

?>
<style>
    .comp{
        float: left;
        line-height: 66px;
        padding-right: 10px;
        font-size:25px;
    }
    .comphide{
        float:left;
        font-size:22px;
        line-height:70px;
        display:none;
    }
    @media screen and (max-width: 500px){
        .comp{
            display:none;
        }
        .comphide{
            display:block;
        }
    }
    @media screen and (max-width: 350px){
          .main-header-notification{
              display:none;
          }
    }
    @media screen and (max-width: 300px){
        .main-header-message {
            display:none;
        }
    }
    
    @media screen and (max-width: 260px){
        .comphide{
            display:none;
        }
    }

</style>
<div class="main-content app-content" style="margin:0px;">
	<div class="main-header sticky side-header nav nav-item" style="padding-right:0px !important;">
		<div class="container-fluid">
			<div class="main-header-left">
				<div class="logo">
					<a href="#"><img src="<?= base_url() ?>assets/img/brand/<?= $icon1 ?>" style="display:inline-block;width:71px;height:71px" alt="<?= $icon1Des ?>"></a>
			<h1 class='comp'><?= $company_name?></h1>
			<h1 class='comphide'><?= $company_name_ex?></h1>
				</div>
				<!--<div class="app-sidebar__toggle" data-toggle="sidebar">-->
				<!--	<a class="open-toggle" href="#"><i class="header-icon fe fe-align-left"></i></a>-->
				<!--	<a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>-->
				<!--</div>-->
				<div class="main-header-center mr-3 d-sm-none d-md-none d-lg-block">
					<?= $formOpen ?>
					<?= $formSearch ?>
					<?= $btnSearch ?>
					<?= $formClose ?>
				</div>
			</div>
			<div class="main-header-right">
				<ul class="nav">
					<li class="">
						<div class="dropdown  nav-itemd-none d-md-flex">
							<a href="#" class="d-flex  nav-item nav-link pl-0 country-flag1" data-toggle="dropdown"
							   aria-expanded="false">
                                <span class="avatar country-Flag mr-0 align-self-center bg-transparent">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48" style=" fill:#000000;width:35px;">
                                        <circle cx="24" cy="24" r="20" fill="#616161"></circle>
                                        <path fill="#d1d1d1" d="M34.139,17.887l-0.955,0.265c-0.453,0.126-0.812-0.388-0.539-0.77l0.576-0.807 c0.123-0.2-0.08-0.441-0.298-0.355l-0.838,0.4c-0.443,0.211-0.906-0.251-0.694-0.694l0.4-0.838 c0.086-0.218-0.155-0.421-0.355-0.298l-0.807,0.576c-0.383,0.273-0.896-0.086-0.77-0.539l0.265-0.955 c0.047-0.23-0.226-0.387-0.401-0.232l-0.695,0.707c-0.329,0.335-0.897,0.07-0.852-0.397l0.095-0.987 c0.006-0.235-0.29-0.342-0.436-0.159l-0.562,0.817c-0.266,0.387-0.871,0.225-0.908-0.243l-0.078-0.988 c-0.034-0.232-0.345-0.287-0.456-0.08l-0.411,0.902c-0.195,0.428-0.819,0.373-0.937-0.082l-0.248-0.96 c-0.074-0.223-0.389-0.223-0.463,0l-0.248,0.96c-0.118,0.455-0.742,0.51-0.937,0.082l-0.411-0.902 c-0.112-0.206-0.422-0.152-0.456,0.08l-0.078,0.988c-0.037,0.469-0.642,0.631-0.908,0.243l-0.562-0.817 c-0.146-0.184-0.442-0.076-0.436,0.158l0.095,0.987c0.045,0.468-0.523,0.733-0.852,0.397l-0.695-0.707 c-0.176-0.156-0.448,0.002-0.401,0.232l0.265,0.955c0.126,0.453-0.388,0.812-0.77,0.539l-0.807-0.576 c-0.2-0.123-0.441,0.08-0.355,0.298l0.427,0.895c0.202,0.424-0.241,0.867-0.665,0.665l-0.895-0.427 c-0.218-0.086-0.421,0.155-0.298,0.355l0.576,0.807c0.273,0.383-0.086,0.896-0.539,0.77l-0.955-0.265 c-0.23-0.047-0.387,0.226-0.232,0.401l0.707,0.695c0.335,0.329,0.07,0.897-0.397,0.852l-0.987-0.095 c-0.235-0.006-0.342,0.29-0.159,0.435l0.817,0.562c0.387,0.266,0.225,0.871-0.243,0.908l-0.988,0.078 c-0.232,0.034-0.287,0.345-0.08,0.456l0.902,0.411c0.428,0.195,0.373,0.819-0.082,0.937l-0.96,0.248 c-0.223,0.074-0.223,0.389,0,0.463l0.96,0.248c0.455,0.118,0.51,0.742,0.082,0.937l-0.902,0.411 c-0.206,0.112-0.152,0.422,0.08,0.456l0.988,0.078c0.469,0.037,0.631,0.642,0.243,0.908l-0.817,0.562 c-0.184,0.146-0.076,0.442,0.158,0.436l0.987-0.095c0.468-0.045,0.733,0.523,0.397,0.852l-0.707,0.695 c-0.156,0.176,0.002,0.448,0.232,0.401l0.955-0.265c0.453-0.126,0.812,0.388,0.539,0.77l-0.576,0.807 c-0.123,0.2,0.08,0.441,0.298,0.355l0.895-0.427c0.424-0.202,0.867,0.241,0.665,0.665l-0.427,0.895 c-0.086,0.218,0.155,0.421,0.355,0.298l0.807-0.576c0.383-0.273,0.896,0.086,0.77,0.539l-0.265,0.956 c-0.047,0.23,0.226,0.387,0.401,0.232l0.695-0.707c0.329-0.335,0.897-0.07,0.852,0.397l-0.095,0.987 c-0.006,0.235,0.29,0.342,0.436,0.159l0.562-0.817c0.266-0.387,0.871-0.225,0.908,0.243l0.078,0.988 c0.034,0.232,0.345,0.287,0.456,0.08l0.411-0.902c0.195-0.428,0.819-0.373,0.937,0.082l0.248,0.96 c0.074,0.223,0.389,0.223,0.463,0l0.248-0.96c0.118-0.455,0.742-0.51,0.937-0.082l0.411,0.902c0.112,0.206,0.422,0.152,0.456-0.08 l0.078-0.988c0.037-0.469,0.642-0.631,0.908-0.243l0.562,0.817c0.146,0.184,0.442,0.076,0.436-0.158l-0.095-0.987 c-0.045-0.468,0.523-0.733,0.852-0.397l0.695,0.707c0.176,0.156,0.448-0.002,0.401-0.232l-0.265-0.956 c-0.126-0.453,0.388-0.812,0.77-0.539l0.807,0.576c0.2,0.123,0.441-0.08,0.355-0.298l-0.427-0.895 c-0.202-0.424,0.241-0.867,0.665-0.665l0.895,0.427c0.218,0.086,0.421-0.155,0.298-0.355l-0.576-0.807 c-0.273-0.383,0.086-0.896,0.539-0.77l0.955,0.265c0.23,0.047,0.387-0.226,0.232-0.401l-0.707-0.695 c-0.335-0.329-0.07-0.897,0.397-0.852l0.987,0.095c0.235,0.006,0.342-0.29,0.159-0.436l-0.817-0.562 c-0.387-0.266-0.225-0.871,0.243-0.908l0.988-0.078c0.232-0.034,0.287-0.345,0.08-0.456l-0.902-0.411 c-0.428-0.195-0.373-0.819,0.082-0.937l0.96-0.248c0.223-0.074,0.223-0.389,0-0.463l-0.96-0.248 c-0.455-0.118-0.51-0.742-0.082-0.937l0.902-0.411c0.206-0.112,0.152-0.422-0.08-0.456l-1.054-0.083 c-0.447-0.035-0.601-0.612-0.232-0.866l0.871-0.599c0.184-0.146,0.076-0.442-0.158-0.436l-0.987,0.095 c-0.468,0.045-0.733-0.523-0.397-0.852l0.707-0.695C34.527,18.113,34.369,17.84,34.139,17.887z M23.496,23.135 c0.48-0.277,1.093-0.113,1.37,0.367c0.277,0.48,0.113,1.093-0.367,1.37c-0.48,0.277-1.093,0.113-1.37-0.367 C22.852,24.025,23.016,23.412,23.496,23.135z M17.477,30.691c-0.601-0.582-1.133-1.254-1.572-2.015 c-2.181-3.778-1.418-8.441,1.57-11.352c0.616-0.6,1.642-0.438,2.073,0.307l3.022,5.234c0.407,0.705,0.407,1.573,0,2.277 l-3.024,5.237C19.116,31.123,18.094,31.288,17.477,30.691z M33.047,26.328c-0.603,2.348-2.113,4.46-4.378,5.768 c-2.265,1.308-4.849,1.559-7.184,0.907c-0.835-0.233-1.218-1.204-0.785-1.955l2.797-4.845c0.547-0.948,1.559-1.532,2.653-1.532 l5.595,0C32.613,24.671,33.263,25.488,33.047,26.328z M33.049,21.701c0.209,0.833-0.445,1.635-1.304,1.635l-6.047,0 c-0.814,0-1.565-0.434-1.972-1.139l-3.022-5.234c-0.43-0.745-0.058-1.715,0.77-1.949c4.015-1.132,8.435,0.538,10.616,4.317 C32.529,20.092,32.845,20.889,33.049,21.701z"></path><path fill="#bdbdbd" d="M39.191,14.837l-1.431,0.397c-0.679,0.188-1.217-0.581-0.808-1.154l0.863-1.209 c0.184-0.3-0.119-0.661-0.446-0.532l-1.256,0.599c-0.664,0.317-1.357-0.377-1.04-1.041l0.599-1.256 c0.129-0.327-0.232-0.63-0.532-0.446l-1.21,0.863c-0.573,0.409-1.342-0.13-1.154-0.808l0.397-1.432 c0.07-0.345-0.338-0.581-0.601-0.347l-1.041,1.06c-0.494,0.502-1.344,0.106-1.277-0.595l0.142-1.479 c0.01-0.352-0.434-0.513-0.653-0.237L28.9,8.442c-0.399,0.58-1.306,0.337-1.361-0.365l-0.117-1.481 c-0.052-0.348-0.516-0.43-0.684-0.121l-0.616,1.352c-0.292,0.641-1.227,0.559-1.403-0.123l-0.372-1.438 c-0.111-0.334-0.583-0.334-0.694,0l-0.372,1.438c-0.176,0.682-1.111,0.764-1.403,0.123l-0.616-1.352 c-0.167-0.309-0.632-0.227-0.684,0.121l-0.117,1.481C20.405,8.78,19.499,9.023,19.1,8.442l-0.841-1.224 c-0.219-0.276-0.662-0.114-0.653,0.237l0.142,1.479c0.067,0.701-0.783,1.098-1.277,0.595L15.43,8.47 c-0.263-0.233-0.672,0.003-0.601,0.347l0.397,1.432c0.188,0.678-0.581,1.217-1.154,0.808l-1.209-0.863 c-0.3-0.184-0.661,0.119-0.532,0.446l0.639,1.341c0.303,0.636-0.361,1.299-0.996,0.996l-1.341-0.639 c-0.327-0.129-0.63,0.232-0.446,0.532l0.863,1.21c0.409,0.573-0.13,1.342-0.808,1.154l-1.432-0.397 c-0.345-0.07-0.581,0.338-0.347,0.601l1.059,1.041c0.502,0.494,0.106,1.344-0.595,1.277l-1.479-0.142 c-0.352-0.01-0.513,0.434-0.238,0.652l1.224,0.841c0.58,0.399,0.337,1.306-0.365,1.361l-1.481,0.117 c-0.348,0.052-0.43,0.516-0.121,0.684l1.352,0.616c0.641,0.292,0.559,1.227-0.123,1.403l-1.438,0.372 c-0.334,0.111-0.334,0.583,0,0.694l1.438,0.372c0.682,0.176,0.764,1.111,0.123,1.403l-1.352,0.616 c-0.309,0.167-0.227,0.632,0.121,0.684l1.481,0.117c0.702,0.055,0.945,0.962,0.365,1.361L7.21,29.75 c-0.276,0.219-0.114,0.662,0.237,0.653l1.479-0.142c0.701-0.067,1.098,0.783,0.595,1.277l-1.059,1.041 c-0.233,0.263,0.003,0.672,0.347,0.601l1.431-0.397c0.679-0.188,1.217,0.581,0.808,1.154l-0.863,1.209 c-0.184,0.3,0.119,0.661,0.446,0.532l1.341-0.639c0.636-0.303,1.299,0.361,0.996,0.996l-0.639,1.341 c-0.129,0.327,0.232,0.63,0.532,0.446l1.209-0.863c0.573-0.409,1.342,0.13,1.154,0.808l-0.397,1.432 c-0.071,0.345,0.338,0.581,0.601,0.347l1.041-1.06c0.494-0.502,1.344-0.106,1.277,0.595l-0.142,1.479 c-0.01,0.352,0.434,0.513,0.653,0.237l0.841-1.224c0.399-0.58,1.306-0.337,1.361,0.365l0.117,1.481 c0.052,0.348,0.516,0.43,0.684,0.121l0.616-1.352c0.292-0.641,1.227-0.559,1.403,0.123l0.372,1.438 c0.111,0.334,0.583,0.334,0.694,0l0.372-1.438c0.176-0.682,1.111-0.763,1.403-0.123l0.616,1.352 c0.168,0.309,0.632,0.227,0.684-0.121l0.117-1.481c0.055-0.702,0.962-0.945,1.361-0.365l0.842,1.224 c0.219,0.276,0.662,0.114,0.653-0.237l-0.142-1.479c-0.067-0.701,0.783-1.098,1.277-0.595l1.041,1.06 c0.263,0.233,0.672-0.003,0.601-0.347l-0.397-1.432c-0.188-0.678,0.581-1.217,1.154-0.808l1.21,0.863 c0.3,0.184,0.661-0.119,0.532-0.446l-0.639-1.341c-0.303-0.636,0.361-1.299,0.996-0.996l1.341,0.639 c0.327,0.129,0.63-0.232,0.446-0.532l-0.863-1.21c-0.409-0.573,0.13-1.342,0.808-1.154l1.432,0.397 c0.345,0.07,0.581-0.338,0.347-0.601l-1.06-1.041c-0.502-0.494-0.105-1.344,0.595-1.277l1.479,0.142 c0.352,0.01,0.513-0.434,0.237-0.653l-1.224-0.842c-0.58-0.399-0.337-1.306,0.365-1.361l1.481-0.117 c0.348-0.052,0.43-0.516,0.121-0.684l-1.352-0.616c-0.641-0.292-0.559-1.227,0.123-1.403l1.438-0.372 c0.334-0.111,0.334-0.583,0-0.694l-1.438-0.372c-0.682-0.176-0.764-1.111-0.123-1.403l1.352-0.616 c0.309-0.167,0.227-0.632-0.121-0.684l-1.579-0.124c-0.669-0.053-0.901-0.917-0.348-1.297l1.306-0.897 c0.276-0.219,0.114-0.662-0.237-0.653l-1.479,0.142c-0.701,0.067-1.098-0.783-0.595-1.277l1.06-1.041 C39.771,15.175,39.536,14.766,39.191,14.837z M23.496,23.135c0.478-0.276,1.09-0.112,1.366,0.366 c0.276,0.478,0.112,1.09-0.366,1.366s-1.09,0.112-1.366-0.366C22.854,24.023,23.018,23.411,23.496,23.135z M14.227,34.02 c-0.9-0.872-1.698-1.879-2.356-3.019c-3.268-5.661-2.125-12.647,2.352-17.009c0.924-0.9,2.461-0.656,3.105,0.461l4.528,7.842 c0.61,1.056,0.61,2.356,0,3.412l-4.53,7.847C16.683,34.668,15.151,34.915,14.227,34.02z M37.555,27.484 c-0.903,3.517-3.165,6.683-6.559,8.642s-7.266,2.336-10.763,1.359c-1.251-0.349-1.825-1.804-1.176-2.929l4.191-7.259 c0.82-1.42,2.335-2.295,3.975-2.295l8.383,0C36.905,25.001,37.878,26.225,37.555,27.484z M37.557,20.551 c0.313,1.247-0.667,2.45-1.953,2.45l-9.06,0c-1.219,0-2.346-0.65-2.955-1.706l-4.528-7.842c-0.645-1.117-0.087-2.57,1.154-2.919 c6.016-1.697,12.637,0.806,15.906,6.468C36.778,18.141,37.252,19.335,37.557,20.551z">
                                        </path>
                                    </svg>
                                </span>
							</a>
							<div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow" x-placement="bottom-end">
								<a href="https://aseos.ir/sidebars/show_menus" class="dropdown-item d-flex ">
                                    <span class="avatar  ml-3 align-self-center bg-transparent">
                                        <img src="data:image/png;base64,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"/>
                                    </span>
									<div class="d-flex">
										<span class="mt-2">جدول منو ها</span>
									</div>
								</a>
								<a href="https://aseos.ir/sidebars/add_menu" class="dropdown-item d-flex ">
                                    <span class="avatar  ml-3 align-self-center bg-transparent">
                                        <img src="data:image/png;base64,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"/>
                                    </span>
									<div class="d-flex">
										<span class="mt-2">ساخت منو</span>
									</div>
								</a>
								
								<a href="https://aseos.ir/sidebars/show_sides" class="dropdown-item d-flex ">
                                    <span class="avatar  ml-3 align-self-center bg-transparent">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABmJLR0QA/wD/AP+gvaeTAAADgUlEQVR4nO2bTU8TQRiAHwyo13KAFDlpApWziTe+xJCIoln8JHrQkw3xpiYawM8IsT+gRI0nIghYpd40Le2Bg6ImmkBqyxETLuIZd5LxUFqr2dZuu+xs6z7JJLvT7uy8b3d39smbgouLi4uLiwtwFHgPbAKyStvmVox9RsGrnpzd7QRAzVYCloADg4MX6D92gtra2r8TVBUIIQiHX/JsahLSV8LBTAI2gZ3TUy+qNvgMuq5zbvAkpGPevWOrfydQ9cED1NXVZTZ3AVRcxLqus7AQIRaP8u3bGlDDnj3NdHV209V1yPSPWFEJ2Nj4zsPAGKurqT/6k8kEyWSCSPQt16/fpN5TX/SYO/79FWcghMgG7/U2EQxOsLy8wvLyCo8ePWbv3n2srqYIBMYQQpgeXwJybnZezs3Oy9ZWn+olKm/zepvk0tJHefmyXzY0NMjGxkbp9/vlhw+fpNfblPc4n68tG19Ov/Et8PVrwnQG7WJ0dJSnT58wMRHM9gWD6e3h4RGGhvyGxyUSK4b9BZ8BZ06fL3WelvMiNI0Qgvb2dm7fvgXAoe5eQBKJviEUCjE0dAVIr2YD2tnssc9nJvOOWzHPAGMkUubs5e4UScEroFDmVLG4uIimaQSDQSLRN9l+TRsgHo8B6QdmsXM3TIDP15b3nlHN+Pg4MzOzAIRCIQA0TePixUv09x/Ne9z+/W2G/ZlXYQkwNztv4VStRQjByOgNUqkkXm8Tw8MjdHR0IKUkHo9x//491tfXaWlp5e6dBwVfiE6eOp7ZrKmYBABs/NggEBgjlUoaft7S0sq1qzfweDwFx8lNQEW9CdZ76rl3d4yFWIRYLMra2hoAzc3NdHZ209VZ5a/CkF7iDvf0crin15LxKnwZLB/TV4DVNqYaU7PdDhtTTdG3wHbbmGqKtsFSbUx1s8wGS7Ux1ZRtg+XYmGq20QbLtzHVmLZBq21MNaZtsFQbU03ZNmiljammZBu0ysZUU7INboeNqcb0bK22MdW4Nmj3CZ1mk7aezYk2adst4HSbtK02qMomHVMbVGWTymuDKm3SwbVB9TZpe23QaTZpe21QlU0qrw06ySaV1QadYpPKaoNOtEnbXcBpNplZBn8CFVnQMIuu65nNTfidgC8A4fDLqk6CEILw61eZ3c+5n/XhgOqNze3I3wnqA95R/X+YeGcUvIuLi4uLy3/ILxm7AQef4y/FAAAAAElFTkSuQmCC"/>
                                    </span>
									<div class="d-flex">
										<span class="mt-2">جدول سایدبار ها</span>
									</div>
								</a>
								<a href="https://aseos.ir/sidebars/add_side" class="dropdown-item d-flex ">
                                    <span class="avatar  ml-3 align-self-center bg-transparent">
                                        <img src="data:image/png;base64,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"/>
                                    </span>
									<div class="d-flex">
										<span class="mt-2">ساخت سایدبار</span>
									</div>
								</a>
								
								<a href="https://aseos.ir/sidebars/show_icons" class="dropdown-item d-flex ">
                                    <span class="avatar  ml-3 align-self-center bg-transparent">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABmJLR0QA/wD/AP+gvaeTAAAEzklEQVR4nO2bXWhbdRjGn/ORnKbpx2LbrY1zMsYuZqlOO4dz1em8cE4cpSCoSIcIs0OHVPDCsuGNFHW4m4nIhk56IyJ2A7FU5mBbWp2r6Gyt1dbRjzVtk7Q5TZOcj5wvL0rTZImW98Idl5zn6uTl/P7nzUN43/f8zwngyJEjR44cFa2YlYOm+tZNYJkaO5P5z2Vakb7hrqnMEL9y4CkvG62pqnCzHEdaMzQ3z1RWeC2v12NRuIXoEgMAVXdUkLhkUmZiS0n466pJnGkaCIdjCgBvZjxtACyL//DEq8y6yjLKuniz4xRamh9hdu3cxqx99qo+6eoFALzcuo/E/XB1BN3nAjjeeYjELcYSeL610z0zM9MIIOL3+6eADAN03bT0j3qgu12UdWGNh2B0fw898AeNG5tcvm5EJnFGJAprMgT9g7MkTk9pYAAeDPsTGAQBbAQAlrRKociCe+WwOA3IkGOA3QnYrXQRtACc+HMSLpbmyVhCwlfBEAJijMSNRpcAABHLJHFhScFEUsLx0XESp5lmxtSzqrQBGhija8MO3nAJpIU3S324b089fFvvJHGeS9cAAL4920mcPBaEe2AEvhf2kjglqcD69JucOJ/5IbLlQWgCbQ64OzyM+t0NaGi6l8TFwosAgEdbHiNxQ32DiEyHyVxCjOPbPAYUfQ1wDLA7AbtV9AZkFUFOlWExRE9MA6qkQFpKkjBN1QCAzKmSAl03yFwyLuWNpzvj7sY2RbMYIW+z/BfxugqhhAfH82ufnCFNTQEAXIJ7jTOzZeg69JQOobSExFmWBZ5jcebLowAQ8dfVrgdu+gX80txBboM7+0/jSPuT5Db49cfnAADPtDWTuKG+QVz84gKOnGwncQkxjrdbOnLi6d+7a+u2KYOnuVoIWjVg0+YFk6XtBhWC0gZIF3rud6VohaUQVPRtsOgNyOoCdSMBGC5aW2IX5/Hz+QEE/5omcdevjQEAej/rIXGh8VmEb4TJXEpS88azByFNBmMapIVhGFBlFVKMVj9SK4MQkVNlFYZu0K+npPLG0waw3nJpavvTAnU/YIM8i10Hmm7pHKDKKlpef5bEJcQ4Bnqv5MTTNcD3xrHvqF++EJQ2IPru0f1cSrEzF1uUNsDSUjxr6XbmYouKvg0WvQHO7XDmSYNPtUMv8ebj/1EP/NiFQ4f34p6H6klc75nlQWbfS/tJ3O9XhhE4exmvvHeYxMUXE3j/4Ds58SwDDMED3V1KWhgsB6G0BKUVNONcwvJTaConlJaA5zkyZxr5H8AUfQ1wDLA7AbtV9AZkFcGa6wOg3g+wSyKG+4cghqMkbnJkAgBwufsiiZsZCyI6u0DmlGT+MT/LAK84C5OjvSMEVUH4Rhh6ijZGL0aWH6dPDU+SuGgoCikpkzlN0/LGswyY2HGAvC1e1X8ajz/3xC3fFn/x2EESlxDj+C3wa0686GuAY4DdCdgtxwC7E7Bbq2+LN7bFjPJ1Hs7lIvVBRoygurocnjIP6cLi/HIb9FVXkjg5ISMuJrD+LtqL7YZhIinGcerzt4C8t8OK1MCl5JrOk6+dZ1nWR1r9NlFFZe4dZM7ux8zc3DQs0N55u93EIOivrd0I3DQIAQBM82EAhf3HCQsRu1Nw5MiRI0eO/gf6G/603rcWctYPAAAAAElFTkSuQmCC"/>
                                    </span>
									<div class="d-flex">
										<span class="mt-2">جدول آیکون ها</span>
									</div>
								</a>
								<a href="https://aseos.ir/sidebars/add_icon" class="dropdown-item d-flex ">
                                    <span class="avatar  ml-3 align-self-center bg-transparent">
                                   <img src="data:image/png;base64,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"/>
                                   </span>
									<div class="d-flex">
										<span class="mt-2">ساخت آیکون</span>
									</div>
								</a>
							</div>
						</div>
					</li>
				</ul>
				<div class="nav nav-item  navbar-nav-right ml-auto">
					<div class="nav-link" id="bs-example-navbar-collapse-1">
						<?= $formOpen1 ?>
						<div class="input-group">
							<?= $formSearch1 ?>
							<span class="input-group-btn">
										<?= $btnReset ?>
										<?= $btnSearch1 ?>
								</span>
						</div>
						<?= $formClose ?>
					</div>
					<div class="dropdown nav-item main-header-message ">
						<a class="new nav-link" href="#" style='line-height: 45px;'>
							<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" style='color:black;width:20px;height:20px;' viewBox="0 0 24 24"
								 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
								 stroke-linejoin="round">
								<path
										d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
								<polyline points="22,6 12,13 2,6"></polyline>
							</svg>
							<?php if ($numberMassageUnread >= 1) { ?>
								<span class=" pulse-danger"></span>
							<?php } ?>
						</a>
						<div class="dropdown-menu">
							<div class="menu-header-content bg-primary text-right">
								<div class="d-flex">
									<h6 class="dropdown-title mb-1 tx-15 text-white font-weight-semibold">پیام ها</h6>
									<span class="badge badge-pill badge-warning mr-auto my-auto float-left">علامت گذاری همه</span>
								</div>
								<p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">
									شما <?= $numberMassageUnread ?> پیام
									خوانده نشده دارید</p>
							</div>
							<div class="main-message-list chat-scroll">
								<?php //foreach(){ ?>
								<a href="#" class="p-3 d-flex border-bottom">
									<div class="  drop-img  cover-image  "
										 data-image-src="<?= base_url() ?>assets/img/faces/<?= $answerPicProfile ?>">
										<span class="avatar-status bg-teal"></span>
									</div>
									<div class="wd-90p">
										<div class="d-flex">
											<h5 class="mb-1 name"><?= $usernameMassageSender ?></h5>
										</div>
										<p class="mb-0 desc"><?= $contentOfMassage ?></p>
										<p class="time mb-0 text-left float-right mr-2 mt-2"><?= $timeMassageSend ?></p>
									</div>
								</a>
								<?php //}?>
							</div>
							<div class="text-center dropdown-footer">
								<a href="<?= $allMassageLink ?>">مشاهده همه</a>
							</div>
						</div>
					</div>
					<div class="dropdown nav-item main-header-notification">
						<a class="new nav-link" href="#" style='line-height: 45px;'>
							<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" style='color:black;width:20px;height:20px;' viewBox="0 0 24 24"
								 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
								 stroke-linejoin="round">
								<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
								<path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
							</svg>
							<?php if ($numberNewsUnread >= 1) { ?>
								<span class=" pulse"></span>
							<?php } ?>
						</a>
						<div class="dropdown-menu">
							<div class="menu-header-content bg-primary text-right">
								<div class="d-flex">
									<h6 class="dropdown-title mb-1 tx-15 text-white font-weight-semibold">اطلاعیه</h6>
									<!--									<span class="badge badge-pill badge-warning mr-auto my-auto float-left">علامت گذاری همه</span>-->
								</div>
								<p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">
									شما <?= $numberNewsUnread ?> اعلان
									خوانده نشده دارید</p>
							</div>
							<div class="main-notification-list Notification-scroll">
								<?php //foreach(){ ?>
								<a class="d-flex p-3 border-bottom" href="#">
									<div class="notifyimg bg-<?= $levelNews ?>">
										<i class="la la-file-alt text-white"></i>
									</div>
									<div class="mr-3">
										<h5 class="notification-label mb-1"><?= $titleNews ?></h5>
										<div class="notification-subtext"><?= $timeNews ?></div>
									</div>
								</a>
								<?php //} ?>
							</div>
							<div class="dropdown-footer">
								<a href="<?= $allNewsLink ?>">مشاهده همه</a>
							</div>
						</div>
					</div>
					<!--<div class="nav-item full-screen fullscreen-button">-->
					<!--	<a class="new nav-link full-screen-link" href="#">-->
					<!--		<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24"-->
					<!--			 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"-->
					<!--			 stroke-linejoin="round">-->
					<!--			<path-->
					<!--					d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path>-->
					<!--		</svg>-->
					<!--	</a>-->
					<!--</div>-->
					<div class="dropdown main-profile-menu nav nav-item nav-link my-auto">
						<a class="profile-user d-flex" href="#"><img alt="profile" class="my-auto" style="width:22px;height:22px;" src="<?= base_url() ?>assets/img/faces/<?= $profilePicture ?>"></a>
						<div class="dropdown-menu">
							<div class="main-header-profile bg-primary p-3">
								<div class="d-flex wd-100p">
									<div class="main-img-user"><img alt=""
																	src="<?= base_url() ?>assets/img/faces/<?= $profilePicture ?>"></div>
									<div class="mr-3 my-auto">
										<h6><?= $username ?></h6>
										<span><?= $rule_users ?></span>
									</div>
								</div>
							</div>
							<!--<a class="dropdown-item" href="#"><i class="bx bx-user-circle"></i>مشخصات </a>-->
							<a class="dropdown-item" href="<?= $allMassageLink ?>"><i class="bx bx-envelope"></i>پیام
								های کاربران</a>
							<a class="dropdown-item" href="<?= $allNewsLink ?>"><i class="bx bxs-inbox"></i>صندوق
								خبری</a>
							<a class="dropdown-item" href="<?= $userManager ?>"><i class="bx bx-slider-alt"></i> تنظیمات
								حساب های کاربران</a>
							<a class="dropdown-item" href="<?= $editProfile ?>"><i class="bx bx-cog"></i>ویرایش حساب
								کاربری من</a>
							<a class="dropdown-item" href="<?= $exitS ?>"><i class="bx bx-log-out"></i> خروج از سیستم</a>
						</div>
					</div>
					<!--<div class="dropdown main-header-message right-toggle">-->
					<!--	<a class="nav-link pr-0" data-toggle="sidebar-left" data-target=".sidebar-left">-->
					<!--		<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24"-->
					<!--			 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"-->
					<!--			 stroke-linejoin="round">-->
					<!--			<line x1="3" y1="12" x2="21" y2="12"></line>-->
					<!--			<line x1="3" y1="6" x2="21" y2="6"></line>-->
					<!--			<line x1="3" y1="18" x2="21" y2="18"></line>-->
					<!--		</svg>-->
					<!--	</a>-->
					<!--</div>-->
				</div>
			</div>
		</div>
	</div>