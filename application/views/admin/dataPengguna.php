<div class="card mb-4">
  <div class="card-header">Data Pengguna</div>
  <div class="card-body">
    <div class="datatable">
      <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Kode User</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Asal Kampus</th>
            <th>Role</th>
			<th>Aksi</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Kode User</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Asal Kampus</th>
            <th>Role</th>
			<th>Aksi</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
          foreach($listData['data'] as $item){
          if ($item->ROLE == 0) {
            $ROLE = '<span class="badge badge-primary">ADMIN</span>';
          }elseif ($item->ROLE == 2) {
            $ROLE = '<span class="badge badge-warning">Koordinator</span>';
          }else {
            $ROLE = '<span class="badge badge-light">Pengguna</span>';
          }?>
          <tr>
          <td><?=$item->KODE_USER?></td>
          <td><?=$item->NAMA?></td>
          <td><?=$item->EMAIL?></td>
          <td><?=$item->ASAL_KAMPUS?></td>
          <td><?=$ROLE?></td>

		  <td>
            <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#edit<?= $item->KODE_USER;?>"><i class="fa fa-edit fa-sm"></i></button>
            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus<?= $item->KODE_USER;?>"><i class="fa fa-trash fa-sm"></i></button>
          </td>

          </tr>

		  <!-- edit -->
              <div id="edit<?= $item->KODE_USER;?>" class="modal fade" role="dialog" tabindex="-1" >
                <div class="modal-dialog" role="document">
                  <!-- content-->
                  <div class="modal-content">
                    <div class="modal-header bg-info">
                      <h5 class="modal-title text-white">Ubah data Pengguna <b><?= $item->NAMA;?></b></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- body -->
                    <div class="modal-body">
                      <form class="form-horizontal" action="<?php echo site_url('Dashboard/ubah_datapengguna');?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="KODE_USER" value="<?= $item->KODE_USER;?>">

						<div class="form-group">
                          <label class="title">Kode User </label>
                          <input type="text" name="KODE_USER" class="form-control" value="<?= $item->KODE_USER;?>" required readonly>
                        </div>

                        <div class="form-group">
                          <label class="title">Nama </small></label>
                          <input type="text" name="NAMA" class="form-control" value="<?= $item->NAMA;?>" required readonly>
                        </div>

                        <div class="form-group">
                          <label class="title">Email </small> </label>
                          <input type="text" name="EMAIL" class="form-control" value="<?= $item->EMAIL;?>" required readonly>
                        </div>

                        <div class="form-group">
                          <label class="title">Asal Kampus </small> </label>
                          <input type="text" name="ASAL_KAMPUS" class="form-control" value="<?= $item->ASAL_KAMPUS;?>" required readonly>
                        </div>

						<div class="form-group">
							<label class="title">Role <small class="text-danger">*</small> </label>

						<?php
						$array = array(
						'' => 'Pilih Role',
						'0' => 'Admin',
						'1' => 'Pengguna',
						'2' => 'Koordinator'
						);

						echo form_dropdown('ROLE',$array,$item->ROLE,'class="form-control select2"');
						?>

						</div>

						 <div class="form-group">
                          <label class="title">Password Pengguna <small class="text-danger">*</small> </label>
                          <input type="password" name="PASSWORD" class="form-control" placeholder="Masukan password baru">
                        </div>

                        <!-- footer -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-light btn-sm" data-dismiss="modal">Batal</button>
                          <button type="submit" class="btn btn-info btn-sm">Ubah data</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

		  <!-- hapus -->
              <div id="hapus<?= $item->KODE_USER;?>" class="modal fade" role="dialog" tabindex="-1" >
                <div class="modal-dialog" role="document">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header bg-danger">
                      <h5 class="modal-title text-white">Hapus data Pengguna <b><?= $item->NAMA;?></b></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- body -->
                    <div class="modal-body">
                      <form class="form-horizontal" action="<?php echo site_url('Dashboard/hapus_datapengguna');?>" method="post">
                        <input type="hidden" name="KODE_USER" value="<?= $item->KODE_USER;?>">
                        <input type="hidden" name="NAMA" value="<?= $item->NAMA;?>">

                        <p>Apakah anda yakin akan menghapus data Pengguna  <b><?= $item->NAMA;?></b> </p>

                        <!-- footer -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-light btn-sm" data-dismiss="modal">Batal</button>
                          <button type="submit" class="btn btn-danger btn-sm">Hapus data</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

         <?php ;} ?>

        </tbody>
      </table>
    </div>
  </div>
</div>
