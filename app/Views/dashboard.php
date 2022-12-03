<?= $this->extend("template") ?>

<?= $this->section("content") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/assets/_dist/img/ShuyoSuvey_logo.png"/>
    <title>ShuyoSurvey | Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-warning shadow">
              <div class="card-header">
                <h3 class="card-title">Dashboard</h3>
                <!-- /.card-tools -->
            </div>
              <!-- /.card-header -->
              
                <div class="card-body">

                    <div class="container">
                    </div>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    
                    <div class="row">
                        <?php

use CodeIgniter\CLI\Console;

 foreach($survey as $val) : ?>
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
                                <div id="GoogleLineChart<?= $val['title'] ?>" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></div>
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
                        
                        <script>
                            google.charts.load('current', {'packages':['corechart', 'bar']});
                            google.charts.setOnLoadCallback(drawLineChart);
                            // Line Chart
                            function drawLineChart() {
                                <?php 
                                foreach ($survey_chart as $row){
                                ?>
                                    var data = google.visualization.arrayToDataTable([
                                        ['Day', 'Response'],
                                        <?php 
                                        foreach ($survey_chart as $row2){ 
                                            if($row['title'] == $row2['title']){
                                                echo "['".$row2['y']."',".$row2['a']."],";
                                            }  
                                        }
                                        ?>
                                    ]);
                                
                                    var options = {
                                        title: 'Line chart product sell wise',
                                        curveType: 'function',
                                        legend: {
                                            position: 'top'
                                        }
                                    };

                                    var chart = new google.visualization.LineChart(document.getElementById('GoogleLineChart<?php echo $row['title'] ?>'));
                                    console.log("<?php echo $row['title'] ?>");
                                    
                                    chart.draw(data, options);
                                <?php
                                }
                                ?>
                            }                            
                        </script>
                        <?php endforeach; ?>
                </div>
              <!-- /.card-body -->
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
</body>

<script>
  var serries = JSON.parse(`<?php print_r($survey_chart); ?>`);
  console.log(serries);
  var data = serries,
    config = {
      data: data,
      xkey: 'y',
      ykeys: ['a'],
      labels: ['This Week Total Registered Users'],
      fillOpacity: 0.6,
      hideHover: 'auto',
      behaveLikeLine: true,
      resize: true,
      pointFillColors:['#ffffff'],
      pointStrokeColors: ['black'],
      lineColors:['gray','red']
  };
 
  //for mories bar chart
  config.element = 'bar-chart';
  Morris.Bar(config);
 
  //for stacked bar chart
  config.element = 'stacked';
  config.stacked = true;
  Morris.Bar(config);
</script>

</html>
<?= $this->endSection() ?>