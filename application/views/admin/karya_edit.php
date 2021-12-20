<?php $this->load->view('admin/header_karya');?>

<div id="msform">
  <ul id="progressbar">
    <li class="active" id="account"><h6>Pilih Karya</h6></li>
    <li class="active" id="personal"><h6>Edit data Karya</h6></li>
    <li id="confirm"><h6>Re-Publish</h6></li>
  </ul> <!-- fieldsets -->
</div>
<div class="row">
  <div class="col-md-12">
    <form action="<?php echo site_url('Karya/Ubah');?>" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="ID_KARYA" value="<?= $karya->ID_KARYA;?>">
      <input type="hidden" name="ID_KATEGORI" value="<?= $karya->ID_KATEGORI;?>">
      <div class="card shadow-sm">
        <div class="card-header">
          Edit data karya <b class="text-info"><?= $karya->JUDUL;?></b>
          <a href="<?php echo site_url('DaftarKarya/'.$karya->ID_KATEGORI);?>" class="btn btn-warning btn-sm float-right">Kembali</a>
          <button type="submit" class="btn btn-primary btn-sm float-right mr-2">Ubah Karya</button>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="title">SEMESTER <small class="text-danger">*</small> </label>
                <input type="hidden" class="form-control" name="ID_SEMESTER" maxlength="50" value="<?= $ID_SEM;?>" required>
                <input type="text" class="form-control" value="<?= $semester_aktif;?>" required readonly>
                <small class="text-muted">Ubah semester aktif di pengaturan.</small>
              </div>
              <div class="form-group">
                <label class="title">Judul Karya <small class="text-danger">*</small> </label>
                <input type="text" class="form-control" name="JUDUL" maxlength="50" value="<?= $karya->JUDUL;?>" required>
                <small class="text-muted">Max 50 karakter</small>
              </div>
              <div class="form-group">
                <label class="title">Deskripsi Karya <small class="text-danger">*</small> </label>
                <textarea type="text" class="form-control" name="DESKRIPSI" maxlength="250" required><?= $karya->DESKRIPSI;?></textarea>
                <small class="text-muted">Max 250 karakter</small>
              </div>
              <div class="form-group">
                <label class="title">Prodi Peserta <small class="text-danger">*</small> </label>
                <select class="form-control select2" name="PRODI">
                  <optgroup label="Current Stage">
                    <option value="<?= $karya->ID_PRODI;?>"><?= $karya->PRODI;?></option>
                  </optgroup>
                  <optgroup label="Change Stage">
                    <?php foreach ($prodi as $key) { ?>
                      <option value="<?= $key->ID_PRODI;?>"><?= $key->PRODI;?></option>
                    <?php }?>
                  </optgroup>
                </select>
              </div>
              <div class="form-group">
                <label class="title">Dospem Peserta<small class="text-danger">*</small> </label>
                <input type="text" class="form-control" name="DOSPEM" maxlength="50" value="<?= $karya->DOSPEM;?>" >
              </div>
              <div class="form-group">
                <label class="title">Poster <small class="text-none text-info cursor hide" id="prev" data-toggle="modal" data-target="#preview">Preview Poster</small></label>
                <div class="row mb-0 mt-0">
                  <div class="col-md-12">
                    <div class="input-group col-xs-12">
                      <button type="button" data-toggle="modal" data-target="#fotoup" class="btn btn-sm btn-info">Ubah foto karya ini?</a> <small class="text-danger ml-1 mt-2">Perbaikan</small>
                      </div>
                    </div>
                  </div>
                  <small class="text-muted">Max size 2mb, max file 5 file</small>
                </div>
                <div class="form-group">
                  <label class="title">Link GITHUB/SOURCE CODE</label>
                  <input type="text" class="form-control" name="LINK_GITHUB" value="<?= $karya->LINK_GITHUB;?>" >
                  <small class="text-muted">Tambahkan jika ada. (Link github / google drive)</small>
                </div>
                <div class="form-group">
                  <label class="title">Link Video</label>
                  <input type="text" class="form-control" name="LINK_VIDEO" value="<?= $karya->LINK_VIDEO;?>" >
                  <small class="text-muted">Tambahkan jika ada, diharuskan memakai embed link google drive / youtube.</small>
                </div>
                <div class="form-group">
                  <label class="title">Link Demo</label>
                  <input type="text" class="form-control" name="LINK_DEMO" value="<?= $karya->LINK_DEMO;?>" >
                  <small class="text-muted">Tambahkan jika ada.</small>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row mb-2">
                  <div class="col-md-12">
                    <div class="alert alert-warning">
                      Semua data anggota anda termasuk ketua!!
                    </div>
                  </div>
                </div>
                <?php
                $no = 1;
                $anggota = $controller->karya_model->get_anggota($karya->ID_KARYA);
                foreach ($anggota as $key) {
                  ?>
                  <input type="hidden" class="form-control" name="ID_ANGGOTA" value="<?= $key->ID_AUTHOR;?>" required>
                  <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Data anggota <?= $no;?></legend><button type="button" class="btn btn-sm btn-danger float-right" data-toggle="modal" data-target="#hapus<?= $key->ID_AUTHOR;?>">Buang anggota</button>
                    <div class="form-group mt-2">
                      <label class="title">Nama anggota<small class="text-danger">*</small> </label>
                      <input type="text" class="form-control" name="OLD_NAMA[]" maxlength="50" value="<?= $key->NAMA;?>" required>
                    </div>
                    <div class="form-group">
                      <label class="title">NRP anggota<small class="text-danger">*</small> </label>
                      <input type="text" class="form-control" name="OLD_NRP[]" maxlength="50" value="<?= $key->NRP;?>" required>
                    </div>
                  </fieldset>


                  <!-- MODAL hapus -->
                  <div id="hapus<?= $key->ID_AUTHOR;?>" class="modal fade" role="dialog" tabindex="-1" >
                    <div class="modal-dialog" role="document">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header bg-danger">
                          <h5 class="modal-title text-white">Hapus anggota - <b><?= substr($key->NAMA, 0, 15);?>...</b></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                          <form class="form-horizontal" action="<?php echo site_url('Karya/BuangAnggota/'.$karya->ID_KARYA);?>" method="post">
                            <input type="hidden" name="ID_AUTHOR" value="<?= $key->ID_AUTHOR;?>">
                            <input type="hidden" name="NAMA" value="<?= $key->NAMA;?>">

                            <p>Apakah anda yakin akan membuang data anggota <b><?= $key->NAMA;?></b> </p>

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

                  <?php $no++; }?>
                  <hr>
                  <div class="row mb-2">
                    <div class="col-md-12">
                      <span class="text-info">Tambahkan anggota baru</span>
                      <button type="button" class="btn btn-sm btn-orange float-right" id="add">Tambahkan field anggota</button>
                    </div>
                  </div>
                  <div id="field">
                    <fieldset class="scheduler-border">
                      <legend class="scheduler-border">Data anggota <?= $no;?></legend>
                      <div class="form-group mt-2">
                        <label class="title">Nama anggota<small class="text-danger">*</small> </label>
                        <input type="text" class="form-control" name="NAMA[]" maxlength="50" placeholder="Nama anggota">
                      </div>
                      <div class="form-group">
                        <label class="title">NRP anggota<small class="text-danger">*</small> </label>
                        <input type="text" class="form-control" name="NRP[]" maxlength="50" placeholder="NRP anggota">
                      </div>
                    </fieldset>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <input type="hidden" name="namafolder" value="<? $karya->FOLDER;?>">

          <div id="fotoup" class="modal fade" role="dialog" tabindex="-1" >
            <div class="modal-dialog modal-lg" role="document">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header bg-success">
                  <h5 class="modal-title text-white">Ubah foto - <b><?php echo $karya->JUDUL;?></b></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                  <div class="row">
                    <input type="hidden" id="editfotoss" name="editfoto">
                    <?php if ($foto == FALSE) {
                      for ($i=1; $i <= 5 ; $i++) { ?>
                        <div class="col-md-4 mb-3 ">
                          <img id="FotoA<?= $i;?>" class="previewImg ktp<?= $i;?>" src="<?php echo base_url();?>file/Pickanimage.png" alt="Placeholder" for="getFoto<?= $i;?>">
                          <input type="file" id="getFoto<?= $i;?>" class="form-control-file fotoss hide" name="FOTO[]"  onchange="previewFotoA<?= $i;?>(this);" accept="image/*">
                        </div>

                        <script>
                          function previewFotoA<?= $i;?>(input){
                            $(".ktp<?= $i;?>").removeClass('hidden');
                            var file = $("#getFoto<?= $i;?>").get(0).files[0];

                            if(file){
                              var reader = new FileReader();

                              reader.onload = function(){
                                $("#FotoA<?= $i;?>").attr("src", reader.result);
                              }

                              reader.readAsDataURL(file);
                            }
                          }
                        </script>
                      <?php } }else{ $cf = 0; foreach ($foto as $fotos) { ?>
                        <div class="col-md-4 mb-3 ">
                          <img id="FotoA<?= $cf;?>" class="w-100 previewImg ktp<?= $cf;?>" src="<?php echo base_url();?>berkas/karya/<?= $karya->FOLDER;?>/foto/<?= $fotos->FOTO;?>" alt="Placeholder" for="getFoto<?= $cf;?>">
                          <input type="hidden" name="ID_FOTO[]" value="<?= $fotos->ID_FOTO;?>">
                          <input type="file" id="getFoto<?= $cf;?>" class="form-control-file fotoss hide" name="FOTO[]"  onchange="previewFotoA<?= $cf;?>(this);" accept="image/*">
                        </div>

                        <script>
                          function previewFotoA<?= $cf;?>(input){
                            $(".ktp<?= $cf;?>").removeClass('hidden');
                            var file = $("#getFoto<?= $cf;?>").get(0).files[0];

                            if(file){
                              var reader = new FileReader();

                              reader.onload = function(){
                                $("#FotoA<?= $cf;?>").attr("src", reader.result);
                              }

                              reader.readAsDataURL(file);
                            }
                          }
                        </script>
                        <?php $cf++; } if ($cf <= 5) {
                          for ($a=1; $a <= 5-$cf ; $a++) {
                            ?>
                            <div class="col-md-4 mb-3 ">
                              <img id="FotoB<?= $a;?>" class="previewImg ktpB<?= $a;?>" src="<?php echo base_url();?>file/Pickanimage.png" alt="Placeholder" for="getFotoB<?= $a;?>">
                              <input type="file" id="getFotoB<?= $a;?>" class="form-control-file fotoss hide" name="FOTOA[]"  onchange="previewFotoB<?= $a;?>(this);" accept="image/*">
                            </div>

                            <script>
                              function previewFotoB<?= $a;?>(input){
                                $(".ktpB<?= $a;?>").removeClass('hidden');
                                var file = $("#getFotoB<?= $a;?>").get(0).files[0];

                                if(file){
                                  var reader = new FileReader();

                                  reader.onload = function(){
                                    $("#FotoB<?= $a;?>").attr("src", reader.result);
                                  }

                                  reader.readAsDataURL(file);
                                }
                              }
                            </script>
                          <?php } ?>
                        <?php } ?>
                      <?php } ?>
                    </div>
                    <hr>
                    <small>Klik tombol pilih file untuk memilih foto produk dari komputer anda.</small>
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-sm" data-dismiss="modal">Selesai</button>
                  </div>

                </div>
              </div>
            </div>

          </form>
        </div>
      </div>

      <script type="text/javascript">
        function checkFiles(files) {
          if(files.length>5) {
            alert("Max 5 files; files have been truncated");

            let list = new DataTransfer;
            for(let i=0; i<5; i++)
              list.items.add(files[i])

            document.getElementById('files').files = list.files
          }
        }

        $(document).ready(function(){
          var i=<?= $no;?>;
          $('#add').click(function(){
            i++;

            $('#field').append('<fieldset class="scheduler-border" id="row'+i+'"><legend class="scheduler-border">Data anggota '+i+'</legend><button type="button" class="btn btn-sm btn-danger float-right btn_remove" id="'+i+'">Hapus field</button><div class="form-group mt-2"><label class="title">Nama anggota<small class="text-danger">*</small> </label><input type="text" class="form-control" name="NAMA[]" maxlength="50" placeholder="Nama anggota" required></div><div class="form-group"><label class="title">NRP anggota<small class="text-danger">*</small> </label><input type="text" class="form-control" name="NRP[]" maxlength="50" placeholder="NRP anggota" required></div></fieldset>');
          });
          $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
          });
        });
      </script>
