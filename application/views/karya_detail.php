<br><br>
<h1 class="gradient-text center mb-0"><?= $karya->JUDUL;?></h1>

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
      <div class="content-wrap mt-0">
        <div class="container clearfix">

          <div class="row col-mb-50 mb-0">
            <!-- Portfolio Single Gallery
            ============================================= -->
            <div class="col-md-7 col-lg-8 portfolio-single-image">
              <div class="fslider" data-arrows="false" data-thumbs="true" data-animation="fade">
                <div class="flexslider">
                  <div class="slider-wrap">
                    <?php if ($foto == false): ?>
                      <div class="slide" data-thumb="<?php echo base_url();?>berkas/karya/logo/<?= $logo ?>"><a href="#"><img src="<?php echo base_url();?>berkas/karya/logo/<?= $logo ?>" alt="Image"></a></div>
                    <?php else: ?>
                    <?php foreach ($foto as $key) { ?>
                      <div class="slide" data-thumb="<?php echo base_url();?>berkas/karya/<?= $karya->FOLDER;?>/foto/<?= $key->FOTO;?>"><a href="#"><img src="<?php echo base_url();?>berkas/karya/<?= $karya->FOLDER;?>/foto/<?= $key->FOTO;?>" alt="Image"></a></div>
                    <?php }?>
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
                <h2 style="color: white;">Info Karya:</h2>
              </div>
              <p style="color: white;"><?= $karya->DESKRIPSI;?>.</p>

              <!-- Portfolio Single - Meta
              ============================================= -->
              <ul class="portfolio-meta bottommargin">
                <!-- <li><span><i class="icon-line-heart" style="color: white;"></i><font color="white">Like:</span> <?= $like = $controller->karya_model->cek_like($karya->ID_KARYA);?></font></li> -->
                <li><span><i class="icon-user" style="color: white;"></i><font color="white">Dibuat oleh:</span>
                  <?php $anggota = $controller->karya_model->get_anggota($karya->ID_KARYA); foreach ($anggota as $key){ echo "<b class='text-italic'>".$key->NAMA."</b> (".$key->NRP.") - ";} ?>
                </font></li>
                <li><span><i class="icon-clipboard" style="color: white;"></i><font color="white">DOSPEM:</span> <?= $karya->DOSPEM;?></font></li>
                <li><span><i class="icon-calendar3" style="color: white;"></i><font color="white">Kategori:</span> <i><?= $karya->KATEGORI;?></i></font></li>
              </ul>
              <!-- Portfolio Single - Meta End -->

                <!-- Portfolio Single - Share
                ============================================= -->
                <div class="si-share d-flex justify-content-between align-items-center" style="margin-top: 10%;">
                  <span style="color: white;">AYO Bagikan Karya INI!</span>
                  <div>
                    <a href="http://www.facebook.com/sharer.php?m2w&amp;s=100&amp;p[url]=<?php echo base_url(uri_string());?>&amp;&amp;p[title]=<?= $karya->JUDUL;?>" class="social-icon si-borderless si-facebook">
                      <i class="icon-facebook" style="color: white;"></i>
                      <i class="icon-facebook"></i>
                    </a>
                    <a href="https://twitter.com/share?text=<?= $karya->JUDUL;?>;url=<?php echo base_url(uri_string());?>" class="social-icon si-borderless si-twitter">
                      <i class="icon-twitter" style="color: white;"></i>
                      <i class="icon-twitter"></i>
                    </a>
                    <a href="http://pinterest.com/pin/create/button/?url=<?php echo base_url(uri_string());?>;description=<?= $karya->JUDUL;?>;media=<?= $karya->JUDUL;?>" class="social-icon si-borderless si-pinterest">
                      <i class="icon-pinterest" style="color: white;"></i>
                      <i class="icon-pinterest"></i>
                    </a>
                    <a href="mailto:?subject=<?= $karya->JUDUL;?>&amp;body=<?php echo base_url(uri_string());?>" class="social-icon si-borderless si-email3">
                      <i class="icon-email3" style="color: white;"></i>
                      <i class="icon-email3"></i>
                    </a>
                  </div>
                </div>
                <!-- Portfolio Single - Share End -->
              </div><!-- .portfolio-single-content end -->
            </div>

          </div>
        </div>
      </section><!-- #content end -->
