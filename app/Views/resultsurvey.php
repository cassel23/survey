<?= $this->extend("template") ?>

<?= $this->section("content") ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/assets/_dist/img/ShuyoSuvey_logo.png"/>
    <title>ShuyoSurvey | Result Survey</title>
</head>

<label>Nama Survey</label>
<select class="form-control select2 col-3" style="width: 100%;" id="survey">
  
<?php foreach($survey as $val) : ?>
  <option value="<?= $val['id'] ?>" <?= isset($_GET['id']) && $_GET['id'] == $val['id'] ? 'selected' : '' ?>>
    <tr>
      <td><?= $val['title'] ?></td>
    </tr>
  </option>
  <?php endforeach; ?>
  
  
</select>


<div class="card card-danger mt-3">
  <div class="card-header">
    <h3 class="card-title">Question Result</h3>
  </div>

  
  <?php if (isset($pertanyaan)) : ?>
    <div class="card-body">
       <div class="info-box bg-light">
         <span class="info-box-content">
           <div class="form-group">
              <ol>
                <?php foreach ($pertanyaan as $val) : ?>
                  <li>
                    <?= $val['pertanyaan'] ?>
                    <ul>
                      <?php foreach ($respon as $res) : 
                        if($res['pertanyaan_id'] == $val['id']) : ?>
                        <li><?= $res['jawaban'] ?></li>
                        <?php endif;endforeach; ?>
                      </ul>
                    </li>
                    <?php endforeach; ?>
                    
                  </ol>
                </div>
                </span>
                </div>
              </div>

              <?php endif; ?>

            </div>
            


            <script src="../../plugins/jquery/jquery.min.js"></script>

<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../plugins/chart.js/Chart.min.js"></script>

<script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>

<script src="../../dist/js/demo.js"></script>

<script>
    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Chrome',
          'IE',
          'FireFox',
          'Safari',
          'Opera',
          'Navigator',
      ],
      datasets: [
        {
          data: [700,500,400,600,300,100],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
    </script>
            </div>
  </div>


<?= $this->endSection() ?>

<?= $this->section("js") ?>
<script>
  $("#survey").change(function(){
      window.location.href = '/resultsurvey?id=' + $(this).val()
    });
</script>

<?= $this->endSection() ?>
