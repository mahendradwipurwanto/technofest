<h1 class="gradient-text center">KARYA</h1>
<div class="portfolio grid-container mr-5 ml-5" data-layout="fitRows">
  <div class="row">
    <?php if ($karya == 0) : ?>
      <h3 class="ml-3"><center><b>Belum ada Karya</b></center></h3>
      <?php else: foreach ($karya as $value) { ?>


        <article class="portfolio-item col-md-3 col-xs-12 pf-media pf-icons">
          <div class="grid-inner">
            <div class="portfolio-image">
              <a href="<?php echo site_url('DetailKarya/'.$value->ID_KARYA);?>" target="_blank">
                <?php $foto = $controller->home_model->get_foto($value->ID_KARYA);?>
                <?php if ($foto == false): ?>
                  <img src="<?php echo base_url();?>berkas/karya/logo/<?= $logo ?>" alt="">
                  <?php else: ?>
                    <img src="<?php echo base_url();?>berkas/karya/<?= $value->FOLDER;?>/foto/<?= $foto;?>" alt="<?= $value->JUDUL;?>">
                  <?php endif; ?>
                </a>
                <div class="bg-overlay">
                  <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                    <a href="<?php echo site_url('DetailKarya/'.$value->ID_KARYA);?>" target="_blank" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" class="overlay-trigger-icon bg-light text-dark"><i class="icon-link"></i></a>
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

        <?php }?>
        <div class="row col-md-12 mt-3 pr-0">
          <div class="col-md-12 pr-0">
            <?= $this->pagination->create_links(); ?>
          </div>
        </div>

      <?php endif;?>
    </div>

  </div>
  <br><br><br>
