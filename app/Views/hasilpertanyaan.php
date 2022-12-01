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
                                  <div class="form-group">
                                              <label for="inputName">Rating</label>
                                              <div class="component-preview">
                                                <div class="answer numeric-scale">
                                                  <ul>
                                                      <a class="far fa-meh"></a>
                                                      <a class="far fa-smile"></a>
                                                      <a class="far fa-laugh-beam"></a>
                                                      <a class="far fa-frown"></a>
                                                      <a class="far fa-angry"></a>
                                                  </ul>
                                                </div>
                                              </div>
                                            </div>
                                               
                                <?php endif; ?>

                                <?php if($val['jenis'] == 'range') : ?>
                                  <div class="form-group">
                                              <div class="component-preview">
                                                <div class="answer numeric-scale">
                                                  <ul>
                                                      <a class="fa fa-star custom"></a>
                                                      <a class="fa fa-star custom"></a>
                                                      <a class="fa fa-star custom"></a>
                                                      <a class="fa fa-star custom"></a>
                                                      <a class="fa fa-star custom"></a>
                                                  </ul>
                                                </div>
                                              </div>
                                          </div>
                                <?php endif; ?>

                                <?php if($val['jenis'] == 'single-choice') : ?>
                                  <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1">
                          <label class="form-check-label"></label>
                          <?php foreach($choice as $val) : ?> <tr>
                            <td><?= $val['pilihan'] ?></td></tr>
                          <?php endforeach; ?>
                           </div>
                            <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1" checked>
                          <label class="form-check-label">Radio checked</label>
                        </div>
                      </div>
                      </div>
                                 
                        
                                 <?php endif; ?>  
                          <?php endforeach; ?>
                        </div>

                        </div>
                    </div>
                </div>
            </section>
           
  </html>

<?= $this->endSection() ?>
