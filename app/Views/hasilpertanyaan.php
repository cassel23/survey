<?= $this->extend("template") ?>

<?= $this->section("content") ?>
<style>
  .rating {
  display: inline-block;
  position: relative;
  height: 50px;
  line-height: 50px;
  font-size: 50px;
}

.rating label {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  cursor: pointer;
}

.rating label:last-child {
  position: static;
}

.rating label:nth-child(1) {
  z-index: 5;
}

.rating label:nth-child(2) {
  z-index: 4;
}

.rating label:nth-child(3) {
  z-index: 3;
}

.rating label:nth-child(4) {
  z-index: 2;
}

.rating label:nth-child(5) {
  z-index: 1;
}

.rating label input {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}

.rating label .icon {
  float: left;
  color: transparent;
}

.rating label:last-child .icon {
  color: #000;
}

.rating:not(:hover) label input:checked ~ .icon,
.rating:hover label:hover input ~ .icon {
  color: #09f;
}

.rating label input:focus:not(:checked) ~ .icon:last-child {
  color: #000;
  text-shadow: 0 0 5px #09f;
}
</style>
<?= $this->endSection() ?>
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
    <div class="card-body justify-content-center justify-content-center text-white">
      <h4><?= $survey['title'] ?></h4>
      <?= $survey['description'] ?>
    </div>
    </div>
  </div>
</div>


                <div class="card mx-5 justify-content-center" style="background-color:lightsteelblue; width: 900px;">
                    <div class="card-body home-card-body justify-content-center">

                    <form action="/hasilpertanyaan/<?= $survey['id'] ?>" method="post" enctype="multipart/form-data">
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
                                                
                                                <br>
                                                  <div class="form-group">
                                                    <label>
                                                      <input type="radio" name="<?= $val['id'] ?>" value="1" />
                                                      <span class="far fa-meh"></span>
                                                    </label>
                                                    <label>
                                                      <input type="radio" name="<?= $val['id'] ?>" value="2" />
                                                      <span class="far fa-smile"></span>
                                                    </label>
                                                    <label>
                                                      <input type="radio" name="<?= $val['id'] ?>" value="3" />
                                                      <span class="far fa-laugh-beam"></span>  
                                                    </label>
                                                    <label>
                                                      <input type="radio" name="<?= $val['id'] ?>" value="4" />
                                                      <span class="far fa-frown"></span>
                                                    </label>
                                                    <label>
                                                      <input type="radio" name="<?= $val['id'] ?>" value="5" />
                                                      <span class="far fa-angry"></span>
                                                    </label>
                                                  </div>

                                                <!-- <div class="form-group">
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
                                                </div> -->
                                                
                                                <?php endif; ?>
                                                
                                                <?php if($val['jenis'] == 'range') : ?>
                                                  <br>
                                                  <div class="form-group rating">
                                                    <label>
                                                      <input type="radio" name="<?= $val['id'] ?>" value="1" />
                                                      <span class="icon">★</span>
                                                    </label>
                                                    <label>
                                                      <input type="radio" name="<?= $val['id'] ?>" value="2" />
                                                      <span class="icon">★</span>
                                                      <span class="icon">★</span>
                                                    </label>
                                                    <label>
                                                      <input type="radio" name="<?= $val['id'] ?>" value="3" />
                                                      <span class="icon">★</span>
                                                      <span class="icon">★</span>
                                                      <span class="icon">★</span>   
                                                    </label>
                                                    <label>
                                                      <input type="radio" name="<?= $val['id'] ?>" value="4" />
                                                      <span class="icon">★</span>
                                                      <span class="icon">★</span>
                                                      <span class="icon">★</span>
                                                      <span class="icon">★</span>
                                                    </label>
                                                    <label>
                                                      <input type="radio" name="<?= $val['id'] ?>" value="5" />
                                                      <span class="icon">★</span>
                                                      <span class="icon">★</span>
                                                      <span class="icon">★</span>
                                                      <span class="icon">★</span>
                                                      <span class="icon">★</span>
                                                    </label>
                                                  </div>
                                    <?php endif; ?>
                                    
                                    <?php if($val['jenis'] == 'single-choice') : ?>
                                      <?php foreach($choice as $key) : ?> 
                                        <?php if($key['pertanyaan_id'] == $val['id']) : ?>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="<?= $val['id'] ?>" value="<?= $key['pilihan'] ?>">
                                          <label class="form-check-label"><?= $key['pilihan'] ?></label>
                                        </div>
                                        <?php endif; ?>  
                                      <?php endforeach; ?>
                                      <?php endif; ?>  

                                      <?php if($val['jenis'] == 'multiple-choice') : ?>
                                        <div class="form-group">
                                          <?php foreach($choice as $key) : ?> 
                                            <?php if($key['pertanyaan_id'] == $val['id']) : ?>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="<?= $val['id'] ?>" value="<?= $key['pilihan'] ?>">
                                                <label class="form-check-label"><?= $key['pilihan'] ?></label>
                                              </div>
                                            <?php endif; ?>  
                                          <?php endforeach; ?>
                                        </div>
                                      <?php endif; ?>  
                                      
                                      <?php if($val['jenis'] == 'image') : ?>
                                        <div class="card col-12 col-sm-12" style="background-color:lightgoldenrodyellow;">
                                        <div class="form-group">
                                                  <center><label for="exampleInputFile">Image input</label></center>
                                                    <div class="input-group">
                                                      <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="<?= $val['id'] ?>">
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
                                      <input type="date" class="form-control datetimepicker-input" data-target="#reservationdate" name="<?= $val['id'] ?>" />
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
                      </form>
                    </div>
                    </div>
                  </div>
                </div>
                    </section>                    
                    </html>
                    
 <?= $this->endSection() ?>    
 <?= $this->section("js") ?>
 <script>
  $(':radio').change(function() {
    console.log('New star rating: ' + this.value);
  });
 </script>
 <?= $this->endSection() ?>    