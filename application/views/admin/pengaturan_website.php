<div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-2">
  <div class="mr-4 mb-3 mb-sm-0">
    <h1 class="mb-0">Atur data website</h1>
  </div>
</div>
<hr>

<div class="row">
  <div class="col-md-8">
    <div class="card shadow-sm">
      <div class="card-header">Data Website
      </div>
      <div class="card-body">

        <form action="<?php echo site_url('Pengaturan/ubah_website');?>" method="post">

          <div class="form-group">
            <label class="title">Tentang</label>
            <textarea name="tentang" class="form-control" rows="3" required><?php echo $tentang;?></textarea>
          </div>

          <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#ubah">Simpan Perubahan</button>


          <!-- MODAL edit -->
          <div id="ubah" class="modal fade" role="dialog" tabindex="-1" >
            <div class="modal-dialog" role="document">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header bg-info">
                  <h5 class="modal-title text-white">Simpan perubahan?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">

                  <p>Yakin mengubah data website?</p>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-info btn-sm">Ya</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </form>

      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="alert alert-info shadow-sm">
      <p class="mb-0">Atur data website disini.</p>
    </div>
  </div>
</div>
