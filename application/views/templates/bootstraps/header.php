<html>

<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="pragma" content="no-cache">

	<title>
		<?= $aplikasi->nama_unit ?>
	</title>


	<meta name="keywords" content="TV , TV ONLINE , roadcast" />
	<meta name="description" content="Mitra One TV - TV Online">
	<meta name="author" content="terabytee.my.id">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= base_url() ?>assets_tv/images/logo_mitraone_tv.png" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?= base_url() ?>assets_tv/images/logo_mitraone_tv.png">
	<link rel="icon" href="<?= base_url() ?>assets_tv/images/logo_mitraone_tv.png" type="image/x-icon">

	<!-- Mobile Metas -->
	<!-- <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> -->
	<meta content="width=device-width, initial-scale=1" name="viewport" />

	<!-- Web Fonts  -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css"> -->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,700%7COpen+Sans:400,600,700%7CSource+Code+Pro:300,400,500,600,700,900%7CNothing+You+Could+Do%7CPoppins:400,500">

	<!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_tv/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_tv/css/fonts.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_tv/css/style.css">

    <!-- <style>
		.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}
	</style> -->

    <link href="<?php echo base_url() ?>assets_tv/css/video-js.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets_tv/css/terabytee.css" rel="stylesheet" />
    <!-- <script defer src="<?php echo base_url() ?>assets_tv/js/video.min.js"></script> -->

    <!-- <link href="https://vjs.zencdn.net/7.2.3/video-js.css" rel="stylesheet" /> -->

    <style>
        .li-svg {
            width: 25px;
            margin-left: 15px;
            padding: 0;
        }

        .image-hover {
            width: 16px;
            height: 19px;
            margin: 2px;
            background-image: url('<?=base_url()?>assets_tv/images/tv/icon/tiktok_white.png');
            background-size: cover;
            /* transition: background-image 0.5s ease-in-out; */
        }

        .image-hover:hover {
            background-image: url('<?=base_url()?>assets_tv/images/tv/icon/tiktok_circle.png');
            width: 24px;
            height: 24px;
            margin: 0;
        }
    </style>

<style>

    body {
        background-color: #f5f5f5!important;
    }

    .section-tb {
        padding: 20px 0!important;
    }
    @media (min-width: 576px) and (max-width: 1199px) {
        .section-tb {
            padding: 30px 0!important;
        }
    }
    @media (min-width: 1200px) {
        .section-tb {
        padding: 100px 100px 25px 100px!important;
        }
    }


    .bg-default {
        background-color: #f5f5f5!important;
    }

    .tab-column {
        margin: 0 30px 0 30px!important;
    }
    @media (max-width: 560px) {
        .tab-column {
            margin-top: -15px!important;
        }
    }
    @media (min-width: 561px) {
        .tab-column {
            padding-top: 10px!important;
        }
    }
    @media (max-width: 900px) {
        .tab-column {
            max-width: 93%!important;
        }
    }
    @media (min-width: 901px) {
        .tab-column {
            max-width: 100%!important;
        }
    }

    .column_tb {
        float: left!important;
        place-items: center!important;
        width: 25%!important;
        padding-bottom: 5px!important;
    /* background-color: rgba(34, 45, 79, 0.2); */
    /* height: 300px; */
    /* border: 1px solid #000; */
    }

    .nav-item {
        float: none;
        border: 0;
        cursor: pointer;
        transition: .33s all ease;
    }
    .nav-item .active {
        cursor: not-allowed;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    .nav-video {
        padding: 3px 0px 8px 0!important;
    }

    @media (min-width: 481px) {
        .nav-video {
            /* border-radius: 0px 15px 0px 15px!important; */
            background: transparent!important;
            /* border: 2px solid #c9d8ff!important; */
        }
    }

    .nav-video-figure {
        min-width: 77px!important;
        border: 1px solid #c9d8ff!important;
        /* border-radius: 5px 0 5px 0!important; */
        border-radius: 5px!important;
    }

    .nav-video-figure img {
        width: 77px!important;
        height: 77px!important;
        border: 1px solid #c9d8ff!important;
        border-radius: 5px!important;
    }

    .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
        background-color: #ffeee0!important;
        border-color: #dee2e6 #dee2e6 #fff;
        /* border-radius: 0px 15px 0px 15px!important; */
        border-radius: 5px;
        margin: 5px;
        padding: 0px;
    }

    .container_column {
        /* width: 100%; */
        place-items: center!important;
    }

    .column_tb_3 {
        /* place-items: center!important; */
        width: 33%!important;
        /* border: 1px solid #000; */
    }

    @media (max-width: 512px) {
        .column_tb_3 {
            margin: 13px 0 -4 0 !important;
            padding: 0px!important;
        }
    }

    @media (min-width: 513px) {
        .column_tb_3 {
            margin: 23px 0!important;
            padding: 0 15px!important;
        }
    }

    .column_tb_3 img {
        max-width: 80px!important;
    }

    .image_center {
        display: block!important;
        margin: auto!important;
    }

    .video-js .vjs-control-bar {
    /* background-color: rgba(43, 51, 63, 0.7); */
        background-color: #222d4f;
    }
