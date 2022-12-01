<?= $this->extend("template") ?>

<?= $this->section("content") ?>

  <!DOCTYPE html>
  <html lang="en">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1", shrink-to-fit=no>
  <link rel="shortcut icon" type="image/png" href="/assets/_dist/img/ShuyoSuvey_logo.png"/>
  <title>ShuyoSurvey | Edit Question</title>
       <!-- Font Awesome Icon Library -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <style>
              .checked {
                color: pink;
              }
          </style>
</head>
            
<div class="wrapper">        
        <!-- ./row -->
        <form action="/pertanyaan/<?= $pertanyaan['id'] ?>" method="post">
        <div class="row">
          <div class="col-8 col-sm-8">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-question-tab" data-toggle="pill" href="#custom-tabs-one-question" role="tab" aria-controls="custom-tabs-one-question" aria-selected="true">Question</a>
                  </li>
                  </ul>
              </div>

              <div class = "card-body">
                <div class = "tab-content" id="custom-tabs-one-tabContent">
                   <div class="tab-pane fade show active" id="custom-tabs-one-question" role="tabpanel" aria-labelledby="custom-tabs-one-question-tab">
                  
                          <div class="row">
                            <div class="col-5 col-sm-2">
                              
                              <h5>
                                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                                  <a class="nav-link" id="vert-tabs-single-tab" data-toggle="pill" href="#vert-tabs-single" role="tab" aria-controls="vert-tabs-single" aria-selected="true"><?= $pertanyaan['jenis'] ?></a>
                                </div>
                              </h5>
                            </div>
                              <div class="col-7 col-sm-9">
                                <div class="tab-content" id="vert-tabs-tabContent">  
                                  <div class="tab-pane text-left fade" id="vert-tabs-single" role="tabpanel" aria-labelledby="vert-tabs-single-tab">

                                      <div class="card-body">
                                        <div class="form-group">
                                          <label for="inputName">Question</label>
                                          <input type="text" id="inputName" class="form-control" placeholder="Type your question">
                                        </div>
                                        <div class="form-group">
                                          <label for="inputDescription">Option</label>
                                          <input type="text" id="inputName" class="form-control" placeholder="Type your option">
                                          <input type="text" id="inputName" class="form-control  mt-2" placeholder="Type your option">
                                          <input type="text" id="inputName" class="form-control  mt-2" placeholder="Type your option">
                                          <input type="text" id="inputName" class="form-control  mt-2" placeholder="Type your option">
                                          <input type="text" id="inputName" class="form-control  mt-2" placeholder="Type your option">
                                        </div>
                                          <div class="ml-2">
                                               <div class="icheck-primary">
                                                  <input type="checkbox" id="remember">
                                                  <label for="remember" style="font-size: 90%;">
                                                    Wajib di isi
                                                  </label>
                                                </div>
                                          </div>
                                      </div>
                                    </div>



                                    <div class="tab-pane fade" id="vert-tabs-range" role="tabpanel" aria-labelledby="vert-tabs-range-tab">

                                        <div class="card-body">
                                          <div class="form-group">
                                            <label for="inputName">Question</label>
                                            <input type="text" id="inputName" class="form-control" placeholder="Type your question">
                                          </div>
                                        </div>

                                          <div class="form-group">
                                              <label for="inputName">Rating</label>
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

                                        <div class="ml-2">
                                            <div class="icheck-primary">
                                                <input type="checkbox" id="remember">
                                                <label for="remember" style="font-size: 90%;">
                                                  Wajib di isi
                                                </label>
                                              </div>
                                        </div>
                                        </div>

                                      <div class="tab-pane text-left fade active show" id="vert-tabs-default" role="tabpanel" aria-labelledby="vert-tabs-default-tab">
                                          <?php if($pertanyaan['jenis'] == 'text') : ?>
                                          <div class="card-body">
                                            <div class="form-group">
                                              <label for="inputName">Question</label>
                                              <input type="text" id="inputName" class="form-control" placeholder="Type your question" name="quest_text" value="<?= $pertanyaan['pertanyaan'] ?>">
                                            </div>
                                          </div>
                                          <?php endif; ?>
                                          <?php if($pertanyaan['jenis'] == 'range') : ?>
                                          <div class="card-body">
                                            <div class="form-group">
                                              <label for="inputName">Question</label>
                                              <input type="text" id="inputName" class="form-control" placeholder="Type your question" name="quest_range" value="<?= $pertanyaan['pertanyaan'] ?>">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                              <label for="inputName">Rating</label>
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
                                          <?php if($pertanyaan['jenis'] == 'email') : ?>
                                            <div class="card-body">
                                              <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control" id="inputEmail3" placeholder="Email" name="quest_email" value="<?= $pertanyaan['pertanyaan'] ?>">
                                                </div>
                                              </div>
                                          <?php endif; ?>
                                          <?php if($pertanyaan['jenis'] == 'image') : ?>
                                            <div class="card-body">
                                                <div class="form-group">
                                                  <label for="inputName">Question</label>
                                                  <input type="text" id="inputName" class="form-control" placeholder="Type your question" name="quest_image" value="<?= $pertanyaan['pertanyaan'] ?>">
                                                </div>
                                            
                                                <div class="form-group">
                                                  <label for="exampleInputFile">Image input</label>
                                                    <div class="input-group">
                                                      <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                                          <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                                                      </div>
                                                    </div>
                                                </div>

                                                <div class="ml-2">
                                                  <div class="icheck-primary">
                                                    <input type="checkbox" id="remember">
                                                      <label for="remember" style="font-size: 90%;">
                                                        Wajib di isi
                                                      </label>
                                                 </div>
                                               </div>
                                              </div>
                                          <?php endif; ?>
                                          <?php if($pertanyaan['jenis'] == 'date') : ?>
                                          <div class="card-body">
                                                <div class="form-group">
                                                  <label for="inputName">Question</label>
                                                  <input type="text" id="inputName" class="form-control" placeholder="Type your question" name="quest_date" value="<?= $pertanyaan['pertanyaan'] ?>">
                                                </div>

                                                <div class="ml-2">
                                                  <div class="icheck-primary">
                                                    <input type="checkbox" id="remember">
                                                      <label for="remember" style="font-size: 90%;">
                                                        Wajib di isi
                                                      </label>
                                                 </div>
                                               </div>
                                              </div>
                                          <?php endif; ?>
                                          <?php if($pertanyaan['jenis'] == 'emoticon') : ?>
                                            <div class="card-body">
                                            <div class="form-group">
                                              <label for="inputName">Question</label>
                                              <input type="text" id="inputName" class="form-control" placeholder="Type your question" name="quest_emoticon" value="<?= $pertanyaan['pertanyaan'] ?>">
                                            </div>

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
                                      </div>
                                      <div class="tab-pane text-left fade active show" id="vert-tabs-default" role="tabpanel" aria-labelledby="vert-tabs-default-tab">
                                          <?php if($pertanyaan['jenis'] == 'single-choice') : ?>
                                          <div class="card-body">
                                            <div class="form-group">
                                              <label for="inputName">Question</label>
                                              <input type="text" id="inputName" class="form-control" placeholder="Type your question" name="quest_single_choice" value="<?= $pertanyaan['pertanyaan'] ?>">
                                            </div>
                                              <div class="form-group">
                                                <label for="inputDescription">Option</label>
                                                <?php foreach($choice as $val) : ?> <tr>
                                                <input type="text" id="inputName" class="form-control mt-2" placeholder="Type your option" name="opt_single[]" value="<?= $val['pilihan'] ?>">
                                                </tr>
                                                <?php endforeach; ?>
                                              </div>
                                          </div>
                                          <?php endif; ?>
                                          <?php if($pertanyaan['jenis'] == 'multiple-choice') : ?>
                                            <div class="card-body">
                                              <div class="form-group">
                                                <label for="inputName">Question</label>
                                                <input type="text" id="inputName" class="form-control" placeholder="Type your question" name="quest_multiple_choice" value="<?= $pertanyaan['pertanyaan'] ?>">
                                              </div>
                                              <div class="form-group">
                                                <label for="inputDescription">Option</label>
                                                <input type="text" id="inputName" class="form-control" placeholder="Type your option" name="opt_multiple[]" value="<?= $pertanyaan['pertanyaan'] ?>">
                                                <input type="text" id="inputName" class="form-control mt-2" placeholder="Type your option" name="opt_multiple[]" value="<?= $pertanyaan['pertanyaan'] ?>">
                                                <input type="text" id="inputName" class="form-control mt-2" placeholder="Type your option" name="opt_multiple[]" value="<?= $pertanyaan['pertanyaan'] ?>">
                                                <input type="text" id="inputName" class="form-control mt-2" placeholder="Type your option" name="opt_multiple[]" value="<?= $pertanyaan['pertanyaan'] ?>">
                                                <input type="text" id="inputName" class="form-control mt-2" placeholder="Type your option" name="opt_multiple[]" value="<?= $pertanyaan['pertanyaan'] ?>">
                                              </div>
                                            </div>

                                            <div class="ml-2">
                                                <div class="icheck-primary">
                                                    <input type="checkbox" id="remember">
                                                    <label for="remember" style="font-size: 90%;">
                                                      Wajib di isi
                                                    </label>
                                                  </div>
                                            </div>
                                            <?php endif; ?>
                                      </div>

                                      <div class="row">
                                          <div class="col-sm-12">
                                            <input type="submit" value="Simpan" class="btn btn-success float-right">
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
              <!-- /.card -->
            </div>
        </div>

            </form>
        </div>
    </div>
</div>                                
      
<?= $this->endSection() ?>