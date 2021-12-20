<div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-2">
  <div class="mr-4 mb-3 mb-sm-0">
    <h1 class="mb-0">Data Pembicara</h1>
  </div>
</div>
<hr>
<div id="tambah" class="modal fade" role="dialog" tabindex="-1" >
  <div class="modal-dialog" role="document">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white">Tambah data <b>Pembicara</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form class="form-horizontal" action="<?php echo site_url('Pembicara/tambah');?>" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label class="title">Nama Pembicara <small class="text-danger">*</small> </label>
            <input type="text" name="NAMA" maxlength="500" class="form-control" placeholder="Nama Pembicara" required>
            <small class="text-muted">Max 30 karakter</small>
          </div>

          <div class="form-group">
            <label class="title">Foto Pembicara <small class="text-danger">*</small> </label>
            <input type="file" name="FOTO" class="form-control" placeholder="Foto Pembicara" required>
            <small class="text-muted">Max 2Mb, Max 1 File</small>
          </div>

          <div class="form-group">
            <label class="title">Major Pembicara <small class="text-danger">*</small> </label>
            <input type="text" name="MAJOR" class="form-control" placeholder="Major Pembicara" required>
            <small class="text-muted">Ex: Senior Web Develepor</small>
          </div>

          <div class="form-group">
            <label class="title">Keterangan</label>
            <textarea type="text" name="KETERANGAN" class="form-control" rows="3" placeholder="Isikan keterangan pembicara"></textarea>
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
      <div class="card-header">Daftar Pembicara
        <button type="button" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#tambah"> <i class="fa fa-plus fa-xs mr-2"></i> Tambah Pembicara</button>
      </div>
      <div class="card-body">
        <table id="dataTable" class="table table-hover table-bordered" width="100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Aksi</th>
              <th>Nama</th>
              <th>Foto</th>
              <th>Major</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($pembicara == FALSE) { echo "<tr><td colspan='6'><center>Belum ada data</center></td></tr>";}else{ $no = 1; foreach ($pembicara as $key) { ?>
              <tr>
                <td><?= $no;?></td>
                <td>
                  <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#edit<?= $key->ID_PEMBICARA;?>"><i class="fa fa-edit fa-sm"></i></button>
                  <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus<?= $key->ID_PEMBICARA;?>"><i class="fa fa-trash fa-sm"></i></button>
                </td>
                <td><?= $key->NAMA;?></td>
                <td> <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#foto<?= $key->ID_PEMBICARA;?>">foto pembicara</button> </td>
                <td><?= $key->MAJOR;?></td>
                <td><?= $key->KETERANGAN;?></td>
              </tr>

              <!-- MODAL edit -->
              <div id="edit<?= $key->ID_PEMBICARA;?>" class="modal fade" role="dialog" tabindex="-1" >
                <div class="modal-dialog" role="document">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header bg-info">
                      <h5 class="modal-title text-white">Ubah data Pembicara <b><?= $key->NAMA;?></b></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                      <form class="form-horizontal" action="<?php echo site_url('Pembicara/edit');?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="ID_PEMBICARA" value="<?= $key->ID_PEMBICARA;?>">

                        <div class="form-group">
                          <label class="title">Nama Pembicara <small class="text-danger">*</small></label>
                          <input type="text" name="NAMA" maxlength="30" class="form-control" value="<?= $key->NAMA;?>" required>
                          <small class="text-muted">Max 30 karakter</small>
                        </div>

                        <div class="form-group">
                          <label class="title">Foto Pembicara <small class="text-danger">*</small> </label>
                          <input type="file" name="FOTO" class="form-control" value="<?= $key->FOTO;?>" required>
                          <small class="text-muted">Max 2Mb, Max 1 File</small>
                        </div>

                        <div class="form-group">
                          <label class="title">Major Pembicara <small class="text-danger">*</small> </label>
                          <input type="text" name="MAJOR" class="form-control" value="<?= $key->MAJOR;?>" required>
                          <small class="text-muted">Ex: Senior Web Develepor</small>
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
              <div id="hapus<?= $key->ID_PEMBICARA;?>" class="modal fade" role="dialog" tabindex="-1" >
                <div class="modal-dialog" role="document">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header bg-danger">
                      <h5 class="modal-title text-white">Hapus data Pembicara <b><?= $key->NAMA;?></b></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                      <form class="form-horizontal" action="<?php echo site_url('Pembicara/hapus');?>" method="post">
                        <input type="hidden" name="ID_PEMBICARA" value="<?= $key->ID_PEMBICARA;?>">
                        <input type="hidden" name="NAMA" value="<?= $key->NAMA;?>">

                        <p>Apakah anda yakin akan menghapus data Prodi  <b><?= $key->NAMA;?></b> </p>

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

              <!-- MODAL hapus -->
              <div id="foto<?= $key->ID_PEMBICARA;?>" class="modal fade" role="dialog" tabindex="-1" >
                <div class="modal-dialog" role="document">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header bg-danger">
                      <h5 class="modal-title text-white">Hapus data Pembicara <b><?= $key->NAMA;?></b></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">

                        <img src="<?= base_url() ?>berkas/karya/01pembicara/<?= $key->FOTO ?>" alt="" style="width: 100%; height: auto">

                        <!-- Modal footer -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-light btn-sm" data-dismiss="modal">Tutup</button>
                        </div>
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
        <p class="mb-0">Harap atur data prodi terlebih dahulu, sebelum menambahkan karya.</p>
      </div>
    </div>
  </div>
