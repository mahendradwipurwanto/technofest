<div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-2">
  <div class="mr-4 mb-3 mb-sm-0">
    <h1 class="mb-0">Data Semester</h1>
  </div>
</div>
<hr>
<div id="tambah" class="modal fade" role="dialog" tabindex="-1" >
  <div class="modal-dialog" role="document">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white">Tambah data <b>Semester</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form class="form-horizontal" action="<?php echo site_url('Pengaturan/tambah_semester');?>" method="post">

          <div class="form-group">
            <label class="title">Nama Semester <small class="text-danger">*</small> </label>
            <input type="text" name="SEMESTER" maxlength="30" class="form-control" placeholder="Semester" required>
            <small class="text-muted">Max 30 karakter</small>
          </div>

          <div class="form-group">
            <label class="title">Status Semester <small class="text-danger">*</small> </label>
            <div class="onoffswitch">
              <input type="checkbox" name="STATUS" class="onoffswitch-checkbox" id="SEMESTERs" tabindex="0">
              <label class="onoffswitch-label" for="SEMESTERs">
                <span class="onoffswitch-inner"></span>
                <span class="onoffswitch-switch"></span>
              </label>
            </div>
          </div>

          <div class="form-group">
            <label class="title">Keterangan</label>
            <textarea type="text" name="KETERANGAN" class="form-control" rows="3" placeholder="Isikan keterangan semester"></textarea>
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
      <div class="card-header">Daftar Semester
        <button type="button" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#tambah"> <i class="fa fa-plus fa-xs mr-2"></i> Tambah Semester</button>
      </div>
      <div class="card-body">
        <table id="dataTable" class="table table-hover table-bordered" width="100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Aksi</th>
              <th>Semester</th>
              <th>Status</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($semester == FALSE) { echo "<tr><td colspan='5'><center>Belum ada data</center></td></tr>";}else{ $no = 1; foreach ($semester as $key) { ?>
              <tr>
                <td><?= $no;?></td>
                <td>
                  <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#status<?= $key->ID_SEMESTER;?>"><i class="fa fa-key fa-sm"></i></button>
                  <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#edit<?= $key->ID_SEMESTER;?>"><i class="fa fa-edit fa-sm"></i></button>
                  <?php if($controller->pengaturan_model->sem_count($key->ID_SEMESTER) > 0){ ?>
                    <button type="button" class="btn btn-sm btn-light" data-toggle="modal" data-target="#error"><i class="fa fa-trash fa-sm"></i></button>
                  <?php }else{?>
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus<?= $key->ID_SEMESTER;?>"><i class="fa fa-trash fa-sm"></i></button>
                  <?php }?>
                </td>
                <td><span class="badge <?php $a = rand(1, 4); if($a == 1){ echo 'badge-primary';}elseif($a == 2){echo 'badge-info'; }elseif($a == 3){echo 'badge-warning';}else{ echo 'badge-orange'; }?>"><?= $key->SEMESTER;?></span></td>
                <td><?= ($key->STATUS == 1 ? '<span class="badge badge-success">Aktif</span>' : '<span class="badge badge-light">Non - Aktif</span>');?></td>
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
                      <p>Anda tidak dapat menghapus data Semester, yang masih digunakan/sedang aktif</p>

                      <button type="button" class="btn btn-primary btn-sm float-right" data-dismiss="modal">Ok, Mengerti</button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- MODAL edit -->
              <div id="status<?= $key->ID_SEMESTER;?>" class="modal fade" role="dialog" tabindex="-1" >
                <div class="modal-dialog" role="document">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header bg-success">
                      <h5 class="modal-title text-white">Ubah status Semester <b><?= $key->SEMESTER;?></b></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                      <form class="form-horizontal" action="<?php echo site_url('Pengaturan/semester_aktif');?>" method="post">
                        <input type="hidden" name="ID_SEMESTER" value="<?= $key->ID_SEMESTER;?>">
                          <input type="hidden" name="SEMESTER" value="<?= $key->SEMESTER;?>">

                        <div class="form-group">
                          <label class="title">STATUS Semester</label>
                          <div class="onoffswitch">
                            <input type="checkbox" name="STATUS" class="onoffswitch-checkbox" id="SEMESTER<?= $no;?>" tabindex="0" <?= ($key->STATUS == 1) ? "checked" : "";?>>
                            <label class="onoffswitch-label" for="SEMESTER<?= $no;?>">
                              <span class="onoffswitch-inner"></span>
                              <span class="onoffswitch-switch"></span>
                            </label>
                          </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-light btn-sm" data-dismiss="modal">Batal</button>
                          <button type="submit" class="btn btn-success btn-sm">Ubah status</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

              <!-- MODAL edit -->
              <div id="edit<?= $key->ID_SEMESTER;?>" class="modal fade" role="dialog" tabindex="-1" >
                <div class="modal-dialog" role="document">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header bg-info">
                      <h5 class="modal-title text-white">Ubah data Semester <b><?= $key->SEMESTER;?></b></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                      <form class="form-horizontal" action="<?php echo site_url('Pengaturan/ubah_semester');?>" method="post">
                        <input type="hidden" name="ID_SEMESTER" value="<?= $key->ID_SEMESTER;?>">

                        <div class="form-group">
                          <label class="title">Nama Semester <small class="text-danger">*</small></label>
                          <input type="text" name="SEMESTER" maxlength="30" class="form-control" value="<?= $key->SEMESTER;?>" required>
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
              <div id="hapus<?= $key->ID_SEMESTER;?>" class="modal fade" role="dialog" tabindex="-1" >
                <div class="modal-dialog" role="document">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header bg-danger">
                      <h5 class="modal-title text-white">Hapus data Semester <b></b></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                      <form class="form-horizontal" action="<?php echo site_url('Pengaturan/hapus_semester');?>" method="post">
                        <input type="hidden" name="ID_SEMESTER" value="<?= $key->ID_SEMESTER;?>">
                        <input type="hidden" name="SEMESTER" value="<?= $key->SEMESTER;?>">

                        <p>Apakah anda yakin akan menghapus data Semester  <b><?= $key->SEMESTER;?></b> </p>

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
        <p class="mb-0">Harap atur data semester terlebih dahulu, sebelum melakukan segala aktifitas. PASTIKAN HANYA ADA 1 SEMESTER AKTIF.</p>
      </div>
    </div>
  </div>