</style>

</head>


<body>

<div class="preloader">
	<div class="preloader-body">
		<div class="cssload-container">
			<div class="cssload-speeding-wheel"></div>
        </div>
    </div>
</div>

<div class="page">

	<!-- Page Header-->
	<header class="section page-header">
		<!--RD Navbar-->
        <div class="rd-navbar-wrap" style="position: absolute">
			<nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-main-outer">
				<div class="rd-navbar-main">
                <!--RD Navbar Panel-->
                <div class="rd-navbar-panel">
					<!--RD Navbar Toggle-->
					<button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
					<!--RD Navbar Brand-->
					<div class="rd-navbar-brand">
                    <!--Brand-->
                        <a class="brand" href="">
                            <img src="<?= base_url() ?>assets_tv/images/logo_mitraone_tv.png" alt="" width="74" height="13"/>
                            <!-- MitraOne TV 296x52 -->
                        </a>
                    </div>
                </div>
                <div class="rd-navbar-main-element">
					<div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">
						<li class="rd-nav-item active">
                        <a class="rd-nav-link" href="">Home</a>
					</li>
					<li class="rd-nav-item">
                        <!-- <a class="rd-nav-link" href="about.html">About</a> -->
                        <a class="rd-nav-link" href="#">About</a>
                    </li>
                    <li class="rd-nav-item">
                        <!-- <a class="rd-nav-link" href="typography.html">Typography</a> -->
                        <a class="rd-nav-link" href="#">Typography</a>
                    </li>
                    <li class="rd-nav-item">
                        <!-- <a class="rd-nav-link" href="contacts.html">Contacts</a> -->
                        <a class="rd-nav-link" href="#">Contacts</a>
                    </li>
                    </ul>
                </div>
                </div>
                <div class="rd-navbar-collapse">
                <ul class="socialite-list">
                    <li><a class="icon novi-icon socialite fa-facebook" href="https://www.facebook.com/mitraonetv" target="_blank"></a></li>
                    <li><a class="icon novi-icon socialite fa-instagram" href="https://www.instagram.com/mitraonetv_official/" target="_blank"></a></li>

                    <li class="li-svg">
                        <a href="https://www.tiktok.com/@mitraonetv" target="_blank">
                            <!-- <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/>
                            </svg> -->
                            <!-- <img class="tiktok-white" src="<?=base_url()?>assets_tv/images/tv/icon/tiktok_white.png" alt="">
                            <img class="tiktok-hover" src="<?=base_url()?>assets_tv/images/tv/icon/tiktok_hover.png" alt=""> -->

                            <div class="image-hover"></div>
                        </a>
                    </li>

                    <li><a class="icon novi-icon socialite fa-youtube" href="https://www.youtube.com/@MitraoneTV" target="_blank"></a></li>
                </ul>
                </div>
            </div>

            </div>
        </nav>

        

        </div>
    </header>

	