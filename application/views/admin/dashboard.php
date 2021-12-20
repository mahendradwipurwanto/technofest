<?php if ($dev_mode == 1) { ?>
  <div class="row">
    <div class="col-xl-12 col-md-12 mb-4">
      <div class="alert alert-primary">
        <p>Developer mode sedang AKTIF! - Hal ini membuat halaman utama (Frontend) tidak dapat diakses! anda masih dapat melihat perubahan jika anda login sebagai admin!</p>
        <a href="<?= base_url();?>" target="_blank" class="btn btn-light btn-sm">Preview halaman depan</a>
      </div>
    </div>
  </div>
<?php } ?>
  <div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
      <!-- Dashboard info widget 1-->
      <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-success h-100">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="flex-grow-1">
              <div class="small font-weight-bold text-success mb-1">Total Karya Semester ini</div>
              <div class="h1"><?php echo $totalKarya?></div>
              <!-- <div class="text-xs font-weight-bold text-success d-inline-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up mr-1"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
              12%
            </div> -->
          </div>
          <div class="ml-2"><svg class="svg-inline--fa fa-dollar-sign fa-w-9 fa-2x text-gray-200" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dollar-sign" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 288 512" data-fa-i2svg=""><path fill="currentColor" d="M209.2 233.4l-108-31.6C88.7 198.2 80 186.5 80 173.5c0-16.3 13.2-29.5 29.5-29.5h66.3c12.2 0 24.2 3.7 34.2 10.5 6.1 4.1 14.3 3.1 19.5-2l34.8-34c7.1-6.9 6.1-18.4-1.8-24.5C238 74.8 207.4 64.1 176 64V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48h-2.5C45.8 64-5.4 118.7.5 183.6c4.2 46.1 39.4 83.6 83.8 96.6l102.5 30c12.5 3.7 21.2 15.3 21.2 28.3 0 16.3-13.2 29.5-29.5 29.5h-66.3C100 368 88 364.3 78 357.5c-6.1-4.1-14.3-3.1-19.5 2l-34.8 34c-7.1 6.9-6.1 18.4 1.8 24.5 24.5 19.2 55.1 29.9 86.5 30v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-48.2c46.6-.9 90.3-28.6 105.7-72.7 21.5-61.6-14.6-124.8-72.5-141.7z"></path></svg><!-- <i class="fas fa-dollar-sign fa-2x text-gray-200"></i> --></div>
        </div>
      </div>
    </div>
  </div>
    <div class="col-xl-3 col-md-6 mb-4">
      <!-- Dashboard info widget 1-->
      <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-success h-100">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="flex-grow-1">
              <div class="small font-weight-bold text-success mb-1">Karya <i class="text-danger">Belum verif</i> </div>
              <div class="h1"><?php echo $karyaBelumVERIF?></div>
              <!-- <div class="text-xs font-weight-bold text-success d-inline-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up mr-1"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
              12%
            </div> -->
          </div>
          <div class="ml-2"><svg class="svg-inline--fa fa-dollar-sign fa-w-9 fa-2x text-gray-200" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dollar-sign" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 288 512" data-fa-i2svg=""><path fill="currentColor" d="M209.2 233.4l-108-31.6C88.7 198.2 80 186.5 80 173.5c0-16.3 13.2-29.5 29.5-29.5h66.3c12.2 0 24.2 3.7 34.2 10.5 6.1 4.1 14.3 3.1 19.5-2l34.8-34c7.1-6.9 6.1-18.4-1.8-24.5C238 74.8 207.4 64.1 176 64V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48h-2.5C45.8 64-5.4 118.7.5 183.6c4.2 46.1 39.4 83.6 83.8 96.6l102.5 30c12.5 3.7 21.2 15.3 21.2 28.3 0 16.3-13.2 29.5-29.5 29.5h-66.3C100 368 88 364.3 78 357.5c-6.1-4.1-14.3-3.1-19.5 2l-34.8 34c-7.1 6.9-6.1 18.4 1.8 24.5 24.5 19.2 55.1 29.9 86.5 30v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-48.2c46.6-.9 90.3-28.6 105.7-72.7 21.5-61.6-14.6-124.8-72.5-141.7z"></path></svg><!-- <i class="fas fa-dollar-sign fa-2x text-gray-200"></i> --></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-md-6 mb-4">
    <!-- Dashboard info widget 2-->
    <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-info h-100">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="flex-grow-1">
            <div class="small font-weight-bold text-info mb-1">Total Agenda</div>
            <div class="h1"><?php echo $c_agenda?></div>
            <!-- <div class="text-xs font-weight-bold text-danger d-inline-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down mr-1"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
            3%
          </div> -->
        </div>
        <div class="ml-2"><svg class="svg-inline--fa fa-tag fa-w-16 fa-2x text-gray-200" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="tag" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M0 252.118V48C0 21.49 21.49 0 48 0h204.118a48 48 0 0 1 33.941 14.059l211.882 211.882c18.745 18.745 18.745 49.137 0 67.882L293.823 497.941c-18.745 18.745-49.137 18.745-67.882 0L14.059 286.059A48 48 0 0 1 0 252.118zM112 64c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48z"></path></svg><!-- <i class="fas fa-tag fa-2x text-gray-200"></i> --></div>
      </div>
    </div>
  </div>
