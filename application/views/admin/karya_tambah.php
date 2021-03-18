<?php $this->load->view('admin/header_karya');?>

<div id="msform">
  <ul id="progressbar">
    <li class="active" id="account"><h6>Pilih Kategori</h6></li>
    <li class="active" id="personal"><h6>Isi data Karya</h6></li>
    <li id="confirm"><h6>Publish</h6></li>
  </ul> <!-- fieldsets -->
</div>
<div class="row">
  <div class="col-md-12">
    <form action="<?php echo site_url('Karya/Upload');?>" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="ID_KATEGORI" value="<?= $kategori->ID_KATEGORI;?>">
      <div class="card shadow-sm">
        <div class="card-header">
          Isi data karya - Kategori <b class="text-info"><?= $kategori->KATEGORI;?></b>
          <button type="submit" class="btn btn-primary btn-sm float-right mr-2">Upload Karya</button>
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
                <input type="text" class="form-control" name="JUDUL" maxlength="50" placeholder="Isikan judul karya peserta" required>
                <small class="text-muted">Max 50 karakter</small>
              </div>
              <div class="form-group">
                <label class="title">Deskripsi Karya <small class="text-danger">*</small> </label>
                <textarea type="text" class="form-control" name="DESKRIPSI" maxlength="250" placeholder="Isikan deskripsi karya peserta" required></textarea>
                <small class="text-muted">Max 250 karakter</small>
              </div>
              <div class="form-group">
                <label class="title">Prodi Peserta <small class="text-danger">*</small> </label>
                <select class="form-control select2" name="PRODI">
                  <?php foreach ($prodi as $key) { ?>
                    <option value="<?= $key->ID_PRODI;?>"><?= $key->PRODI;?></option>
                  <?php }?>
                </select>
              </div>
              <div class="form-group">
                <label class="title">Dospem Peserta<small class="text-danger">*</small> </label>
                <input type="text" class="form-control" name="DOSPEM" maxlength="50" placeholder="Nama Dospem peserta" >
              </div>
              <div class="form-group">
                <label class="title">Poster <small class="text-none text-info cursor hide" id="prev" data-toggle="modal" data-target="#preview">Preview Poster</small></label>
                <div class="row mb-0 mt-0">
                  <div class="col-md-12">
                    <div class="input-group col-xs-12">
                      <input type="file" class="form-control" name="FOTO[]" multiple placeholder="Upload Image" id="files" onchange="checkFiles(this.files)">
                    </div>
                  </div>
                </div>
                <small class="text-muted">Tambahkan poster jika ada. Max size 2mb, max file 5 file</small>
              </div>
              <div class="form-group">
                <label class="title">Link Video</label>
                <input type="text" class="form-control" name="LINK_VIDEO" maxlength="100" placeholder="Link Video Trailer Karya" >
                <small class="text-muted">Tambahkan jika ada, diharuskan memakai embed link youtube.</small>
                <small class="text-danger">Pastikan, terdapat kode video diakhir link. Ex: https://youtu.be/<b>db1VfDpipu8</b></small>
              </div>
              <div class="form-group">
                <label class="title">Link Demo</label>
                <input type="text" class="form-control" name="LINK_DEMO" maxlength="100" placeholder="Link Demo Karya" >
                <small class="text-muted">Tambahkan jika ada.</small>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row mb-2">
                <div class="col-md-12">
                  <button type="button" class="btn btn-sm btn-orange float-right" id="add">Tambahkan field anggota</button>
                </div>
              </div>
              <div id="field">
                <fieldset class="scheduler-border">
                  <legend class="scheduler-border">Data anggota 1</legend>
                  <div class="form-group mt-2">
                    <label class="title">Nama anggota<small class="text-danger">*</small> </label>
                    <input type="text" class="form-control" name="NAMA[]" maxlength="50" placeholder="Nama anggota" required>
                  </div>
                  <div class="form-group">
                    <label class="title">NRP anggota<small class="text-danger">*</small> </label>
                    <input type="text" class="form-control" name="NRP[]" maxlength="50" placeholder="NRP anggota" required>
                  </div>
                </fieldset>
              </div>

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
  var i=1;
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
