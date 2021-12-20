<div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-2">
  <div class="mr-4 mb-3 mb-sm-0">
    <h1 class="mb-0">Data Agenda</h1>
  </div>
</div>
<hr>

<div class="row">
  <div class="col-md-9">
    <div class="card shadow-sm">
      <div class="card-header">Daftar Agenda
        <a href="<?php echo site_url('Agenda/Tambah');?>" class="btn btn-sm btn-primary float-right"> <i class="fa fa-plus fa-xs mr-2"></i> Tambah Agenda</a>
      </div>
      <div class="card-body">
        <table id="dataTable" class="table table-hover table-bordered" width="100%">
          <thead>
            <tr>
              <th>KODE</th>
              <th>Aksi</th>
              <th>Agenda</th>
              <th>Tanggal</th>
              <th>Waktu</th>
              <th>Open Register</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($agenda == FALSE) { echo "<tr><td colspan='7'><center>Belum ada data</center></td></tr>";}else{ $no = 1; foreach ($agenda as $key) { ?>
              <tr>
                <td><?= $key->ID_AGENDA;?></td>
                <td>
                  <a href="<?php echo site_url('data-agenda/'.$key->ID_AGENDA);?>" class="btn btn-sm btn-orange" target="_blank"><i class="fa fa-eye fa-sm"></i></a>
                  <a href="<?php echo site_url('Agenda/Edit/'.$key->ID_AGENDA);?>" class="btn btn-sm btn-info"><i class="fa fa-edit fa-sm"></i></a>
                  <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus<?= $key->ID_AGENDA;?>"><i class="fa fa-trash fa-sm"></i></button>
                </td>
                <td>
                  <?= $key->JUDUL;?>
                  <?php if ($key->DRAFT == 1) { echo " - <i class='text-muted'>Draft</i>"; };?>
                </td>
                <td><?= date("d F Y",strtotime($key->TANGGAL));?></td>
                <td><?= $key->WAKTU;?></td>
                <td>
                  <?php if($key->REGISTER == TRUE){?>
                    <span class="badge badge-primary">open</span>
                  <?php }else { ?>
                    <span class="badge badge-danger">closed</span>
                  <?php }?>
                </td>
                <td><?= substr(strip_tags($key->KETERANGAN), 0, 50);?>...</td>
              </tr>

              <!-- MODAL hapus -->
              <div id="hapus<?= $key->ID_AGENDA;?>" class="modal fade" role="dialog" tabindex="-1" >
                <div class="modal-dialog" role="document">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header bg-danger">
                      <h5 class="modal-title text-white">Hapus data Agenda <b></b></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                      <form class="form-horizontal" action="<?php echo site_url('Agenda/hapus_agenda');?>" method="post">
                        <input type="hidden" name="ID_AGENDA" value="<?= $key->ID_AGENDA;?>">
                        <input type="hidden" name="JUDUL" value="<?= $key->JUDUL;?>">

                        <p>Apakah anda yakin akan menghapus data AGENDA  <b><?= $key->JUDUL;?></b> </p>

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
    <div class="col-md-3">
      <div class="alert alert-primary">
        <p>Sementara pendaftaran hanya berupa link dari google form atau zoom register.</p>
      </div>
    </div>
  </div>
