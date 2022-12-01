<?= $this->extend("template") ?>

<?= $this->section("content") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/assets/_dist/img/ShuyoSuvey_logo.png"/>
    <title>ShuyoSurvey | Dashboard</title>
</head>

<div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-warning shadow">
              <div class="card-header">
                <h3 class="card-title">Dashboard</h3>
                <!-- /.card-tools -->
            </div>
              <!-- /.card-header -->
              
                <div class="card-body">
                    <div class="row">
                        <?php foreach($survey as $val) : ?>
                        <div class="col-md-6">
                            <div class="card bg-gradient-info ">
                            <div class="row">
                                <div class="col-6 p-3">
                                    <h3 class="card-title">
                                        <i class="fas fa-th mr-1"></i>
                                        <?= $val['title'] ?>
                                    </h3>
                                </div>
                                <div class="col-6 p-3">
                                    <div class="input-group ">
                                        <button type="button" class="btn btn-default ml-auto" id="daterange-btn">
                                            <i class="far fa-calendar-alt"></i> 
                                            Date range picker
                                            <i class="fas fa-caret-down"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="card-header border-0 ml-auto">
                                    
                            </div>

                            <div class="card-body">
                                <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer justify-content-center">
                                <div class="row justify-content-center">
                                <div class="col-4 text-center">
                                    <div style="display:inline;width:60px;height:60px;">                                        
                                    <canvas style="width: 60px; height: 60px;" width="75" height="75"></canvas>
                                        <input type="text" class="knob mr-auto" data-readonly="true" value="<?= $val['published_at'] ?>" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 120px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px none; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;"></div>
                                        <div class="text-white">Published On</div>
                                     </div>
                                    <div class="col-4 text-center">
                                        <div style="display:inline;width:60px;height:60px;">
                                        <canvas style="width: 60px; height: 60px;" width="75" height="75"></canvas>
                                        <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px none; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;"></div>
                                        <div class="text-white">Total Responses</div>
                                    </div>
                                    <!-- ./col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-footer -->
                            </div>
                        </div>
                        <?php endforeach; ?>
                </div>
              <!-- /.card-body -->
        </div>
        <!-- ./col -->
</div>
<!-- /.row -->

</html>
<?= $this->endSection() ?>