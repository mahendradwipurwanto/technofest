</div>
</main>
<footer class="footer mt-auto footer-light">
  <div class="container-fluid">
    <div class="row">
      <!-- SUPPPORT THE DEVELOPER, PLEASE DO NOT REMOVE OR CHANGES THIS LINE -->
      <div class="col-md-6 small">Copyright &#xA9; TechnoFest 2021 supported by <a href="www.nestivent.org" target="_blank"><i>Nestivent.org</i></a></div>
      <!-- END SUPPORT LINE -->
    </div>
  </div>
</footer>
</div>
</div>

<script src="<?php echo base_url();?>assets/backend/js/scripts.js"></script>
<script src="<?php echo base_url();?>assets/backend/js/plugin/Chart.js/2.9.3/Chart.min.js"></script>
<script src="<?php echo base_url();?>assets/backend/js/plugin/momentjs/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/backend/js/plugin/daterangepicker/daterangepicker.min.js"></script>
<script src="<?php echo base_url();?>assets/backend/js/demo/date-range-picker-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  var table = $('#dataTable').DataTable( {
    scrollX:        true,
    "autoWidth": false,
  } );
} );
  $(document).ready(function() {
    $('.select2').select2({
      placeholder: "Pilih data",
      allowClear: true
    });
  });
  $('#dev').change(function() {
      // this will contain a reference to the checkbox
          window.location.href = "<?= site_url('Pengaturan/dev_mode/'.(($dev_mode == 1) ? 0 : 1).'/'.$this->uri->uri_string());?>";

  });
</script>
</body>
</html>
