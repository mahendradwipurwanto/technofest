<div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-2">
  <div class="mr-4 mb-3 mb-sm-0">
    <h1 class="mb-0">Data Kategori</h1>
  </div>
</div>
<hr>
<div id="tambah" class="modal fade" role="dialog" tabindex="-1" >
  <div class="modal-dialog" role="document">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white">Tambah data <b>Kategori</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form class="form-horizontal" action="<?php echo site_url('Pengaturan/tambah_kategori');?>" method="post">

          <div class="form-group">
            <label class="title">Semester</label>
            <label class="title">SEMESTER <small class="text-danger">*</small> </label>
            <input type="hidden" class="form-control" name="ID_SEMESTER" maxlength="50" value="<?= $ID_SEM;?>" required>
            <input type="text" class="form-control" value="<?= $semester_aktif;?>" required readonly>
            <small class="text-muted">Ubah semester aktif di pengaturan.</small>
          </div>

          <div class="form-group">
            <label class="title">Nama Kategori <small class="text-danger">*</small> </label>
            <input type="text" name="KATEGORI" maxlength="30" class="form-control" placeholder="Kategori" required>
            <small class="text-muted">Max 30 karakter</small>
          </div>

          <div class="form-group">
            <label class="title">Keterangan</label>
            <textarea type="text" name="KETERANGAN" class="form-control" rows="3" placeholder="Isikan keterangan kategori"></textarea>
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
      <div class="card-header">Daftar Kategori
        <button type="button" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#tambah"> <i class="fa fa-plus fa-xs mr-2"></i> Tambah Kategori</button>
      </div>
      <div class="card-body">
        <table id="dataTable" class="table table-hover table-bordered" width="100%">
          <thead>
            <tr>
              <th>KODE</th>
              <th>Aksi</th>
              <th>Kategori</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($kategori == FALSE) { echo "<tr><td colspan='5'><center>Belum ada data</center></td></tr>";}else{ $no = 1; foreach ($kategori as $key) { ?>
              <tr>
                <td><?= $key->ID_KATEGORI;?></td>
                <td>
                  <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#edit<?= $key->ID_KATEGORI;?>"><i class="fa fa-edit fa-sm"></i></button>
                  <?php if($controller->pengaturan_model->kat_count($key->ID_KATEGORI) > 0){ ?>
                    <button type="button" class="btn btn-sm btn-light" data-toggle="modal" data-target="#error"><i class="fa fa-trash fa-sm"></i></button>
                  <?php }else{?>
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus<?= $key->ID_KATEGORI;?>"><i class="fa fa-trash fa-sm"></i></button>
                  <?php }?>
                </td>
                <td><?= $key->KATEGORI;?></td>
                <td><?= $key->KETERANGAN;?></td>
              </tr>

              <!-- MODAL error -->
              <div id="error" class="modal fade" role="dialog" tabindex="-1" >
                <div class="modal-dialog" role="document">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Opps...</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                      <p>Anda tidak dapat menghapus data Kategori, yang masih digunakan pada daftar karya</p>

                      <button type="button" class="btn btn-primary btn-sm float-right" data-dismiss="modal">Ok, Mengerti</button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- MODAL edit -->
              <div id="edit<?= $key->ID_KATEGORI;?>" class="modal fade" role="dialog" tabindex="-1" >
                <div class="modal-dialog" role="document">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header bg-info">
                      <h5 class="modal-title text-white">Ubah data Kategori <b><?= $key->KATEGORI;?></b></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                      <form class="form-horizontal" action="<?php echo site_url('Pengaturan/ubah_kategori');?>" method="post">
                        <input type="hidden" name="ID_KATEGORI" value="<?= $key->ID_KATEGORI;?>">

                        <div class="form-group">
                          <label class="title">SEMESTER <small class="text-danger">*</small> </label>
                          <input type="hidden" class="form-control" name="ID_SEMESTER" maxlength="50" value="<?= $ID_SEM;?>" required>
                          <input type="text" class="form-control" value="<?= $semester_aktif;?>" required readonly>
                          <small class="text-muted">Ubah semester aktif di pengaturan.</small>
                        </div>

                        <div class="form-group">
                          <label class="title">Nama Kategori <small class="text-danger">*</small></label>
                          <input type="text" name="KATEGORI" maxlength="30" class="form-control" value="<?= $key->KATEGORI;?>" required>
                          <small class="text-muted">Max 30 karakter</small>
                        </div>

                        <div class="form-group">
                          <label class="title">Keterangan</label>
                          <textarea type="text" name="KETERANGAN" class="form-control" rows="3"><?= $key->KETERANGAN;?></textarea>
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
              <div id="hapus<?= $key->ID_KATEGORI;?>" class="modal fade" role="dialog" tabindex="-1" >
                <div class="modal-dialog" role="document">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header bg-danger">
                      <h5 class="modal-title text-white">Hapus data Kategori <b></b></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                      <form class="form-horizontal" action="<?php echo site_url('Pengaturan/hapus_kategori');?>" method="post">
                        <input type="hidden" name="ID_KATEGORI" value="<?= $key->ID_KATEGORI;?>">
                        <input type="hidden" name="KATEGORI" value="<?= $key->KATEGORI;?>">

                        <p>Apakah anda yakin akan menghapus data Kategori  <b><?= $key->KATEGORI;?></b> </p>

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
        <p class="mb-0">Harap atur data kategori terlebih dahulu, setiap kategori akan memiliki menu khusus pada Karya.</p>
      </div>
    </div>
  </div>
