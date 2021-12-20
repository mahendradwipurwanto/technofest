
<script type="text/javascript">
  tinymce.init({
    selector: "#richTextArea",
    height: 400,
    plugins : 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
    menubar: true,
    branding: false,
    toolbar : 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist checklist | forecolor backcolor casechange permanentpen formatpainter removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | image media pageembed template link anchor codesample | a11ycheck ltr rtl | showcomments addcomment',
  // automatic_uploads: true,
  // image_advtab: true,
  // images_upload_url: "<?php echo site_url('Agenda/tinymce_upload')?>",
  // file_picker_types: 'image',
  // paste_data_images:true,
  // relative_urls: false,
  // remove_script_host: false,
  // file_picker_callback: function(cb, value, meta) {
  //   var input = document.createElement('input');
  //   input.setAttribute('type', 'file');
  //   input.setAttribute('accept', 'image/*');
  //   input.onchange = function() {
  //     var file = this.files[0];
  //     var reader = new FileReader();
  //     reader.readAsDataURL(file);
  //     reader.onload = function () {
  //       var id = 'post-image-' + (new Date()).getTime();
  //       var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
  //       var blobInfo = blobCache.create(id, file, reader.result);
  //       blobCache.add(blobInfo);
  //       cb(blobInfo.blobUri(), { title: file.name });
  //     };
  //   };
  //   input.click();
  // }
});
</script>

