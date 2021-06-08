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
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Kode User</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Asal Kampus</th>
            <th>Role</th>
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
          }
          echo '
          <tr>
          <td>'.$item->KODE_USER.'</td>
          <td>'.$item->NAMA.'</td>
          <td>'.$item->EMAIL.'</td>
          <td>'.$item->ASAL_KAMPUS.'</td>
          <td>'.$ROLE.'</td>
          </tr>
          ';}
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
