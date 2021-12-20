<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content= ""/>
  <meta name="author" content />
  <title>Dev Login - <?= $judul ?></title>
  <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>berkas/karya/logo/<?= $logo ?>" />

  <link href="<?php echo base_url();?>assets/backend/css/styles.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/backend/css/custom.css" rel="stylesheet" />

  <script data-search-pseudo-elements defer src="<?php echo base_url();?>assets/backend/js/plugin/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
  <script src="<?php echo base_url();?>assets/backend/js/plugin/feather-icons/4.27.0/feather.min.js" crossorigin="anonymous"></script>
  <script src="<?php echo base_url();?>assets/backend/js/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
</head>
<body>

  <?php if ($this->session->flashdata('success')){ ?>
  <!-- Toast success -->
  <div style="position: absolute; top: 1.25rem; right: 1rem; z-index:99 !important">
    <!-- Toast -->
    <div class="toast" id="success_toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
      <div class="toast-header text-success">
        <i data-feather="check-circle"></i>
        <strong class="mr-auto">Notifikasi</strong>
        <small class="text-muted ml-4">baru jasa</small>
        <button class="ml-2 mb-1 close" type="button" data-dismiss="toast" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="toast-body"><?= $this->session->flashdata('success'); ?></div>
    </div>
  </div>
  <?php }elseif($this->session->flashdata('error')){ ?>
  <!-- Toast error -->
  <div style="position: absolute; top: 1.25rem; right: 1rem; z-index:99 !important">
    <!-- Toast -->
    <div class="toast" id="error_toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
      <div class="toast-header text-danger">
        <i data-feather="alert-circle"></i>
        <strong class="mr-auto">Terjadi Kesalahan</strong>
        <small class="text-muted ml-4">baru saja</small>
        <button class="ml-2 mb-1 close" type="button" data-dismiss="toast" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="toast-body"><?= $this->session->flashdata('error'); ?></div>
    </div>
  </div>
  <?php } ?>

  <div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
      <main>
        <div class="container">
          <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-8 col-xs-10 ">
              <!-- Social login form-->
              <div class="card my-4 mt-4">
                <div class="card-body p-4" style="padding-bottom: 8px !important;">
                  <div class="text-gray-700 text-lg title font-weight-700">Login</div>
                </div>
                <div class="card-body p-4" style="padding-top: 0px !important">
                  <hr class="my-0 mb-3" />
                  <!-- login form-->
                  <form action="<?php echo site_url('Masuk');?>" method="POST">
                    <div class="form-group">
                      <label class="small text-muted" for="Username">Email</label>
                      <input class="form-control form-control-solid py-2" type="email" name="email" placeholder-aria-label="Username" aria-describedby="Username" required/>
                    </div>
                    <div class="form-group" id="pwd-container">
                      <label class="small text-muted" for="Password">Password </label>
                      <input class="form-control form-control-solid py-2" type="password" name="password" minlength="4" maxlength="16" placeholder-aria-label="Password" aria-describedby="Password" required />
                    </div>
                    <!-- Form Group (forgot password link)-->
                    <!-- Form Group (login box)-->
                    <div class="form-group d-flex align-items-center justify-content-between mb-0">
                      <button type="submit" class="btn btn-primary btn-block shadow-lg pull-right">Start develop!</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </main>
    </div>
    <div id="layoutAuthentication_footer">
      <footer class="footer mt-auto footer-dark">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 small">Copyright &#xA9; <?= $judul ?> 2021 supported by Nestivent.org</div>
            <div class="col-md-6 text-md-right small">
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <?php if ($this->session->flashdata('success')){ ?>
  <script>
    $( document ).ready(function() {
      $('#success_toast').toast('show');
    });
  </script>
  <?php }elseif($this->session->flashdata('error')){ ?>
  <script>
    $( document ).ready(function() {
      $('#error_toast').toast('show');
    });
  </script>
  <?php }?>
  <script src="<?php echo base_url();?>assets/backend/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="<?php echo base_url();?>assets/backend/js/scripts.js"></script>
  <script src="<?php echo base_url();?>assets/backend/js/plugin/Chart.js/2.9.3/Chart.min.js" crossorigin="anonymous"></script>
  <script src="<?php echo base_url();?>assets/backend/js/plugin/datatables/jquery.dataTables.min.js" crossorigin="anonymous"></script>
  <script src="<?php echo base_url();?>assets/backend/js/plugin/datatables/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
  <script src="<?php echo base_url();?>assets/backend/js/plugin/momentjs/moment.min.js" crossorigin="anonymous"></script>
  <script src="<?php echo base_url();?>assets/backend/js/plugin/daterangepicker/daterangepicker.min.js" crossorigin="anonymous"></script>
</body>
</html>
