<div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-2">
  <div class="mr-4 mb-3 mb-sm-0">
    <h1 class="mb-0">Data Koordinator</h1>
  </div>
</div>
<hr>
<div id="tambah" class="modal fade" role="dialog" tabindex="-1" >
  <div class="modal-dialog" role="document">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white">Tambah data <b>Koordinator</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form class="form-horizontal" action="<?php echo site_url('Dashboard/tambah_koordinator');?>" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label class="title">Nama Koordinator <small class="text-danger">*</small> </label>
            <input type="text" name="NAMA" maxlength="30" class="form-control" placeholder="Nama Koordinator" required>
            <small class="text-muted">Max 30 karakter</small>
          </div>

          <div class="form-group">
            <label class="title">Email Koordinator <small class="text-danger">*</small> </label>
            <input type="text" name="EMAIL" class="form-control" placeholder="Email Koordinator" required>
          </div>

          <div class="form-group">
            <label class="title">Password Koordinator <small class="text-danger">*</small> </label>
            <input type="password" name="PASSWORD" class="form-control" placeholder="Masukan password" required>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-light btn-sm" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary btn-sm">Tambahkan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-8">
    <div class="card shadow-sm">
      <div class="card-header">Daftar Koordinator
        <button type="button" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#tambah"> <i class="fa fa-plus fa-xs mr-2"></i> Tambah Koordinator</button>
      </div>
      <div class="card-body">
        <table id="dataTable" class="table table-hover table-bordered" width="100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Aksi</th>
              <th>Nama</th>
              <th>EMAIL</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($Koordinator == FALSE) { echo "<tr><td colspan='6'><center>Belum ada data</center></td></tr>";}else{ $no = 1; foreach ($Koordinator as $key) { ?>
              <tr>
                <td><?= $no;?></td>
                <td>
                  <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#edit<?= $key->KODE_USER;?>"><i class="fa fa-edit fa-sm"></i></button>
                  <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus<?= $key->KODE_USER;?>"><i class="fa fa-trash fa-sm"></i></button>
                </td>
                <td><?= $key->NAMA;?></td>
                <td><?= $key->EMAIL;?></td>
              </tr>

              <!-- MODAL edit -->
              <div id="edit<?= $key->KODE_USER;?>" class="modal fade" role="dialog" tabindex="-1" >
                <div class="modal-dialog" role="document">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header bg-info">
                      <h5 class="modal-title text-white">Ubah data Koordinator <b><?= $key->NAMA;?></b></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                      <form class="form-horizontal" action="<?php echo site_url('Dashboard/ubah_koordinator');?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="KODE_USER" value="<?= $key->KODE_USER;?>">

                        <div class="form-group">
                          <label class="title">Nama Koordinator <small class="text-danger">*</small></label>
                          <input type="text" name="NAMA" maxlength="30" class="form-control" value="<?= $key->NAMA;?>" required>
                          <small class="text-muted">Max 30 karakter</small>
                        </div>

                        <div class="form-group">
                          <label class="title">Email Koordinator <small class="text-danger">*</small> </label>
                          <input type="text" name="EMAIL" class="form-control" value="<?= $key->EMAIL;?>" required>
                        </div>

                        <div class="form-group">
                          <label class="title">Password Koordinator <small class="text-danger">*</small> </label>
                          <input type="password" name="PASSWORD" class="form-control" placeholder="Masukan password baru">
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-light btn-sm" data-dismiss="modal">Batal</button>
                          <button type="submit" class="btn btn-info btn-sm">Ubah data</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

              <!-- MODAL hapus -->
              <div id="hapus<?= $key->KODE_USER;?>" class="modal fade" role="dialog" tabindex="-1" >
                <div class="modal-dialog" role="document">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header bg-danger">
                      <h5 class="modal-title text-white">Hapus data Koordinator <b><?= $key->NAMA;?></b></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                      <form class="form-horizontal" action="<?php echo site_url('Dashboard/hapus_koordinator');?>" method="post">
                        <input type="hidden" name="KODE_USER" value="<?= $key->KODE_USER;?>">
                        <input type="hidden" name="NAMA" value="<?= $key->NAMA;?>">

                        <p>Apakah anda yakin akan menghapus data Koordinator  <b><?= $key->NAMA;?></b> </p>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-light btn-sm" data-dismiss="modal">Batal</button>
                          <button type="submit" class="btn btn-danger btn-sm">Hapus data</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <?php $no++;}};?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="alert alert-info shadow-sm">
        <p class="mb-0">Atur akun Koordinator disini.</p>
      </div>
    </div>
  </div>
