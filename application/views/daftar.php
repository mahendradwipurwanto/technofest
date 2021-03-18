<section id="slider" class="slider-element min-vh-60 min-vh-md-100 include-header" style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.8)), url('demos/conference/images/hero-2.jpg') no-repeat center center / cover;">
  <div class="slider-inner">

    <div class="vertical-middle">
      <div class="container dark py-5 py-md-0">
        <div class="row justify-content-between mt-5 col-mb-50">
          <div class="col-lg-12 parallax" >
            <br><br><br><br><br>
            <!-- Content
            ============================================= -->
            <div class="row">
              <div class="container">

                <div class="col-md-8 offset-md-2">

                  <?php if ($this->session->flashdata('error')) {?>
                    <div class="alert alert-warning" role="alert">
                      <p class="mb-0"><b>Opss !!</b><br> <?php echo $this->session->flashdata('error'); ?></p>
                    </div>
                  <?php }elseif ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success" role="alert">
                      <p class="mb-0"><b>Notifikasi !!</b><br> <?php echo $this->session->flashdata('success'); ?></p>
                    </div>
                  <?php } ?>
                  <h3><center>Hubungi HUMAS kami di media instagram @stiki.technofest untuk mendaftarkan karya anda pada event kami.</center></h3>

                  <!-- <form id="register-form" name="register-form" class="row" action="" method="post">

                    <div class="col-md-6 col-sm-12 form-group">
                      <label for="register-form-name">Nama Lengkap</label>
                      <input type="text" id="register-form-name" style="background-color: white; color: black;" name="nama" placeholder="" class="form-control" required/>
                    </div>

                    <div class="col-md-6 col-sm-12 form-group">
                      <label for="register-form-email">Email</label>
                      <input type="email" id="register-form-email" style="background-color: white; color: black;" name="email" placeholder="" class="form-control" required/>
                    </div>

                    <div class="w-100"></div>

                    <div class="col-md-6 col-sm-12 form-group">
                      <label for="register-form-username">Asal Kampus</label>
                      <input type="text" id="register-form-username" style="background-color: white; color: black;" name="kampus" placeholder="" class="form-control" required/>
                      <small class="text-danger">Tuliskan nama asal kampus anda dengan lengkap.</small>
                    </div>

                    <div class="col-md-6 col-sm-12 form-group">
                      <label for="register-form-phone">No. Telepon</label>
                      <input type="text" id="register-form-phone" style="background-color: white; color: black;" name="telepon" placeholder="" class="form-control" required/>
                    </div>

                    <div class="w-100"></div>

                    <div class="col-md-6 col-sm-12 form-group">
                      <label for="register-form-password">Password</label>
                      <input type="password" id="register-form-password" minlength="8" maxlength="12" style="background-color: white; color: black;" name="password" placeholder="" class="form-control" required/>
                      <small class="text-danger">Min 8 karakter, Max 12 Karakter</small>
                    </div>

                    <div class="col-md-6 col-sm-12 form-group">
                      <label for="register-form-repassword">Konfirmasi Password</label>
                      <input type="password" minlength="8" maxlength="12" style="background-color: white; color: black;" id="register-form-repassword" name="repassword" placeholder="" class="form-control" required/>
                      <small class="text-danger">Masukkan konfirmasi password dengan benar</small>
                    </div>

                    <div class="w-100"></div>

                    <div class="col-md-6 col-sm-12 form-group">
                      <button class="button button-3d button-black button-gradient m-0" id="register-form-submit" name="register-form-submit" value="register">Daftar Sekarang</button>
                      Sudah mempunyai akun? <a href="<?php echo site_url('Masuk');?>">Masuk disini</a>
                    </div>

                    <div class="w-100"></div>
                  </form> -->

                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- #Slider end -->
<br><br><br><br><br><br><br><br><br><br><br><br>
