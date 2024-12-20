<html>

<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<?php
	if ($ket_filter != "") {
		$fbr = str_replace('%20', ' ', $ket_filter);
	} else {
		$fbr = $inisial;
	}
	?>

	<title><?= $aplikasi->singkatan_unit ?> - <?= $fbr ?></title>

	<meta name="keywords" content="Belanja , beli , Dekorasi , Rumah , HomeDepo , Homedepo , homedepo , Home , Depo , Marketplace , marketplace , Market , Place , place , Home Depo" />
	<meta name="description" content="Home Depo belanja puas - <?=$inisial?>">
	<meta name="author" content="aom.my.id">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= base_url() ?>assets/img/logo.jpg" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?= base_url() ?>assets/img/homedepo_icon.jpg">

	<!-- Mobile Metas -->
	<!-- <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> -->
	<meta content="width=device-width, initial-scale=1" name="viewport" />


	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/animate/animate.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/magnific-popup/magnific-popup.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme-elements.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme-blog.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme-shop.css">

	<!-- Current Page CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/rs-plugin/css/layers.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/rs-plugin/css/navigation.css">

	<!-- Skin CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/skins/skin-shop-8.css">

	<!-- Demo CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/demos/demo-shop-8.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">

	<!-- Head Libs -->
	<script src="<?php echo base_url() ?>assets/vendor/modernizr/modernizr.min.js"></script>

	<!-- Head Libs -->
	<script src="<?= base_url() ?>assets/vendor/modernizr/modernizr.min.js"></script>

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css">
	<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>

	<!-- Head Libs -->
	<script src="<?= base_url() ?>assets/vendor/modernizr/modernizr.min.js"></script>
	<!-- <script src="<?php echo base_url() ?>assets/js/bootstraps/bootbox.min.js" type="text/javascript"></script> -->
	<script type="text/javascript">
		var base_url = "<?php echo base_url() ?>";
	</script>

	<!-- <script src="<?php echo base_url() ?>assets/js/public/login.js" type="text/javascript"></script>
		<script type="text/javascript">
			function login_click(){
			    $('#btn-login').click();
			}
		</script> -->

	<style media="screen">
		.a-tb-wa {
			color: #4ced69 !important;
			font-size: 12px !important;
			font-family: "Open Sans", Arial, sans-serif;
			font-weight: bold !important;
		}

		.a-tb-wa:focus {
			color: #4ced69 !important;
			text-decoration: none !important;
		}

		.a-tb-wa:hover {
			color: #79ff91 !important;
			text-decoration: none !important;
		}

		a.a-decoration-none {
			text-decoration: none;
		}

		a.a-decoration-none:hover {
			color: #eee !important;
		}

		.tb-name:hover {
			color: yellow !important;
			cursor: none;
		}

		@media (max-width: 992px) {
			.stickytb {
				position: fixed;
			}
		}

		.tdn {
			text-decoration: none;
			font-family: "Open Sans", Arial, sans-serif;
		}
	</style>

</head>

<body>

	<div class="body">
		<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 153, 'stickySetTop': '-1px', 'stickyChangeLogo': false}">
			<div class="header-body stickytb">

				<?php
				// $this->load->view('templates/buyer/menu_atas');
				?>

				<!-- templates/bootstraps/menu_tengah -->
				<!-- templates/buyer/menu_tengah -->
				<?= $this->load->view('templates/bootstraps/menu_tengah'); ?>

				<?= $this->load->view('templates/bootstraps/menu_kategori'); ?>

			</div>
		</header>

		<?= $this->load->view('templates/bootstraps/menu_responsive'); ?>


		<!-- <div class="modal fade bs-modal" role="dialog" id="myModal">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title">Login</h4>
				  </div>
				  <div class="modal-body" style="padding:10px;">
					<div class="form-group">
						<div class="row">
							<div class="col-xs-2">
								<label class="control-label labeled-form" for="inputUsername">Username</label>
							</div>
							<div class="col-xs-10 tooltip-wide">
								<div class="input-group merged">
								   <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user fa-xs"></i></span>
								   <input type="text" class="form-control login-control" aria-describedby="basic-addon1" name="inputUsername" id="inputUsername">
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-xs-2">
								<label class="control-label labeled-form" for="inputPassword">Password</label>
							</div>
							<div class="col-xs-10 tooltip-wide">
								<div class="input-group merged">
								  <span class="input-group-addon" id="basic-addon2"><i class="fa fa-key fa-xs"></i></span>
								  <input type="password" class="form-control login-control" aria-describedby="basic-addon2" name="inputPassword" id="inputPassword" onkeypress="if(event.keyCode==13) login_click();">
								</div>
							</div>
						</div>
					</div>

					<div class="control-label labeled-form pull-right" style="padding-right:10px;">
						Belum punya akun ,
						<b> <a href="<?= base_url() ?>welcome/daftar">Daftar</a> </b>
					</div>

				  </div>

				  <div class="modal-footer">
					<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" id="btn-login">Login</button>
				  </div>
				</div>
			  </div>
			</div>

			<script>
					function login_click() {
							$('#btn-login').click();
					}
			</script> -->
