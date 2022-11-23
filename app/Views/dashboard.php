<?= $this->extend("template") ?>

<?= $this->section("content") ?>
<!DOCTYPE html>
<html lang="en">

<div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-warning shadow">
              <div class="card-header">
                <h3 class="card-title">Dashboard</h3>

                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                    <div class="card bg-gradient-info">
                    <div class="card-header border-0">
                        <h3 class="card-title">
                        <i class="fas fa-th mr-1"></i>
                        Sample Survey
                        </h3>    
                    </div>

                    <div class="card-header border-0 ml-auto">
                            <div class="input-group">
                                <button type="button" class="btn btn-default float-left" id="daterange-btn">
                                <i class="far fa-calendar-alt"></i> Date range picker
                                <i class="fas fa-caret-down"></i>
                                </button>
                            </div>
                     </div>

                    <div class="card-body">
                        <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer justify-content-center">
                        <div class="row justify-content-center">
                        <div class="col-4 text-center">
                            <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                                data-fgColor="#39CCCC">
                            </input>
                            <div class="text-white">Total Responses</div>
                        </div>
                        <!-- ./col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
</div>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="../../plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->

<script>
                            $(function () {
                            //Date range as a button
                                $('#daterange-btn').daterangepicker(
                                {
                                    ranges   : {
                                    'Today'       : [moment(), moment()],
                                    'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                    'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                                    'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                                    'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                                    },
                                    startDate: moment().subtract(29, 'days'),
                                    endDate  : moment()
                                },
                                function (start, end) {
                                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                                }
                                )
                            </script>

</html>
<?= $this->endSection() ?>