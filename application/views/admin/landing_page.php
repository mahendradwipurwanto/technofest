<form class="form-horizontal" action="<?php echo site_url('Agenda/tambah_agenda');?>" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-waves shadow-sm">
        <div class="card-header">
          Landing Page
        </div>
        <div class="card-body">
          
          <div class="form-group">
            <label class="title">Judul Utama<small class="text-danger">*</small> </label>
            <input type="text" name="judul" maxlength="21" class="form-control" placeholder="STIKI Technofest 2021" required>
            <small class="text-muted">Maks. 21 characters</small>
          </div>

          <div class="form-group">
            <label class="title">Tentang Technofest<small class="text-danger">*</small> </label>
            <textarea name="tentang" rows="5" class="form-control" maxlength="250" placeholder="STIKI TECHNOFEST merupakan pameran produk Tugas Akhir, Tugas Akhir Mata Kuliah, Magang, Lomba, Proyek Individu dan Proyek Karya Kelompok Bidang Minat dari Program studi Teknik Informatika, Sistem Informatika dan Manajemen Informatika."></textarea>
            <small class="text-muted">Maks. 250 characters</small>
          </div>

          <div class="form-group">
            <label class="title">Tanggal Mulai Acara<small class="text-danger">*</small> </label>
            <input type="date" name="tawal" class="form-control">
          </div>

          <div class="form-group">
            <label class="title">Tanggal Berakhir Acara<small class="text-danger">*</small> </label>
            <input type="date" name="takhir" class="form-control">
          </div>

          <button type="submit" name="apdet" class="btn btn-primary btn-block mb-2 shadow-sm">Simpan Perubahan</button>

      </div>
  </div>
</div>
</div>
</form>