</div>
<div class="col-xl-3 col-md-6 mb-4">
  <!-- Dashboard info widget 2-->
  <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-primary h-100">
    <div class="card-body">
      <div class="d-flex align-items-center">
        <div class="flex-grow-1">
          <div class="small font-weight-bold text-primary mb-1">Jumlah Pengguna</div>
          <div class="h1"><?php echo $totalPengunjung['data']?></div>
          <!-- <div class="text-xs font-weight-bold text-danger d-inline-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down mr-1"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
          3%
        </div> -->
      </div>
      <div class="ml-2"><svg class="svg-inline--fa fa-tag fa-w-16 fa-2x text-gray-200" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="tag" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M0 252.118V48C0 21.49 21.49 0 48 0h204.118a48 48 0 0 1 33.941 14.059l211.882 211.882c18.745 18.745 18.745 49.137 0 67.882L293.823 497.941c-18.745 18.745-49.137 18.745-67.882 0L14.059 286.059A48 48 0 0 1 0 252.118zM112 64c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48z"></path></svg><!-- <i class="fas fa-tag fa-2x text-gray-200"></i> --></div>
    </div>
  </div>
</div>
</div>
</div>
<div class="row">
  <div class="col-6 md-4">
    <div class="card h-100">
      <div class="card-header">
        Semester History & Status
        <a href="<?php echo site_url('Pengaturan/Semester');?>" class="btn btn-sm btn-success float-right">Kelola</a>
      </div>
      <div class="card-body">
        <table class="table table-striped table-hover" width="100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Semester</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($semester == FALSE) { echo "<tr><td colspan='3'><center>Belum ada semester</center></td></tr>";}else{ $no = 1; foreach ($semester as $key) { ?>
              <tr>
                <td><?= $no;?></td>
                <td><span class="badge <?php $a = rand(1, 4); if($a == 1){ echo 'badge-primary';}elseif($a == 2){echo 'badge-info'; }elseif($a == 3){echo 'badge-warning';}else{ echo 'badge-orange'; }?>"><?= $key->SEMESTER;?></span></td>
                <td><?= ($key->STATUS == 1 ? '<span class="badge badge-success">Aktif</span>' : '<span class="badge badge-light">Non - Aktif</span>');?></td>
              </tr>
              <?php $no++;}}?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-6 md-4">
      <div class="card h-100">
        <div class="card-header">
          Koordinator
          <a href="<?php echo site_url('Koordinator');?>" class="btn btn-sm btn-info float-right">Kelola</a>
        </div>
        <div class="card-body">
          <table class="table table-striped table-hover" width="100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($koordinator == FALSE) { echo "<tr><td colspan='3'><center>Belum ada Koordinator</center></td></tr>";}else{ $no = 1; foreach ($koordinator as $key) { ?>
                <tr>
                  <td><?= $no;?></td>
                  <td><?= $key->NAMA;?></td>
                  <td><?= $key->EMAIL;?></td>
                </tr>
                <?php $no++;}}?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-6 mb-4">
        <div class="card card-header-actions h-100">
          <div class="card-header">
            <span>Statistik Like <code id="title-chart-like">Harian</code></span>
            <div class="dropdown no-caret">
              <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="areaChartDropdownExample" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="text-gray-500" data-feather="more-vertical"></i></button>
              <div class="dropdown-menu dropdown-menu-right animated--fade-in-up" aria-labelledby="areaChartDropdownExample">
                <a class="dropdown-item chart" data-namechart="chart-like" data-period="daily" href="#!">Harian</a>
                <a class="dropdown-item chart" data-namechart="chart-like" data-period="weekly" href="#!">Mingguan</a>
                <a class="dropdown-item chart" href="#!" data-namechart="chart-like" data-period="monthly">Bulanan</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div id="chart-like">

            </div>
          </div>
        </div>
      </div>
      <div class="col-6 mb-4">
        <div class="card card-header-actions h-100">
          <div class="card-header">
            <span>Statistik Pengunjung <code id="title-chart-pengunjung">Harian</code></span>
            <div class="dropdown no-caret">
              <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="areaChartDropdownExample" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="text-gray-500" data-feather="more-vertical"></i></button>
              <div class="dropdown-menu dropdown-menu-right animated--fade-in-up" aria-labelledby="areaChartDropdownExample">
                <a class="dropdown-item chart" data-namechart="chart-pengunjung" data-period="daily" href="#!">Harian</a>
                <a class="dropdown-item chart" data-namechart="chart-pengunjung" data-period="weekly" href="#!">Mingguan</a>
                <a class="dropdown-item chart" data-namechart="chart-pengunjung" data-period="monthly" href="#!">Bulanan</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div id="chart-pengunjung"></div>
          </div>
        </div>
      </div>
      <div class="col mb-4">

      </div>
    </div>
    <script>

    $(document).ready(function(){
      // initialChart
      options = {
        chart: {
          type: 'line'
        },
        series: [{
          name: "Loading....",
          data: ["Loading.."]
        }],
        xaxis: {
          categories: ["Loading..."]
        }
      }
      var chartLike       = new ApexCharts(document.querySelector("#chart-like"), options  );
      var chartPengunjung = new ApexCharts(document.querySelector("#chart-pengunjung"), options  );

      chartLike.render();
      chartPengunjung.render();
      const getChart = (nameChart, period) => {
        let label;
        if(nameChart == "chart-like"){
          label = "likes"
        }else{
          label = "pengunjung"
        }

        $.ajax({
          url         : "<?php echo site_url('Dashboard/getDataStatistic')?>",
          data        : {nameChart: nameChart, period: period} ,
          type        : "post",
          dataType    : "json",
          success     : function(res){
            if(nameChart == "chart-like"){
              chartLike.updateSeries([{
                name: label,
                data: res.total
              }])
              chartLike.updateOptions({
                xaxis : {
                  categories: res.date
                }
              })
            }else{
              chartPengunjung.updateSeries([{
                name: label,
                data: res.total
              }])
              chartPengunjung.updateOptions({
                xaxis : {
                  categories: res.date
                }
              })
            }

          }
        })
      }
      $('.chart').on('click', function(){
        getChart($(this).data('namechart'), $(this).data('period'))
        $("#title-"+$(this).data('namechart')).html($(this).html())
      })
      getChart('chart-like', 'daily');
      getChart('chart-pengunjung', 'daily');
    })

  </script>
