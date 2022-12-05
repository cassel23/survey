<?= $this->extend("template") ?>

<?= $this->section("content") ?>
<!DOCTYPE html>
  <html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1", shrink-to-fit=no>
    <link rel="shortcut icon" type="image/png" href="/assets/_dist/img/ShuyoSuvey_logo.png"/>
    <title>ShuyoSurvey | Survey Question</title>

            
            <section class="content mx-5">

<div class="card mx-5 justify-content-center" style="background-color:darkblue; width: 900px;">
  <div class="card-body home-card-body">
    <div class="row">
    <div class="card-body justify-content-center justify-content-center">

    </div>
    </div>
  </div>
</div>


                <div class="card mx-5 justify-content-center" style="background-color:lightsteelblue; width: 900px;">
                    <div class="card-body home-card-body justify-content-center">
                        <div class="row">


                          <div class="card-body">
                            <div class="col-md-10 col-sm-12 px-0 question-header">
                            <div class="row">
                              <div class="col-12 col-sm-12">
                                
                                <?php foreach($pertanyaan as $val) : ?>                      
                                  <div class="choices-container-form">
                                          <div class="info-box bg-light mx-5">
                                              <span class="info-box-content">
                                          <div class="form-group">
                                            <label><?= $val['pertanyaan'] ?></label>
                                            <?php if($val['jenis'] == 'text' || $val['jenis'] == 'email') : ?>
                                              <input type="<?= $val['jenis'] ?>" name="<?= $val['id'] ?>" class="form-control">
                                              <?php endif; ?>
                                              
                                              <?php if($val['jenis'] == 'emoticon') : ?>
                                                <div class="form-group">
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
                                        <label class="form-check-label">
                                          <?php foreach($choice as $val) : ?> 
                                          <table>
                                                  <tr>
                                                    <td><?= $val['pilihan'] ?></td>
                                                  </tr>
                                                </table>
                                                <?php endforeach; ?>
                                              </label>
                                        
                                      </div>
                                      <?php endif; ?>  

                                      <?php if($val['jenis'] == 'multiple-choice') : ?>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio1">
                                        <label class="form-check-label">
                                          <?php foreach($choice as $val) : ?> 
                                          <table>
                                                  <tr>
                                                    <td><?= $val['pilihan'] ?></td>
                                                  </tr>
                                                </table>
                                                <?php endforeach; ?>
                                              </label>
                                        
                                      </div>
                                      <?php endif; ?>  
                                      
                                      <?php if($val['jenis'] == 'image') : ?>
                                        <div class="card col-12 col-sm-12" style="background-color:lightgoldenrodyellow;">
                                        <div class="form-group">
                                                  <center><label for="exampleInputFile">Image input</label></center>
                                                    <div class="input-group">
                                                      <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                                          <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                    <?php endif; ?>


                                    <?php if($val['jenis'] == 'date') : ?>
                                      <div class="row">
                                        <div class="form-group">
                                    <label>Date:</label>
                                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
                                      <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                      </div>
                                      </div>
                                      </div>
                                          </div>
                                
                                      <?php endif; ?>

                                          </div>
                                    </div>
                                    
                            
                          <?php endforeach; ?>

                                    </span>
                      </div>
                          <div class="row">
                            <div class="col-sm-7 mt-5">
                              <input type="submit" value="Submit" class="btn btn-success float-right">
                            </div>
                          </div>
                          </div>
                        </div>
                        </div>
                      </div>
                     </div>
                    </div>
                    </div>
                  </div>
                </div>
                    </section>                    
                    </html>
                    
 <?= $this->endSection() ?>    