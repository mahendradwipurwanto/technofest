<!-- Custom page header alternative example-->
<div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-2">
  <div class="mr-4 mb-1 mb-sm-0">
    <h1 class="mb-0">Pengaturan</h1>
  </div>
</div>
<hr>
<div class="row mb-4">
  <?php if ($this->session->userdata('ROLE') == 0) { ?>
  <div class="col-md-2">
    <a href="<?php echo site_url('Pengaturan/Semester');?>" class="c--card shadow text-none">
      <div class="card--header">SEMESTER</div>
      <div class="card--main">
        <i class="material-icons">card_membership</i>
        <div class="main--description">Atur Semester</div>
      </div>
    </a>
  </div>
  <div class="col-md-2">
    <a href="<?php echo site_url('Pengaturan/Website');?>" class="c--card shadow text-none">
      <div class="card--header">WEBSITE</div>
      <div class="card--main">
        <i class="material-icons">web</i>
        <div class="main--description">Atur data Website</div>
      </div>
    </a>
  </div>
  <?php }?>
  <div class="col-md-2">
    <a href="<?php echo site_url('Pengaturan/Kategori');?>" class="c--card shadow text-none">
      <div class="card--header">Kategori Karya</div>
      <div class="card--main">
        <i class="material-icons">backup_table</i>
        <div class="main--description">Atur kategori karya</div>
      </div>
    </a>
  </div>
  <?php if ($this->session->userdata('ROLE') == 0) { ?>
  <div class="col-md-2">
    <a href="<?php echo site_url('Pengaturan/Prodi');?>" class="c--card shadow text-none">
      <div class="card--header">PRODI</div>
      <div class="card--main">
        <i class="material-icons">backup_table</i>
        <div class="main--description">Atur daftar PRODI</div>
      </div>
    </a>
  </div>
  <?php }?>
</div>
