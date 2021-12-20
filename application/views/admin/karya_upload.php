<?php $this->load->view('admin/header_karya');?>

<div id="msform">
  <ul id="progressbar">
    <li class="active" id="account"><h6>Pilih Kategori</h6></li>
    <li id="personal"><h6>Isi data Karya</h6></li>
    <li id="confirm"><h6>Publish</h6></li>
  </ul> <!-- fieldsets -->
</div>
<div class="row">
<?php if ($this->session->userdata('ROLE') != 1) { ?>
  <div class="col-md-4">
    <div class="alert alert-info shadow-sm">
      <small class="mb-0">Pilih salah satu kategori karya, untuk mulai menambahkan data karya. Anda dapat menambahkan kategori karya di: Pengaturan > Kategori, atau dapat meng klik <a href="<?php echo site_url('Pengaturan/Kategori');?>" class="text-primary text-none">link ini</a></small><br>
      <small class="mb-0">Anda dapat mendownload semua foto karya dalam bentuk RAR di: File Manager Karya, atau dapat meng klik <a href="<?php echo site_url('Browser');?>" target="_blank" class="text-primary text-none">link ini</a></small>
    </div>
  </div>
  <div class="col-md-8">
    <div class="row">
      <?php foreach ($kategori as $key) { ?>
      <div class="col-md-3 mb-3">
        <a href="<?php echo site_url('UploadKarya/'.$key->ID_KATEGORI);?>" class="c--card shadow-sm text-none">
          <div class="card--header"><?= $key->KATEGORI;?></div>
          <div class="card--main">
            <i class="material-icons">backup_table</i>
            <div class="main--description">Upload karya kategori ini</div>
          </div>
        </a>
      </div>
      <?php }?>
    
<?php }else { ?>
  <div class="col">
    <div class="row">
      <?php foreach ($kategori as $key) { ?>
      <div class="col-md-3 mb-3">
        <a href="<?php echo site_url('UploadKarya/'.$key->ID_KATEGORI);?>" class="c--card shadow-sm text-none">
          <div class="card--header"><?= $key->KATEGORI;?></div>
          <div class="card--main">
            <i class="material-icons">backup_table</i>
            <div class="main--description">Upload karya kategori ini</div>
          </div>
        </a>
      </div>
      <?php }?>
  <?php } ?>
    </div>
  </div>
</div>
