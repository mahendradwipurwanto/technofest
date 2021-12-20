<div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-2">
  <div class="mr-4 mb-3 mb-sm-0">
    <h1 class="mb-0">Lihat karya</h1>
  </div>
  <div>
    <a href="<?php echo site_url('UploadKarya/'.$karya->ID_KATEGORI);?>" class="btn btn-orange btn-sm shadow-sm float-right mr-2">Upload Karya</a>
    <a href="<?php echo $this->agent->referrer()?>" class="btn btn-primary btn-sm shadow-sm float-right mr-2" ><i class="fa fa-step-backward fa-sm mr-1"></i> Kembali</a>
  </div>
</div>
<hr>

<div class="row">
  <div class="col-md-12">
    <div class="card shadow-sm">
      <div class="card-header">
        Detail Karya <b class="text-info"><?= $karya->JUDUL;?></b>
      </div>
      <div class="card-body row">
        <div class="col-md-6 col-xs-12">
          <div class="row mb-2">
            <div class="col-3">
              <label class="title font-weight-bold">JUDUL</label>
            </div>
            <div class="col-9">
              <span class="text-muted"><?= $karya->JUDUL;?></span>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-3">
              <label class="title font-weight-bold">KATEGORI</label>
            </div>
            <div class="col-9">
              <span class="text-muted"><span class="badge <?php $a = rand(1, 4); if($a == 1){ echo 'badge-info';}elseif($a == 2){echo 'badge-primary'; }elseif($a == 3){echo 'badge-warning';}else{ echo 'badge-orange'; }?>"><?= $karya->KATEGORI;?></span></span>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-3">
              <label class="title font-weight-bold">PRODI</label>
            </div>
            <div class="col-9">
              <span class="text-muted"><span class="badge <?php $a = rand(1, 4); if($a == 1){ echo 'badge-primary';}elseif($a == 2){echo 'badge-info'; }elseif($a == 3){echo 'badge-warning';}else{ echo 'badge-orange'; }?>"><?= $karya->PRODI;?></span></span>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-3">
              <label class="title font-weight-bold">DESKRIPSI</label>
            </div>
            <div class="col-9">
              <span class="text-muted"><?= $karya->DESKRIPSI;?></span>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-3">
              <label class="title font-weight-bold">DOSPEM</label>
            </div>
            <div class="col-9">
              <span class="text-muted"><?= $karya->DOSPEM;?></span>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-3">
              <label class="title font-weight-bold">LINK GITHUB</label>
            </div>
            <div class="col-9">
              <a href="<?= $karya->LINK_GITHUB;?>" target="_blank" class="btn btn-danger btn-sm"><?= $karya->LINK_GITHUB;?></a>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-3">
              <label class="title font-weight-bold">LINK VIDEO</label>
            </div>
            <div class="col-9">
              <a href="<?= $karya->LINK_VIDEO;?>" target="_blank" class="btn btn-danger btn-sm"><?= $karya->LINK_VIDEO;?></a>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-3">
              <label class="title font-weight-bold">LINK DEMO</label>
            </div>
            <div class="col-9">
              <a href="<?= $karya->LINK_DEMO;?>" target="_blank" class="btn btn-success btn-sm"><?= $karya->LINK_DEMO;?></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xs-12">
          <?php
          $no = 1;
          $anggota = $controller->karya_model->get_anggota($karya->ID_KARYA);
          foreach ($anggota as $value) { ?>
            <div class="row mb-2">
              <div class="col-3">
                <label class="title font-weight-bold">Anggota <?= $no;?></label>
              </div>
              <div class="col-9">
                <span class="text-muted"><?= $value->NAMA;?></span> - <span class="text-dark"><?= $value->NRP;?></span>
              </div>
            </div>
            <?php $no++;}?>
          </div>
        </div>
        <div class="card-header">
          Foto Karya <small class="text-danger">Klik foto untuk memperbesar</small>
        </div>
        <div class="card-body">
          <div class="row">
            <?php if ($foto == false): ?>
              <h2 class="ml-4"><center>Tidak ada foto</center></h2>
            <?php else: ?>
              <?php foreach ($foto as $key): ?>
                <div class="col-md-3">
                  <img src="<?php echo base_url();?>berkas/karya/<?= $karya->FOLDER;?>/foto/<?= $key->FOTO;?>" data-toggle="modal" data-target="#lihat<?= $key->ID_FOTO;?>" alt="" style="width:100%; height: auto; border:1px solid #ddd; border-radius:4px; cursor:pointer;">
                </div>

                <!-- MODAL edit -->
                <div id="lihat<?= $key->ID_FOTO;?>" class="modal fade" role="dialog" tabindex="-1" >
                  <div class="modal-dialog" role="document">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header bg-info">
                        <h5 class="modal-title text-white">Foto <b><?= $key->FOTO;?></b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <!-- Modal body -->
                      <div class="modal-body">
                        <img src="<?php echo base_url();?>berkas/karya/<?= $karya->FOLDER;?>/foto/<?= $key->FOTO;?>" alt="" style="width:100%; height: auto; border:1px solid #ddd; border-radius:4px;">

                        <!-- Modal footer -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-light btn-sm" data-dismiss="modal">Batal</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
