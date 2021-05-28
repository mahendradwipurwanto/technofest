

<!-- Hero/Slider
============================================= -->
<section id="slider" class="slider-element min-vh-60 min-vh-md-100 include-header" style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.8)), url('<?php echo base_url();?>assets/frontend/demos/conference/images/hero-2.jpg') no-repeat center center / cover;">
	<div class="slider-inner">

		<div class="vertical-middle">
			<div class="container dark py-5 py-md-0">
				<div class="row justify-content-between mt-5 col-mb-50">
					<div class="col-lg-7 parallax" data-0="transform: translateY(0px); opacity: 1" data-300="transform: translateY(50px); opacity: 0">
						<h2 class="font-weight-bold display-2 mb-0"><?php echo $judul; ?></h2>
					</div>
					<div class="col-lg-5 d-flex align-items-lg-end flex-column parallax text-left text-lg-right mb-5 mb-lg-0" data-0="transform: translateY(0px)" data-700="transform: translateY(-50px)">
						<div class="mt-auto">
							<h4 class="mb-2 gradient-text"><?php echo $tanggal_mulai." s/d ".$tanggal_akhir; ?></h4>
							<h4 class="font-weight-normal">STIKI Malang</h4>
							<a href="<?php echo site_url('Daftar');?>" class="button button-xxlarge button-white button-gradient m-0">DAFTAR SEKARANG</a>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section><!-- #Slider end -->

