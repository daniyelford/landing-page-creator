<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="<?= $description ?>">
	<meta name="Author" content="DanialFrd">
	<meta name="Keywords" content="<?= $keyword ?>"/>
	<!-- Title -->
	<title><?= $page_title ?> </title>
	<!-- Favicon -->
	<link rel="icon" href="../../../assets/img/brand/<?= $favicon ?>" type="image/x-icon"/>
	<!-- Icons css -->
	<link href="../../../assets/css/icons.css" rel="stylesheet">
	<!--  Custom Scroll bar-->
	<link href="../../../assets/plugins/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet"/>
	<!--  Sidebar css -->
	<link href="../../../assets/plugins/sidebar/sidebar.css" rel="stylesheet">
	<!-- Sidemenu css -->
	<link rel="stylesheet" href="../../../assets/css-rtl/sidemenu.css">
	<!--  Owl-carousel css-->
	<link href="../../../assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet"/>
	<!-- Maps css -->
	<link href="../../../assets/plugins/jqvmap/jqvmap.min.css" rel="stylesheet">
	<!--- Style css -->
	<link href="../../../assets/css-rtl/style.css" rel="stylesheet">
	<!--- Dark-mode css -->
	<link href="../../../assets/css-rtl/style-dark.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" />

	<!---Skinmodes css-->
	<link href="../../../assets/css-rtl/skin-modes.css" rel="stylesheet">
	    <style id="s./node_modules/css-loader/index.js!./node_modules/sass-loader/lib/loader.js!./package/src/animation.scss-0">/**
 * @license
 * Copyright Akveo. All Rights Reserved.
 * Licensed under the MIT License. See License.txt in the project root for license information.
 */
        .eva-animation {
            animation-duration: 1s;
            animation-fill-mode: both;
        }

        .eva-infinite {
            animation-iteration-count: infinite;
        }

        .eva-icon-shake {
            animation-name: eva-shake;
        }

        .eva-icon-zoom {
            animation-name: eva-zoomIn;
        }

        .eva-icon-pulse {
            animation-name: eva-pulse;
        }

        .eva-icon-flip {
            animation-name: eva-flipInY;
        }

        .eva-hover {
            display: inline-block;
        }

        .eva-hover:hover .eva-icon-hover-shake, .eva-parent-hover:hover .eva-icon-hover-shake {
            animation-name: eva-shake;
        }

        .eva-hover:hover .eva-icon-hover-zoom, .eva-parent-hover:hover .eva-icon-hover-zoom {
            animation-name: eva-zoomIn;
        }

        .eva-hover:hover .eva-icon-hover-pulse, .eva-parent-hover:hover .eva-icon-hover-pulse {
            animation-name: eva-pulse;
        }

        .eva-hover:hover .eva-icon-hover-flip, .eva-parent-hover:hover .eva-icon-hover-flip {
            animation-name: eva-flipInY;
        }

        @keyframes eva-flipInY {
            from {
                transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
                animation-timing-function: ease-in;
                opacity: 0;
            }
            40% {
                transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
                animation-timing-function: ease-in;
            }
            60% {
                transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
                opacity: 1;
            }
            80% {
                transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
            }
            to {
                transform: perspective(400px);
            }
        }

        @keyframes eva-shake {
            from,
            to {
                transform: translate3d(0, 0, 0);
            }
            10%,
            30%,
            50%,
            70%,
            90% {
                transform: translate3d(-3px, 0, 0);
            }
            20%,
            40%,
            60%,
            80% {
                transform: translate3d(3px, 0, 0);
            }
        }

        @keyframes eva-pulse {
            from {
                transform: scale3d(1, 1, 1);
            }
            50% {
                transform: scale3d(1.2, 1.2, 1.2);
            }
            to {
                transform: scale3d(1, 1, 1);
            }
        }

        @keyframes eva-zoomIn {
            from {
                opacity: 1;
                transform: scale3d(0.5, 0.5, 0.5);
            }
            50% {
                opacity: 1;
            }
        }
        .jqstooltip {
            position: absolute;
            left: 0;
            top: 0;
            visibility: hidden;
            background: transparent;
            background-color: rgba(0, 0, 0, 0.6);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px iransans, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            box-sizing: content-box;
            z-index: 10000;
        }

        .jqsfield {
            color: white;
            font: 10px iransans, san serif;
            text-align: left;
        }
    </style>
	<!---Switcher css-->
	<link href="project/assets/switcher/css/switcher-rtl.css" rel="stylesheet">
	<link href="project/assets/switcher/demo.css" rel="stylesheet">
    <style>
        .sub-menu {
            margin-top: 2px;
            margin-right: 5px;
        }
    </style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

 <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />	

 <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<link href="project/assets/plugins/fileuploads/css/fileupload.css" rel="stylesheet" type="text/css">
<link href="project/assets/plugins/fancyuploder/fancy_fileupload.css" rel="stylesheet">
<link rel="stylesheet" href="project/assets/plugins/sumoselect/sumoselect-rtl.css">
<link rel="stylesheet" href="project/assets/plugins/telephoneinput/telephoneinput-rtl.css">
</head>
<body class="main-body app sidebar-mini" id="tmMode">

