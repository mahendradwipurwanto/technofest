<div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-2">
  <div class="mr-4 mb-3 mb-sm-0">
    <h1 class="mb-0">Pilih kategori untuk melihat daftar karya</h1>
  </div>
</div>
<hr>

<div class="row mb-4">
  <div class="col<?php echo ($this->session->userdata('ROLE') != 1? '-md-8' : '' )?>"">
    <div class="row mb-4">
      <?php foreach ($kategori as $key) { ?>
      <div class="col-md-3">
        <a href="<?php echo site_url('DaftarKarya/'.$key->ID_KATEGORI);?>" class="c--card shadow text-none">
          <div class="card--header"><?= $key->KATEGORI;?></div>
          <div class="card--main">
            <h3 class="text-danger"><?= $controller->karya_model->cek_karya($key->ID_KATEGORI) ;?></h3>
            <div class="main--description">Lihat daftar karya</div>
          </div>
        </a>
      </div>
      <?php }?>
    </div>
  </div>
  <?php if ($this->session->userdata('ROLE') != 1) { ?>
    <div class="col-md-4">
      <div class="card card-info shadow-sm">
        <div class="card-header">
          Notifikasi
        </div>
        <div class="card-body">
          <small class="mb-0">Anda dapat menambahkan kategori karya di: Pengaturan > Kategori, atau dapat meng klik <a href="<?php echo site_url('Pengaturan/Kategori');?>" class="text-primary text-none">link ini</a></small><br>
          <small class="mb-0">Anda dapat mendownload semua foto karya dalam bentuk RAR di: File Manager Karya, atau dapat meng klik <a href="<?php echo site_url('Browser');?>" target="_blank" class="text-primary text-none">link ini</a></small>
        </div>
      </div>
    </div>
  <?php }?>
</div>
