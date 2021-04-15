<div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-2">
  <div class="mr-4 mb-3 mb-sm-0">
    <h1 class="mb-0">Daftar karya</h1>
  </div>
  <div>
    <a href="<?php echo site_url('UploadKarya/'.$kategori->ID_KATEGORI);?>" target="_blank" class="btn btn-orange btn-sm shadow-sm float-right mr-2">Upload Karya</a>
    <a href="<?php echo site_url('Karya');?>" class="btn btn-primary btn-sm shadow-sm float-right mr-2" ><i class="fa fa-step-backward fa-sm mr-1"></i> Kembali</a>
  </div>
</div>
<hr>

<div class="row">
  <div class="col-md-12">
    <div class="card shadow-sm">
      <!-- <form action="<?php echo site_url('Karya/hapus_karya_pilih/'.$kategori->ID_KATEGORI); ?>" method="post" enctype="multipart/form-data" > -->
        <div class="card-header">Daftar Karya - Bidang <?= $kategori->KATEGORI;?>
          <?php if ($this->session->userdata('ROLE') == 0) { ?>
            <input id="submit" name="submit" type="button" data-toggle="modal" data-target="#sec" class="btn btn-danger btn-sm float-right" value="Delete Selected Data(s)" />
          <?php }?>
        </div>
        <div class="card-body">
          <table id="dataTable" class="table table-hover table-bordered" width="100%">
            <thead>
              <tr>
                <th><input type="checkbox" id="checkAll" name="checkAll"></th>
                <th>KODE</th>
                <th>Aksi</th>
                <th>JUDUL</th>
                <th>PRODI</th>
                <th>ANGGOTA</th>
                <th>DOSPEM</th>
                <th>LINK VIDEO</th>
                <th>LINK DEMO</th>
                <th>STATUS</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($karya == FALSE) { echo "<tr><td colspan='7'><center>Belum ada data</center></td></tr>";}else{ $no = 1; foreach ($karya as $key) { ?>
                <tr>
                  <td><input type="checkbox" name="msg[]" value="<?php echo $key->ID_KARYA; ?>"/></td>
                <!-- </form> -->
                <td><?= $key->ID_KARYA;?></td>
                <td>
                  <?php if($key->IS_VERIF == true){?>
                    <a href="<?php echo site_url('DetailKarya/'.$key->ID_KARYA);?>" target="_blank" class="btn btn-sm btn-secondary" style="font-size: 12px !important">live preview</a>
                  <?php } else{?>
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#verif<?= $key->ID_KARYA;?>"><i class="fa fa-check fa-sm"></i></button>
                  <?php }?>
                  
                  <a href="<?php echo site_url('LihatKarya/'.$key->ID_KARYA);?>" class="btn btn-sm btn-light"><i class="fa fa-eye fa-sm"></i></a>
                  <?php if ($this->session->userdata('ROLE') != 1) { ?>
                    <a href="<?php echo site_url('EditKarya/'.$key->ID_KARYA);?>" class="btn btn-sm btn-info"><i class="fa fa-edit fa-sm"></i></a>
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus<?= $key->ID_KARYA;?>"><i class="fa fa-trash fa-sm"></i></button>
                  <?php }?>
                </td>
                <td><?= $key->JUDUL;?></td>
                <td><span class="badge <?php $a = rand(1, 4); if($a == 1){ echo 'badge-primary';}elseif($a == 2){echo 'badge-info'; }elseif($a == 3){echo 'badge-warning';}else{ echo 'badge-orange'; }?>"><?= $key->PRODI;?></span></td>
                <td><button type="button" class="btn btn-sm btn-orange" data-toggle="modal" data-target="#anggota<?= $key->ID_KARYA;?>">Lihat anggota</button></td>
                <td><?= $key->DOSPEM;?></td>
                <td><a href="<?= $key->LINK_VIDEO;?>" class="btn btn-danger btn-sm" target="_blank"><?= $key->LINK_VIDEO;?></a></td>
                <td><a href="<?= $key->LINK_DEMO;?>" class="btn btn-success btn-sm" target="_blank"><?= $key->LINK_DEMO;?></a></td>
                <td><span class="badge <?php echo ($key->IS_VERIF == true? 'badge-success' : 'badge-warning')?>"><?php echo ($key->IS_VERIF == true? 'Terverifikasi' : 'Belum Terverif')?></span></td>
              </tr>
              <!-- MODAL hapus -->
              <div id="anggota<?= $key->ID_KARYA;?>" class="modal fade" role="dialog" tabindex="-1" >
                <div class="modal-dialog modal-lg" role="document">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-dark">Data Anggota <b><?= substr($key->JUDUL, 0, 15);?>...</b></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                      <?php $nomor = 1;
                      $anggota = $controller->karya_model->get_anggota($key->ID_KARYA);
                      if($anggota == FALSE){ echo "<center>Belum ada anggota</center>";
                      }else{ foreach($anggota as $value) { ?>
                        <div class="row mb-0">
                          <div class="col-md-3">
                            <span class="text-muted">Anggota <?= $nomor;?></span>
                          </div>
                          <div class="col-md-9">:
                            <span class="text-muted text-italix"><?= $value->NAMA;?></span> - <?= $value->NRP;?>
                          </div>
                        </div>
                        <?php  $nomor++;}}?>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-light btn-sm" data-dismiss="modal">Tutup</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- MODAL hapus -->
                <div id="hapus<?= $key->ID_KARYA;?>" class="modal fade" role="dialog" tabindex="-1" >
                  <div class="modal-dialog" role="document">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header bg-danger">
                        <h5 class="modal-title text-white">Hapus data karya - <b><?= substr($key->JUDUL, 0, 15);?>...</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <!-- Modal body -->
                      <div class="modal-body">
                        <form class="form-horizontal" action="<?php echo site_url('Karya/Hapus/'.$kategori->ID_KATEGORI);?>" method="post">
                          <input type="hidden" name="ID_KARYA" value="<?= $key->ID_KARYA;?>">
                          <input type="hidden" name="JUDUL" value="<?= $key->JUDUL;?>">

                          <p>Apakah anda yakin akan menghapus data Karya  <b><?= $key->JUDUL;?></b> </p>

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
                <!-- MODAL verif -->
                <div id="verif<?= $key->ID_KARYA;?>" class="modal fade" role="dialog" tabindex="-1" >
                  <div class="modal-dialog" role="document">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header bg-success">
                        <h5 class="modal-title text-white">Verifikasi Karya - <b><?= substr($key->JUDUL, 0, 15);?>...</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <!-- Modal body -->
                      <div class="modal-body">
                        <form class="form-horizontal" action="<?php echo site_url('Karya/Verif/'.$kategori->ID_KATEGORI);?>" method="post">
                          <input type="hidden" name="ID_KARYA" value="<?= $key->ID_KARYA;?>">
                          <input type="hidden" name="JUDUL" value="<?= $key->JUDUL;?>">

                          <p>Apakah anda yakin akan verifikasi karya  <b><?= $key->JUDUL;?></b> </p>

                          <!-- Modal footer -->
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light btn-sm" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-success btn-sm">Verif data</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <?php $no++;}};?>

                <!-- MODAL hapus -->
                <div id="sec" class="modal fade" role="dialog" tabindex="-1" >
                  <div class="modal-dialog modal-lg align-middle" role="document">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header bg-info">
                        <h5 class="modal-title text-white">Hapus data terpilih</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <!-- Modal body -->
                      <div class="modal-body">

                          <p>Untuk alasan keamanan. Fitur ini di <i>disabled</i>, anda dapat mengakifkan fitur ini dengan meng-kontak developer. </p>

                          <!-- Modal footer -->
                          <div class="modal-footer">
                            <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Ok</button>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function(){
      $('#submit').submit(function(e){
        if(!confirm("Confirm Delete?")){
          e.preventDefault();
        }
      });
    });
    $(document).ready(function() {
      $("input[name='checkAll']").click(function() {
        var checked = $(this).attr("checked");
        $(".table tr td input:checkbox").attr("checked", checked);
      });
    });
    $("#checkAll").click(function(){
      $('input:checkbox').not(this).prop('checked', this.checked);
    });
    </script>
