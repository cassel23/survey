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

                        <div class="form-group">
                            <div class="input-group">
                                <button type="button" class="btn btn-default float-left" id="daterange-btn">
                                <i class="far fa-calendar-alt"></i> Date range picker
                                <i class="fas fa-caret-down"></i>
                                </button>
                            </div>
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
</html>
<?= $this->endSection() ?>