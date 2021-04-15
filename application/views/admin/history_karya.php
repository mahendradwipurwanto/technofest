<div class="row">
  <div class="col<?php echo ($this->session->userdata('ROLE') != 1? '-md-8' : '' )?>">
    <div class="card shadow-sm">
      <div class="card-header">Daftar Semester
      </div>
      <div class="card-body">
        <table id="dataTable" class="table table-hover table-bordered" width="100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Aksi</th>
              <th>Semester</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($semester == FALSE) { echo "<tr><td colspan='5'><center>Belum ada data</center></td></tr>";}else{ $no = 1; foreach ($semester as $key) { ?>
              <tr>
                <td><?= $no;?></td>
                <td>
                  <a href="<?= site_url('ListKarya/'.$key->ID_SEMESTER);?>" class="btn btn-light btn-sm">View list</a>
                </td>
                <td><span class="badge <?php $a = rand(1, 4); if($a == 1){ echo 'badge-primary';}elseif($a == 2){echo 'badge-info'; }elseif($a == 3){echo 'badge-warning';}else{ echo 'badge-orange'; }?>"><?= $key->SEMESTER;?></span></td>
                <td><?= ($key->STATUS == 1 ? '<span class="badge badge-success">Aktif</span>' : '<span class="badge badge-light">Non - Aktif</span>');?></td>
              </tr>
              <?php $no++;}};?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <?php if ($this->session->userdata('ROLE') != 1) { ?>
    <div class="col-md-4">
      <div class="alert alert-info shadow-sm">
        <small class="mb-0">Anda dapat menambahkan dan mengatur status semester di: Pengaturan > Semester.</small><br>
        <small class="mb-0">Anda dapat menambahkan kategori karya di: Pengaturan > Kategori, atau dapat meng klik <a href="<?php echo site_url('Pengaturan/Kategori');?>" class="text-primary text-none">link ini</a></small>
      </div>
    </div>
    <?php }?>
  </div>
