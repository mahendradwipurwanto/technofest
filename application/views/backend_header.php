<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="STIKI <?= $judul ?> merupakan pameran produk Tugas Akhir, Tugas Akhir Mata Kuliah, Magang, Lomba, Proyek Individu dan Proyek Karya Kelompok Bidang Minat dari Program studi Teknik Informatika, Sistem Informatika dan Manajemen Informatika." />
  <meta name="author" content="STIKI Malang colaboration by CreativeCrew Since 2013" />
  <title><?= ($this->session->userdata('ROLE') == 1 ? 'PENGGUNA' : 'ADMIN');?> - <?= $judul ?></title>
  <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>berkas/karya/logo/<?= $logo ?>" />

  <link href="<?php echo base_url();?>assets/backend/css/styles.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/backend/css/custom.css?<?=  time();?>" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/backend/css/plugin/daterangepicker/daterangepicker.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  <style>
    .select2-container--default .select2-selection--single .select2-selection__rendered {
      line-height: 38px;
    }
    .select2-container .select2-selection--single {
      height: 38px;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow {
      height: 36px;
    }
    .select2-container {
      width: 100% !important;
    }
    .select2-container--default .select2-selection--single .select2-selection__clear {
      display: none !important;
    }
  </style>

  <style>
    th, td { white-space: nowrap; }
  </style>

  <script src="<?php echo base_url();?>assets/backend/js/plugin/font-awesome/5.13.0/js/all.min.js"></script>
  <script src="<?php echo base_url();?>assets/backend/js/plugin/feather-icons/4.27.0/feather.min.js"></script>
  <script src="<?php echo base_url();?>assets/backend/js/jquery-3.5.1.min.js"></script>
  <script src="<?php echo base_url();?>assets/backend/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/backend/js/plugin/tinymce/jquery.tinymce.min.js"></script>
  <script src="<?php echo base_url();?>assets/backend/js/plugin/tinymce/tinymce.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<div id="progressMessage" style="display:none; padding:5px">
  <div id="activityIndicator" class="cs-loader"></div>
</div>
<body class="nav-fixed">
  <nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
    <a class="navbar-brand" href="<?php echo base_url();?>"><?= $judul ?></a>
    <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i data-feather="menu"></i></button>
    <?php if ($this->session->userdata('ROLE') != 1) { ?>
      dev mode
      <div class="onoffswitch mr-2">
        <input type="checkbox" name="devmode" class="onoffswitch-checkbox" id="dev" tabindex="0" <?= ($dev_mode == 1) ? "checked" : "";?>>
        <label class="onoffswitch-label mb-0 ml-2" for="dev">
          <span class="onoffswitch-inner"></span>
          <span class="onoffswitch-switch"></span>
        </label>
      </div>
    <?php }?>
    <?php if ($this->session->userdata('ROLE') == 0) { ?>
      Upload karya
      <div class="onoffswitch">
        <input type="checkbox" name="devmode" class="onoffswitch-checkbox" id="upload_karya" tabindex="0" <?= ($upload_karya == 1) ? "checked" : "";?>>
        <label class="onoffswitch-label mb-0 ml-2" for="upload_karya">
          <span class="onoffswitch-inner"></span>
          <span class="onoffswitch-switch"></span>
        </label>
      </div>
    <?php }?>
    <ul class="navbar-nav align-items-center ml-auto">
      <li class="nav-item dropdown no-caret mr-3 d-none d-md-inline">
        <a class="nav-link" role="button">
          <div class="d-none d-md-inline font-weight-500"> <span class="badge badge-success"><?= $semester_aktif;?></span> </div>
        </a>
      </li>
      <li class="nav-item dropdown no-caret mr-3 d-none d-md-inline">
        <a href="<?php echo base_url();?>" class="nav-link" target="_blank" role="button">
          <div class="d-none d-md-inline font-weight-500">Landing Page</div>
        </a>
      </li>
      <?php if ($this->session->userdata('ROLE') == 0) { ?>
        <li class="nav-item dropdown no-caret mr-3 dropdown-notifications">
          <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="bell"></i></a>
          <?php if($ID_SEM == null || $count_karya == 0 || $count_agenda == 0 || $dev_mode == 1) { ?><span class="badge badge-info">!</span><?php }?>
          <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts">
            <h6 class="dropdown-header dropdown-notifications-header">
              <i class="mr-2" data-feather="bell"></i>
              Pemberitahuan
            </h6>
            <?php if($dev_mode == 1) { ?>
              <a class="dropdown-item dropdown-notifications-item" href="<?php echo site_url('Pengaturan/Semester');?>">
                <div class="dropdown-notifications-item-icon bg-warning"><i data-feather="activity"></i></div>
                <div class="dropdown-notifications-item-content">
                  <div class="dropdown-notifications-item-content-details">Dev mode</div>
                  <div class="dropdown-notifications-item-content-text">Website masih dalam developer mode!</div>
                </div>
              </a>
            <?php }?>
            <?php if($ID_SEM == null) { ?>
              <a class="dropdown-item dropdown-notifications-item" href="<?php echo site_url('Pengaturan/Semester');?>">
                <div class="dropdown-notifications-item-icon bg-warning"><i data-feather="activity"></i></div>
                <div class="dropdown-notifications-item-content">
                  <div class="dropdown-notifications-item-content-details">Semester Aktif</div>
                  <div class="dropdown-notifications-item-content-text">MINIMAL Atur 1 Aktif SEMESTER</div>
                </div>
              </a>
            <?php }?>
            <?php if($count_karya == 0) { ?>
              <a class="dropdown-item dropdown-notifications-item" href="<?php echo site_url('UploadKarya');?>">
                <div class="dropdown-notifications-item-icon bg-warning"><i data-feather="activity"></i></div>
                <div class="dropdown-notifications-item-content">
                  <div class="dropdown-notifications-item-content-details">Karya</div>
                  <div class="dropdown-notifications-item-content-text">Belum ada karya di semester ini</div>
                </div>
              </a>
            <?php }?>
            <?php if($count_agenda == 0) { ?>
              <a class="dropdown-item dropdown-notifications-item" href="<?php echo site_url('UploadKarya');?>">
                <div class="dropdown-notifications-item-icon bg-warning"><i data-feather="activity"></i></div>
                <div class="dropdown-notifications-item-content">
                  <div class="dropdown-notifications-item-content-details">Agenda</div>
                  <div class="dropdown-notifications-item-content-text">Belum ada agenda di semester ini</div>
                </div>
              </a>
            <?php }?>
          </div>
        </li>
      <?php }?>
      <li class="nav-item dropdown no-caret mr-2 dropdown-user">
        <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"/></a>
        <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
          <h6 class="dropdown-header d-flex align-items-center">
            <img class="dropdown-user-img" src="https://source.unsplash.com/QAB-WJcbgJk/60x60" />
            <div class="dropdown-user-details">
              <div class="dropdown-user-details-name"><?= $this->session->userdata('NAMA');?></div>
            </div>
          </h6>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('Keluar');?>">
            <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
            Keluar
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
          <div class="nav accordion" id="accordionSidenav">
            <?php if ($this->session->userdata('ROLE') != 1) { ?>
              <div class="sidenav-menu-heading">Dashboard</div>
              <a class="nav-link" href="<?php echo site_url('Dashboard');?>">
                <div class="nav-link-icon"><i data-feather="trello"></i></div>
                Statistik
              </a>
              <a class="nav-link" href="<?php echo site_url('Browser');?>">
                <div class="nav-link-icon"><i data-feather="box"></i></div>
                File Manager Karya
              </a>
              <a class="nav-link" href="<?php echo site_url('Pengaturan');?>">
                <div class="nav-link-icon"><i data-feather="trello"></i></div>
                Pengaturan
              </a>
            <?php } ?>

            <?php if ($ID_SEM != null) { ?>
              <div class="sidenav-menu-heading">Karya</div>
              <?php if ($this->session->userdata('ROLE') == 0 || $this->session->userdata('ROLE') == 2) { ?>
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                  <div class="nav-link-icon"><i data-feather="grid"></i></div>
                  Data Karya
                  <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" data-parent="#accordionSidenav">
                  <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                    <a class="nav-link" href="<?php echo site_url('KaryaAdmin');?>">
                      Karya Aktif
                    </a>
                    <a class="nav-link" href="<?php echo site_url('HistoryKarya');?>">
                      History
                    </a>
                  </nav>
                </div>
              <?php }?>
              <?php if ($this->session->userdata('ROLE') == 1) :?>
                <a class="nav-link" href="<?php echo site_url('StatusKarya');?>">
                  <div class="nav-link-icon"><i data-feather="shopping-bag"></i></div>
                  Status Karya
                </a>
                <?php if ($upload_karya == 1) :?>
                  <a class="nav-link" href="<?php echo site_url('UploadKarya');?>">
                    <div class="nav-link-icon"><i data-feather="shopping-bag"></i></div>
                    Unggah karya
                  </a>
                <?php endif;?>
              <?php endif;?>

              <?php if ($this->session->userdata('ROLE') != 1) :?>
                <a class="nav-link" href="<?php echo site_url('UploadKarya');?>">
                  <div class="nav-link-icon"><i data-feather="shopping-bag"></i></div>
                  Upload Karya
                </a>
              <?php endif;?>
            <?php }?>
            <?php if ($this->session->userdata('ROLE') == 0) { ?>
              <div class="sidenav-menu-heading">Berkas</div>
              <a class="nav-link" href="<?php echo site_url('Koordinator');?>">
                <div class="nav-link-icon"><i data-feather="users"></i></div>
                Data Koordinator Upload
              </a>
              <a class="nav-link" href="<?php echo site_url('Pengguna');?>">
                <div class="nav-link-icon"><i data-feather="users"></i></div>
                Data Pengguna
              </a>
              <?php if ($ID_SEM != null) { ?>
                <a class="nav-link" href="<?php echo site_url('Agenda');?>">
                  <div class="nav-link-icon"><i data-feather="package"></i></div>
                  Data Agenda
                </a>
                <a class="nav-link" href="<?php echo site_url('Pembicara');?>">
                  <div class="nav-link-icon"><i data-feather="users"></i></div>
                  Data Pembicara
                </a>
                <!-- <a class="nav-link" href="<?php echo site_url('Pendaftaran');?>">
                  <div class="nav-link-icon"><i data-feather="clipboard"></i></div>
                  Data Pendaftaran
                </a> -->
              <?php }?>
            <?php }?>
          </div>
        </div>
        <div class="sidenav-footer">
          <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle">Masuk sebagai:</div>
            <div class="sidenav-footer-title"><?= $this->session->userdata('NAMA');?></div>
          </div>
        </div>
      </nav>
    </div>
    <div id="layoutSidenav_content">
      <?php if($ID_SEM == null) { ?>
        <div class="modal fade" id="sem_aktif" role="dialog" tabindex="-1" >
          <div class="modal-dialog modal-dialog-centered" role="document">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-body">
                <button type="button" class="close alcs" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class="alert alert-warning alert-icon shadow" style="margin: 0px !important; padding:10px !important" role="alert">
                  <p><b>Opss !!</b><br>
                    Anda belum mengatur satupun SEMESTER AKTIF!! anda tidak dapat mengelolah data, agenda, karya, dan kategori jika hal ini terjadi. HARAP atur SEMESTER AKTIF di Pengaturan > Semester!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <script type="text/javascript">
            $(window).on('load',function(){
              $('#sem_aktif').modal('show');
            });
          </script>
        <?php } ?>
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
            <main>
              <!-- Main page content-->
              <div class="container mt-5">