<form class="form-horizontal" action="<?php echo site_url('Agenda/edit_agenda');?>" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-md-9">
      <div class="card card-waves shadow-sm">
        <div class="card-header">
          Edit agenda <b><?= $agenda->JUDUL;?></b>
          <button type="button" class="btn btn-primary btn-sm float-right" onclick="window.history.go(-1); return false;"><i class="fa fa-step-backward fa-sm mr-1"></i> Kembali</button>
        </div>
        <div class="card-body">
          <input type="hidden" name="ID_AGENDA" value="<?= $agenda->ID_AGENDA;?>">
          <div class="form-group">
            <label class="title">Semester</label>
            <label class="title">SEMESTER <small class="text-danger">*</small> </label>
            <input type="hidden" class="form-control" name="ID_SEMESTER" maxlength="50" value="<?= $ID_SEM;?>" required>
            <input type="text" class="form-control" value="<?= $semester_aktif;?>" required readonly>
            <small class="text-muted">Ubah semester aktif di pengaturan.</small>
          </div>
          <div class="form-group">
            <label class="title">Nama Agenda <small class="text-danger">*</small> </label>
            <input type="text" name="JUDUL" maxlength="50" class="form-control" value="<?= $agenda->JUDUL;?>" required>
            <small class="text-muted">Max 50 karakter</small>
          </div>

          <div id="preview" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bb-none">
                  <h6>Preview Poster</h6>
                  <button type="button" class="close cls-pop" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <?php if($agenda->POSTER == null): ?>
                    Belum ada poster
                    <?php else:?>
                      <img id="previewImg" src="<?php echo base_url();?>berkas/agenda/<?= $agenda->ID_AGENDA;?>/poster/<?= $agenda->POSTER;?>" alt="value" width="100%">
                    <?php endif;?>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="title">Poster <small class="text-none text-info cursor" id="prev" data-toggle="modal" data-target="#preview">Preview Poster</small></label>
              <div class="row mb-0 mt-0">
                <div class="col-md-12">
                  <input type="file" name="POSTER" class="file hide" onchange="previewFile(this);">
                  <div class="input-group col-xs-12">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                    <input type="text" class="form-control" disabled value="Upload Image">
                    <span class="input-group-btn">
                      <button class="browse btn btn-primary" type="button" style="border-top-left-radius: 0px !important; border-bottom-left-radius: 0px !important;"><i class="fa fa-search mr-1"></i> Browse</button>
                    </span>
                  </div>
                </div>
              </div>
              <small class="text-muted">Tambahkan poster jika ada.</small>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="title">Tanggal <small class="text-danger">*</small> </label>
                  <input type="date" name="TANGGAL" class="form-control" value="<?= $agenda->TANGGAL;?>" required>
                </div>
              </div>
              <?php
              $fetch = explode(" - ",$agenda->WAKTU);
              ?>
              <div class="col-md-3">
                <div class="form-group">
                  <label class="title">Waktu <small class="text-danger">*</small> </label>
                  <input type="time" name="WAKTU_MULAI" class="form-control" value="<?= $fetch[0];?>" required>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label class="title">Selesai <small class="text-danger">*</small> </label>
                  <input type="time" name="WAKTU_SELESAI" class="form-control" value="<?= $fetch[1];?>" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <div class="form-group mb-0">
                  <label class="title">Seminar/Workshop?</label>
                  <div class="onoffswitch">
                    <input type="checkbox" name="SEMINAR" class="onoffswitch-checkbox" id="seminar" tabindex="0" <?= ($agenda->SEMINAR == TRUE) ? "checked" : "";?>>
                    <label class="onoffswitch-label" for="seminar">
                      <span class="onoffswitch-inner"></span>
                      <span class="onoffswitch-switch"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group mb-0">
                  <label class="title">Memiliki pendaftaran? </label>
                  <div class="onoffswitch">
                    <input type="checkbox" name="REGISTER" class="onoffswitch-checkbox" id="register" tabindex="0" <?= ($agenda->REGISTER == TRUE) ? "checked" : "";?>>
                    <label class="onoffswitch-label" for="register">
                      <span class="onoffswitch-inner"></span>
                      <span class="onoffswitch-switch"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-md-2 hide" id="bayar">
                <div class="form-group mb-0">
                  <label class="title">Berbayar? </label>
                  <div class="onoffswitch">
                    <input type="checkbox" name="BERBAYAR" class="onoffswitch-checkbox" id="berbayar" tabindex="0" <?= ($agenda->BERBAYAR == TRUE) ? "checked" : "";?>>
                    <label class="onoffswitch-label" for="berbayar">
                      <span class="onoffswitch-inner"></span>
                      <span class="onoffswitch-switch"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-md-4 hide" id="fee">
                <div class="form-group mb-0">
                  <label class="title">Fee? </label>
                  <div class="input-group input-group-sm input-group-joined">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        Rp.
                      </span>
                    </div>
                    <input type="number" name="FEE" class="form-control form-control-sm" value="<?= $agenda->FEE;?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-md-12">
                <small class="text-muted"> <span id="daftar_ket" class="hide">Hanya pengguna yang telah mendaftar yang dapat melakukan pendaftaran</span><span  class="hide" id="bayar_ket">, Dan diwajibkan menyertakan bukti pembayaran daftar seminar</span> </small>
              </div>
            </div>

            <div class="form-group hide" id="media">
              <label class="title">Media / Lokasi</label>
              <textarea type="text" name="MEDIA" class="form-control" maxlength="250"><?= $agenda->MEDIA;?></textarea>
              <small class="text-muted">Isikan alamat atau media tempat penyelenggaraan seminar.</small>
            </div>

            <div class="form-group hide" id="link_daftar">
              <label class="title">Link pendaftaran</label>
              <textarea type="text" name="LINK_DAFTAR" class="form-control" maxlength="250" placeholder="Link pendaftaran google form/zoom"></textarea>
              <small class="text-muted">Isikan link pendaftaran google form/zoom.</small>
            </div>

            <div class="form-group">
              <label class="title">Keterangan</label>
              <textarea type="text" name="KETERANGAN" class="form-control" id="richTextArea"><?= $agenda->KETERANGAN;?></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <button type="submit" name="publish" value="1" class="btn btn-primary btn-block mb-2 shadow-sm">Publish</button>
        <button type="submit" name="draft" value="1" class="btn btn-warning btn-block mb-2 shadow-sm">Draft</button>
      </div>
      <script type="text/javascript">
        $(document).on('click', '.browse', function(){
          var file = $(this).parent().parent().parent().find('.file');
          file.trigger('click');
        });
        $(document).on('change', '.file', function(){
          $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
        });

        function previewFile(input){
          $("#prev").removeClass('hide');
          var file = $("input[type=file]").get(0).files[0];

          if(file){
            var reader = new FileReader();

            reader.onload = function(){
              $("#previewImg").attr("src", reader.result);
            }

            reader.readAsDataURL(file);
          }
        }

        $("#register").change(function() {
          if(this.checked) {
            $("#bayar").removeClass('hide');
            $("#link_daftar").removeClass('hide');
            $("#daftar_ket").removeClass('hide');
          }else{
            $("#bayar").addClass('hide');
            $("#link_daftar").addClass('hide');
            $("#daftar_ket").addClass('hide');
          }
        });

        $("#berbayar").change(function() {
          if(this.checked) {
            $("#bayar_ket").removeClass('hide');
            $("#fee").removeClass('hide');
          }else{
            $("#bayar_ket").addClass('hide');
            $("#fee").addClass('hide');
          }
        });

        $("#seminar").change(function() {
          if(this.checked) {
            $("#media").removeClass('hide');
          }else{
            $("#media").addClass('hide');
          }
        });

        window.onload = onPageLoad();

        function onPageLoad() {
          if($("#seminar:checkbox:checked").length > 0) {
            $("#media").removeClass('hide');
          }
          if($("#register:checkbox:checked").length > 0) {
            $("#bayar").removeClass('hide');
            $("#daftar_ket").removeClass('hide');
          }
          if($("#berbayar:checkbox:checked").length > 0) {
            $("#bayar_ket").removeClass('hide');
            $("#fee").removeClass('hide');
          }
        }
      </script>
    </div>
  </form>
