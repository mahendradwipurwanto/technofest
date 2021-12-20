<div class="row mt-4">
	<div class="col-8 mx-auto">
		<div class="card shadow-sm">
			<div class="card-body">
				<?php if ($upload_karya == false) :?>
					<div class="alert alert-info mb-0">
						Unggah karya telah ditutup!!
					</div>
				<?php endif;?>
				<?php if ($karya != false) :?>
					<h5 class="card-header-title mt-3">Status karya: <?= $karya->JUDUL;?> <span class="badge badge-<?= $karya->IS_VERIF == TRUE ? 'success' : 'secondary';?>"><?= $karya->IS_VERIF == TRUE ? 'Diterima' : 'Menunggu verifikasi';?></span></h5>
					<a href="<?= site_url('EditKarya/'.$karya->ID_KARYA);?>" class="btn btn-primary btn-xs">Edit</a>
				<?php endif;?>
			</div>
		</div>
		<div class="card shadow-sm">
			<div class="card-body">
				<form action="<?= site_url('StatusKarya');?>" method="post">
					<div class="row">
						<div class="col-8">
							<div class="form-group">
								<input type="text" name="cari_karya" class="form-control" placeholder="Masukkan judul karya" required="">
							</div>
						</div>
						<div class="col-4">
							<button type="submit" class="btn btn-primary btn-block">Cari karya</button>
						</div>
					</div>
				</form>
				<?php if ($CariKarya != null) :?>
					<?php if ($karya != false) :?>
						<div class="alert alert-info mb-0">
							Karya tidak ditemukan, masukkan judul karya lainnya!
						</div>
						<?php else:?>
							<?php foreach ($CariKarya as $key) :?>
								<div class="alert alert-info mb-2 p-2">
									<h5 class="card-header-title mt-3">Status karya: <?= $key->JUDUL;?> <span class="badge badge-<?= $key->IS_VERIF == TRUE ? 'success' : 'secondary';?>"><?= $key->IS_VERIF == TRUE ? 'Diterima' : 'Menunggu verifikasi';?></span></h5>
								</div>
							<?php endforeach;?>
						<?php endif;?>
					<?php endif;?>
				</div>
			</div>
		</div>
	</div>