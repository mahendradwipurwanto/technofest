<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="STIKI <?= $judul ?> merupakan pameran produk Tugas Akhir, Tugas Akhir Mata Kuliah, Magang, Lomba, Proyek Individu dan Proyek Karya Kelompok Bidang Minat dari Program studi Teknik Informatika, Sistem Informatika dan Manajemen Informatika." />
  <meta name="author" content="STIKI Malang colaboration by CreativeCrew Since 2013" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700|Roboto:400,700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/style.css?<?= time();?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/dark.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Conference Demo Specific Stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/demos/conference/css/fonts.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/colors.php?<?= time();?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/demos/conference/conference.css" type="text/css" />
	<!-- / -->

	<!-- Document Title
	============================================= -->
	<title><?= $judul ?></title>
  <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>berkas/karya/logo/<?= $logo ?>" />

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="responsive-sticky-header transparent-header dark header-size-sm" data-sticky-shrink="false">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row justify-content-lg-between">

						<!-- Logo
						============================================= -->
						<div id="logo" class="mr-lg-0">
							<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>berkas/karya/logo/<?= $logo ?>" alt="<?= $judul ?> Logo" style="padding-top: 10px;"></a>
						</div><!-- #logo end -->

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="menu-container not-dark one-page-menu">
								<li class="menu-item"><a class="menu-link" href="" data-href="#tentang"><div>Tentang</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#agenda" data-href="#agenda"><div>Agenda</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#pembicara" data-href="#pembicara"><div>Pembicara</div></a></li>
								<li class="menu-item"><a class="menu-link" href="<?php echo site_url('Karya');?>"><div>Karya</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#" data-href="#section-kontak"><div>Kontak</div></a></li>

							</ul>

						</nav><!-- #primary-menu end -->

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="menu-container header-button">
								<li class="menu-item">
									<?php if ($this->session->userdata('logged_in') == TRUE) { ?>
										<?php if ($this->session->userdata('ROLE') == 0 || $this->session->userdata('ROLE') == 2) {?>
											<a href="<?php echo site_url('Dashboard');?>" target="_blank" class="button button-effect m-0 mr-2" data-scrollto="#section-tickets">ADMIN PANEL</a>
										<?php }?>
										<a href="<?php echo site_url('Keluar');?>" class="button button-effect m-0" data-scrollto="#section-tickets">KELUAR</a>
									<?php }else { ?>
										<a href="<?php echo site_url('Masuk');?>" class="button button-effect m-0" data-scrollto="#section-tickets">MASUK</a>
									<?php }?>
								</li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->
