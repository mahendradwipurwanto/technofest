<br><br>
<h1 class="gradient-text center"><?= $agenda->JUDUL;?></h1>

<?php if($this->session->flashdata('alert')) { ?>
  <div class="modal fade" id="notifikasi" role="dialog" tabindex="-1" >
    <div class="modal-dialog modal-dialog-centered" role="document">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close alcs" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="alert alert-warning alert-icon shadow" style="margin: 0px !important; padding:10px !important" role="alert">
            <p><b>Opss !!</b><br>
              <?php echo $this->session->flashdata('alert'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
    $(window).on('load',function(){
      $('#notifikasi').modal('show');
    });
    </script>
  <?php }elseif ($this->session->flashdata('success')) {?>
    <div class="modal fade" id="notifikasi" role="dialog" tabindex="-1" >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close alcs" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <div class="alert alert-success alert-icon shadow" style="margin: 0px !important; padding:10px !important" role="alert">
              <p><b>Berhasil !!</b><br>
                <?php echo $this->session->flashdata('success'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
      $(window).on('load',function(){
        $('#notifikasi').modal('show');
      });
      </script>
    <?php } ?>

    <!-- Content
    ============================================= -->
    <section id="content" style="background-color: black;">
      <div class="content-wrap">
        <div class="container clearfix">

          <div class="row col-mb-50 mb-0">
            <!-- Portfolio Single Gallery
            ============================================= -->
            <div class="col-md-7 col-lg-8 portfolio-single-image">
              <div class="fslider" data-arrows="false" data-thumbs="true" data-animation="fade">
                <div class="flexslider">
                  <div class="slider-wrap">
                    <?php if ($agenda->POSTER == NULL): ?>
                      <div class="slide" data-thumb="<?php echo base_url();?>berkas/karya/logo/<?= $logo ?>"><a href="#"><img src="<?php echo base_url();?>berkas/karya/logo/<?= $logo ?>" alt="Image"></a></div>
                    <?php else: ?>
                      <div class="slide" data-thumb="<?php echo base_url();?>berkas/agenda/<?= $agenda->ID_AGENDA;?>/poster/<?= $agenda->POSTER;?>"><a href="#"><img src="<?php echo base_url();?>berkas/agenda/<?= $agenda->ID_AGENDA;?>/poster/<?= $agenda->POSTER;?>" alt="Image"></a></div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div><!-- .portfolio-single-image end -->

            <!-- Portfolio Single Content
            ============================================= -->
            <div class="col-md-5 col-lg-4 portfolio-single-content">
              <!-- Portfolio Single - Description
              ============================================= -->
              <div class="fancy-title title-bottom-border">
                <h2 style="color: white;">Info Agenda:</h2>
              </div>
              <p style="color: white;"><?= $agenda->KETERANGAN;?>.</p>

              <!-- Portfolio Single - Meta
              ============================================= -->
              <ul class="portfolio-meta bottommargin">
                <li><span><i class="icon-home" style="color: white;"></i><font color="white">Kegiatan</span>: <?= ($agenda->SEMINAR == 1 ? 'SEMINAR' : '');?></font></li>
                <li><span><i class="icon-dashboard" style="color: white;"></i><font color="white">Via</span>: <?= $agenda->MEDIA ;?></font></li>
                <li><span><i class="icon-calendar3" style="color: white;"></i><font color="white">Tanggal</span>: <?= date("d F Y", strtotime($agenda->TANGGAL));?></span>
                </font></li>
                <li><span><i class="icon-clock" style="color: white;"></i><font color="white">Waktu</span>: <?= $agenda->WAKTU;?> WIB</font></li>
                <?php if ($agenda->BERBAYAR == 1): ?>
                  <li><span><i class="icon-money" style="color: white;"></i><font color="white">FEE</span>: Rp.<?= ($agenda->BERBAYAR == 1 ? $agenda->FEE : 'GRATIS');?></font></li>
                <?php endif; ?>
                <?php if ($agenda->REGISTER == 1): ?>
                  <li><span><i class="icon-link" style="color: white;"></i><font color="white">Link daftar</span>: <a href="<?= $agenda->LINK_DAFTAR ?>" target="_blank"> <?= ($agenda->REGISTER == 1 ? $agenda->LINK_DAFTAR : '');?></a></font></li>`
                <?php endif; ?>
              </ul>
              <!-- Portfolio Single - Meta End -->
            </div>

          </div>
        </div>
      </section><!-- #content end -->
