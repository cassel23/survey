<?= $this->extend("template") ?>

<?= $this->section("content") ?>
<!DOCTYPE html>
  <html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1", shrink-to-fit=no>
    <link rel="shortcut icon" type="image/png" href="/assets/_dist/img/ShuyoSuvey_logo.png"/>
    <title>ShuyoSurvey | Survey Question</title>

            
            <section class="content mx-5">
                <div class="card" style="background-color:lightsteelblue; width: 900px;height: 1500px;">
                    <div class="card-body home-card-body">
                        <div class="row">

                        <div class="card-body">
                        <div class="col-md-10 col-sm-12 px-0 question-header">
                          <?php foreach($pertanyaan as $val) : ?>                      
                             <div class="choices-container-form">
                              <div class="form-group">
                                <label><?= $val['pertanyaan'] ?></label>
                                <?php if($val['jenis'] == 'text' || $val['jenis'] == 'email') : ?>
                                <input type="<?= $val['jenis'] ?>" name="<?= $val['id'] ?>" class="form-control">
                                <?php endif; ?>
                                <?php if($val['jenis'] == 'emoticon') : ?>
                                  
                                  <?php endif; ?>
                              </div>
                          <?php endforeach; ?>
                        </div>

                        </div>
                    </div>
                </div>
            </section>
           
  </html>

<?= $this->endSection() ?>