<!-- Content
============================================= -->
<section id="Tentang" style="background-color: #000;">
	<div class="content-wrap pt-0" style="overflow: visible;">

		<!-- Section About
		============================================= -->
		<div id="sectiontentang" class="section page-section bg-transparent pt-0 clearfix">

			<div class="container clearfix">

				<div class="mb-5 dark">
					<span class="display-4 font-weight-bold gradient-underline font-primary">Tentang</span>
				</div>

				<div class="clear"></div>

				<div class="row justify-content-around dark">
					<div class="col-md-6">
						<h4 class="font-body ls1 text-uppercase">STIKI Technofest</h4>
						<p class="text-white-50"><?php echo $tentang;?>.</p>
						<div class="row mt-5">
							<div class="col-6 col-sm-3">
								<div class="counter gradient-text"><span data-from="<?php echo abs($c_karya/2);?>" data-to="<?php echo $c_karya;?>" data-refresh-interval="1" data-speed="400"></span></div>
								<h5 class="font-body">Karya</h5>
							</div>

							<div class="col-6 col-sm-3">
								<div class="counter gradient-text"><span data-from="<?php echo abs($c_agenda/2);?>" data-to="<?php echo $c_agenda;?>" data-refresh-interval="2" data-speed="600"></span></div>
								<h5 class="font-body">Agenda</h5>
							</div>

							<div class="col-6 col-sm-3">
								<div class="counter gradient-text"><span data-from="<?php echo abs($c_pengguna/2);?>" data-to="<?php echo $c_pengguna;?>" data-refresh-interval="50" data-speed="1500"></span></div>
								<h5 class="font-body">Partisipan</h5>
							</div>
						</div>
					</div>

					<div class="col-md-5">
						<div class="about-img position-relative">
							<div class="my-3 my-lg-0"><div class="gradient-bg"><img src="<?php echo base_url();?>berkas/file/home/home2.jpg" alt="About Image"></div></div>
							<div data-0="top: 160px" data-end="top: 120px"><div class="gradient-bg"><img src="<?php echo base_url();?>berkas/file/home/home1.jpg" alt="About Image"></div></div>
						</div>
					</div>
				</div>

			</div>

		</div><!-- #section-about end -->

		<div class="clear"></div>

		<!-- Section Schedule
		============================================= -->
		<div id="agenda" class="section page-section bg-transparent pt-0 topmargin-lg clearix">
			<div class="container">
				<div class="mb-5 dark d-flex justify-content-between align-items-center">
					<span class="display-4 font-weight-bold gradient-underline mb-0">Schedule</span>
				</div>

				<div class="schedule-wrap mx-auto rounded" style="max-width: 1000px;">
					<div class="tabs tabs-bb mb-0 clearfix" id="tab-9">

						<div class="tab-container mt-0">
							<div class="tab-content clearfix" id="tabs-1">
								<dl class="row dark mb-0">

									<?php if ($agenda == 0) { ?>
										<dd class="col-sm-12">
											<div class="schedule-desc"><center>Belum ada agenda</center></div>
										</dd>
									<?php }else{ foreach ($agenda as $value) { ?>
										<dt class="col-sm-4"><div class="schedule-cs font-primary"><?= date("d F Y", strtotime($value->TANGGAL));?></div></dt>
										<dd class="col-sm-8">
											<div class="schedule-desc"><?= $value->JUDUL;?></div>
										</dd>
									<?php }}?>
								</dl>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div><!-- #section-scedule end -->

		<div class="clear"></div>


		<!-- Section Speakers
		============================================= -->
		<div id="pembicara" class="section page-section bg-transparent pt-0 topmargin-lg clearfix">
			<div class="container">
				<div class="mb-5 dark d-flex flex-wrap justify-content-between align-items-center">
					<span class="display-4 font-weight-bold gradient-underline mb-0">Speakers</span>
				</div>
				<div class="card-columns mx-auto dark"  style="max-width: 1000px;">
					<?php if ($pembicara == 0) { ?>

						<a href="#" class="team joinspeaker ">
							<div class="team-image gradient-bg">
								<img src="<?php echo base_url();?>berkas/file/pembicara/blank.jpg" alt="Join as Speaker">
								<i class="icon-line-circle-plus gradient-text"></i>
							</div>
							<div class="team-desc" style="z-index: 3;">
								<div class="team-title"><h4 class="gradient-text">Join as a Speaker</h4></div>
							</div>
						</a>
					<?php }else { foreach ($pembicara as $key) { ?>
						<a href="#" class="team">
							<div class="team-image">
								<?php if ($key->FOTO == null) { ?>
									<img src="<?php echo base_url();?>berkas/file/pembicara/1.jpg" alt="<?= $key->NAMA;?>">
								<?php }else { ?>
									<img src="<?php echo base_url();?>berkas/file/pembicara/<?= $key->FOTO;?>" alt="<?= $key->NAMA;?>">
								<?php }?>
							</div>
							<div class="team-desc">
								<div class="team-title"><h4 class="gradient-text"><?= $key->NAMA;?></h4><span><?= $key->MAJOR;?></span></div>
							</div>
						</a>
					<?php }}?>
				</div>
			</div>
		</div><!-- #section-speaker end -->

		<div class="clear"></div>

		<!-- Section Tickets
		============================================= -->
		<div id="karya" class="section page-section bg-transparent pt-0 topmargin-lg clearfix">
			<div class="container">
				<div class="mb-5 dark d-flex justify-content-between align-items-center">
					<span class="display-4 font-weight-bold gradient-underline mb-0">Karya</span>
				</div>

				<!-- Portfolio Items
				============================================= -->
				<div id="portfolio" class="portfolio row grid-container gutter-30" data-layout="fitRows">

					<?php if ($karya == 0) { ?>
						<h3 class="ml-3"><center><b>Belum ada Karya</b></center></h3>
					<?php }else { $no = 0; foreach ($karya as $value) { ?>

						<article class="portfolio-item col-md-3 pf-media pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="<?php echo site_url('DetailKarya/'.$value->ID_KARYA);?>">
										<?php $foto = $controller->home_model->get_foto($value->ID_KARYA);?>
										<img src="<?php echo base_url();?>berkas/karya/<?= $value->FOLDER;?>/foto/<?= $foto;?>" alt="<?= $value->JUDUL;?>">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="<?php echo site_url('DetailKarya/'.$value->ID_KARYA);?>" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" class="overlay-trigger-icon bg-light text-dark"><i class="icon-link"></i></a>
											<a href="<?php echo base_url();?>berkas/karya/<?= $value->FOLDER;?>/foto/<?= $foto;?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line2-eye"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
				          <h3><a href="<?php echo site_url('DetailKarya/'.$value->ID_KARYA);?>" style="color: white;"><?= $value->JUDUL;?></a></h3>
									<span><a href="#" style="color: white;"><?= $value->KATEGORI;?></a></span>
								</div>
							</div>
						</article>

					<?php $no++; if($no == 8){ break; }}}?>

				</div><!-- #portfolio end -->
			</div>
		</div>


		<div class="position-relative">

			<div class="dotted-bg" style="background: url('<?php echo base_url();?>assets/frontend/demos/conference/images/dotted-bg.svg') repeat center center / contain;"></div>
		</div>

		<?php if ($karya > 0) { ?>
			<div class="container topmargin-lg">
				<div class="mx-auto dark center" style="max-width: 850px">
					<a href="<?php echo site_url('Karya');?>" class="button button-xxlarge button-white button-light button-gradient-hover mt-4">Lihat Semua Karya</a>
				</div>
			</div>
		<?php }?>
	</div><!-- #section-tickets end -->

</div>
</section><!-- #content end -->
