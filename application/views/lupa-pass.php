<section id="slider" class="slider-element min-vh-60 min-vh-md-100 include-header" style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.8)), url('demos/conference/images/hero-2.jpg') no-repeat center center / cover;">
  <div class="slider-inner">

    <section id="slider" class="slider-element min-vh-60 min-vh-md-100 include-header" style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.8)), url('demos/conference/images/hero-2.jpg') no-repeat center center / cover;">
      <div class="slider-inner">
        <br><br><br>
        <div class="vertical-middle">
          <div class="container dark py-5 py-md-0">
            <div class="row justify-content-between mt-5 col-mb-50">
              <div class="col-lg-12 parallax" data-0="transform: translateY(0px); opacity: 1" data-300="transform: translateY(50px); opacity: 0">

                <div class="accordion accordion-lg mx-auto mb-0 clearfix" style="max-width: 550px;">

                  <?php if ($this->session->flashdata('error')) {?>
                    <div class="alert alert-warning" role="alert">
                      <p class="mb-0"><b>Opss !!</b><br> <?php echo $this->session->flashdata('error'); ?></p>
                    </div>
                  <?php }elseif ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success" role="alert">
                      <p class="mb-0"><b>Notifikasi !!</b><br> <?php echo $this->session->flashdata('success'); ?></p>
                    </div>
                  <?php }elseif ($this->session->flashdata('alert')) { ?>
                    <div class="alert alert-warning" role="alert">
                      <p class="mb-0"><b>Notifikasi !!</b><br> <?php echo $this->session->flashdata('alert'); ?></p>
                    </div>
                  <?php } ?>

                  <div class="accordion-header">
                    <div class="accordion-icon">
                      <i class="accordion-closed icon-lock3"></i>
                      <i class="accordion-open icon-unlock"></i>
                    </div>
                    <div class="accordion-title">
                      Masukkan email akun anda
                    </div>
                  </div>
                  <div class="accordion-content clearfix">
                    <form id="login-form" name="login-form" class="row mb-0" action="<?php echo site_url('Masuk/proses_lupa');?>" method="post">
                      <div class="col-12 form-group">
                        <label for="login-form-username">Email</label>
                        <input type="email" style="color: black; background-color: white;" id="login-form-username" name="email" placeholder="Masukkan email anda yang telah terdaftar" class="form-control" required/>
                      </div>

                      <div class="col-12 form-group">
                        <button class="button button-3d button-black button-gradient m-0" id="login-form-submit" name="login-form-submit" type="submit" value="login">Kirim link reset password</button>
                      </div>
                      <small>Cek folder spam anda, jika tidak ada email masuk pada kontak masuk email anda</small>
                    </form>
                  </div>
                  Sudah mempunyai akun?<a href="<?php echo site_url('Masuk');?>"> Masuk disini</a>

                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #Slider end -->

  </div>

</section><!-- #Slider end -->
