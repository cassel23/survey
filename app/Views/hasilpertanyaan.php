<?= $this->extend("template") ?>

<?= $this->section("content") ?>
<!DOCTYPE html>
  <html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1", shrink-to-fit=no>
    <link rel="shortcut icon" type="image/png" href="/assets/_dist/img/ShuyoSuvey_logo.png"/>
    <title>ShuyoSurvey | Survey Question</title>

            
            <section class="content mx-5">
                <div class="card" style="background-color:lightsteelblue; width: 1100px;height: 650px;">
                    <div class="card-body home-card-body">
                        <div class="row">

                        <div class="card-body">
                          <?php foreach($pertanyaan as $val) : ?>                      
                        <p><?= $val['pertanyaan'] ?></p>
                        
                      <?php endforeach; ?>
                          </div>

                        </div>
                    </div>
                </div>
            </section>
           
  </html>

<?= $this->endSection() ?>
