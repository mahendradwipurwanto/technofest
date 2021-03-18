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
                    <?php foreach ($foto as $key) { ?>
                      <div class="slide" data-thumb="<?php echo base_url();?>berkas/agenda/<?= $agenda->FOLDER;?>/foto/<?= $key->FOTO;?>"><a href="#"><img src="<?php echo base_url();?>berkas/agenda/<?= $agenda->FOLDER;?>/foto/<?= $key->FOTO;?>" alt="Image"></a></div>
                    <?php }?>
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
              <p style="color: white;"><?= $agenda->DESKRIPSI;?>.</p>

              <!-- Portfolio Single - Meta
              ============================================= -->
              <ul class="portfolio-meta bottommargin">
                <li><span><i class="icon-line-heart" style="color: white;"></i><font color="white">Divote:</span> <?= $like = $controller->agenda_model->cek_like($agenda->ID_KARYA);?></font></li>
                <li><span><i class="icon-user" style="color: white;"></i><font color="white">Dibuat oleh:</span>
                  <?php $anggota = $controller->agenda_model->get_anggota($agenda->ID_KARYA); foreach ($anggota as $key){ echo "<b>".$key->NAMA."</b> (".$key->NRP."), ";} ?>
                </font></li>
                <li><span><i class="icon-calendar3" style="color: white;"></i><font color="white">Kategori:</span> <?= $agenda->KATEGORI;?></font></li>
              </ul>
              <!-- Portfolio Single - Meta End -->

              <div class="feature-box fbox-border fbox-light fbox-effect">
                <?php if ($this->session->userdata('logged_in') == TRUE) {
                  if ($controller->agenda_model->cek_vote($agenda->ID_KARYA, $this->session->userdata('KODE_USER')) == TRUE ) {
                    ?>
                    <div class="fbox-icon">
                      <a href="<?php echo site_url('vote/'.$agenda->ID_KARYA);?>"><i class="icon-line-heart" style="color: red"></i></a>
                    </div>
                    <div class="fbox-content">
                      <h3 style="color: white">Like</h3>
                      <p>Klik tombol disamping kiri untuk like agenda ini.</p>
                    </div>
                  <?php }else{?>
                    <div class="fbox-icon">
                      <i class="icon-like" style="color: red"></i>
                    </div>
                    <div class="fbox-content">
                      <h3 style="color: white">Like</h3>
                      <p>Anda telah me-like agenda ini.</p>
                    </div>
                  <?php }}else{?>
                    <div class="fbox-icon">
                      <a href="<?php echo site_url('vote/'.$agenda->ID_KARYA);?>"><i class="icon-line-heart" style="color: red"></i></a>
                    </div>
                    <div class="fbox-content">
                      <h3 style="color: white">Like</h3>
                      <p>Klik tombol disamping kiri untuk like agenda ini.</p>
                    </div>
                  <?php }?>
                </div>
                <!-- Portfolio Single - Share End -->
              </div><!-- .portfolio-single-content end -->
            </div>

          </div>
        </div>
      </section><!-- #content end -->
