<?= $this->extend("template") ?>

<?= $this->section("content") ?>

  <!DOCTYPE html>
  <html lang="en">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1", shrink-to-fit=no>
  <link rel="shortcut icon" type="image/png" href="/assets/_dist/img/ShuyoSuvey_logo.png"/>
  <title>ShuyoSurvey | Create Question</title>

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
        <form action="/choice/<?= $survey['id'] ?>" method="post">
        <div class="row">
          <div class="col-8 col-sm-8">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-question-tab" data-toggle="pill" href="#custom-tabs-one-question" role="tab" aria-controls="custom-tabs-one-question" aria-selected="true">Question</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-publish-tab" data-toggle="pill" href="#custom-tabs-one-publish" role="tab" aria-controls="custom-tabs-one-publish" aria-selected="false">Publish</a>
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
                                  <a class="nav-link" id="vert-tabs-single-tab" data-toggle="pill" href="#vert-tabs-single" role="tab" aria-controls="vert-tabs-single" aria-selected="true">Single Choice</a>
                                  <a class="nav-link" id="vert-tabs-multiple-tab" data-toggle="pill" href="#vert-tabs-multiple" role="tab" aria-controls="vert-tabs-multiple" aria-selected="false">Multiple Choice</a>
                                  <a class="nav-link" id="vert-tabs-range-tab" data-toggle="pill" href="#vert-tabs-range" role="tab" aria-controls="vert-tabs-range" aria-selected="false">Range</a>
                                  <a class="nav-link" id="vert-tabs-text-tab" data-toggle="pill" href="#vert-tabs-text" role="tab" aria-controls="vert-tabs-text" aria-selected="false">Text</a>
                                  <a class="nav-link" id="vert-tabs-email-tab" data-toggle="pill" href="#vert-tabs-email" role="tab" aria-controls="vert-tabs-email" aria-selected="false">Email</a>
                                  <a class="nav-link" id="vert-tabs-image-tab" data-toggle="pill" href="#vert-tabs-image" role="tab" aria-controls="vert-tabs-image" aria-selected="false">Image Capture</a>
                                  <a class="nav-link" id="vert-tabs-date-tab" data-toggle="pill" href="#vert-tabs-date" role="tab" aria-controls="vert-tabs-date" aria-selected="false">Date</a>
                                  <a class="nav-link" id="vert-tabs-emoticon-tab" data-toggle="pill" href="#vert-tabs-emoticon" role="tab" aria-controls="vert-tabs-emoticon" aria-selected="false">Emoticon</a>
                                </div>
                              </h5>
                            </div>
                              <div class="col-7 col-sm-9">
                                <div class="tab-content" id="vert-tabs-tabContent">  
                                  <div class="tab-pane text-left fade" id="vert-tabs-single" role="tabpanel" aria-labelledby="vert-tabs-single-tab">

                                      <div class="card-body">
                                        <div class="form-group">
                                          <label for="inputName">Question</label>
                                          <input type="text" id="inputName" class="form-control" placeholder="Type your question" name="quest_single_choice">
                                        </div>
                                        <div class="form-group">
                                          <label for="inputDescription">Option</label>
                                          <input type="text" id="inputName" name="opt_single[]" class="form-control" placeholder="Type your option">
                                          <input type="text" id="inputName" name="opt_single[]" class="form-control  mt-2" placeholder="Type your option">
                                          <input type="text" id="inputName" name="opt_single[]" class="form-control  mt-2" placeholder="Type your option">
                                          <input type="text" id="inputName" name="opt_single[]" class="form-control  mt-2" placeholder="Type your option">
                                          <input type="text" id="inputName" name="opt_single[]" class="form-control  mt-2" placeholder="Type your option">
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

                                   <div class="tab-pane fade" id="vert-tabs-multiple" role="tabpanel" aria-labelledby="vert-tabs-multiple-tab">

                                            <div class="card-body">
                                              <div class="form-group">
                                                <label for="inputName">Question</label>
                                                <input type="text" id="inputName" class="form-control" placeholder="Type your question" name="quest_multiple_choice">
                                              </div>
                                              <div class="form-group">
                                                <label for="inputDescription">Option</label>
                                                <input type="text" id="inputName" name="opt_multiple[]" class="form-control" placeholder="Type your option">
                                                <input type="text" id="inputName" name="opt_multiple[]" class="form-control mt-2" placeholder="Type your option">
                                                <input type="text" id="inputName" name="opt_multiple[]" class="form-control mt-2" placeholder="Type your option">
                                                <input type="text" id="inputName" name="opt_multiple[]" class="form-control mt-2" placeholder="Type your option">
                                                <input type="text" id="inputName" name="opt_multiple[]" class="form-control mt-2" placeholder="Type your option">
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

                                        <div class="tab-pane fade" id="vert-tabs-text" role="tabpanel" aria-labelledby="vert-tabs-text-tab">
                                          <div class="card-body">
                                            <div class="form-group">
                                              <label for="inputName">Question</label>
                                              <input type="text" id="inputName" class="form-control" placeholder="Type your question" name="quest_text">
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

                                          <div class="tab-pane fade" id="vert-tabs-email" role="tabpanel" aria-labelledby="vert-tabs-email-tab">
                                            <div class="card-body">
                                              <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control" id="inputEmail3" placeholder="Email" name="quest_email">
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
                                            </div>

                                            <div class="tab-pane fade" id="vert-tabs-image" role="tabpanel" aria-labelledby="vert-tabs-image-tab">
                                              <div class="card-body">
                                                <div class="form-group">
                                                  <label for="inputName">Question</label>
                                                  <input type="text" id="inputName" class="form-control" placeholder="Type your question" name="quest_image">
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
                                            </div>

                                            <div class="tab-pane fade" id="vert-tabs-date" role="tabpanel" aria-labelledby="vert-tabs-date-tab">
                                              <div class="card-body">
                                                <div class="form-group">
                                                  <label for="inputName">Question</label>
                                                  <input type="text" id="inputName" class="form-control" placeholder="Type your question" name="quest_date">
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

                                        <div class="tab-pane fade" id="vert-tabs-emoticon" role="tabpanel" aria-labelledby="vert-tabs-emoticon-tab">
                                          <div class="card-body">
                                            <div class="form-group">
                                              <label for="inputName">Question</label>
                                              <input type="text" id="inputName" class="form-control" placeholder="Type your question" name="quest_emoticon">
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
                                        <div class="info-box bg-gradient-warning">
                                          <span class="info-box-icon"><i class="fa fa-mouse-pointer"></i></span>
                                          <div class="info-box-content">
                                            <span class="info-box-text">Click any question type to start</span>
                                          </div>
                                          <!-- /.info-box-content -->
                                        </div>
                                      </div>

                                  </div>
                            </div>
                         </div>
                    </div>
                      

                          <div class="tab-pane fade" id="custom-tabs-one-publish" role="tabpanel" aria-labelledby="custom-tabs-one-publish-tab">
                          <center> 
                          <h4>Link Survey</h4>

                              <div class="card-body">
                                  <div class="row">
                                      <div class="col-mr-4">
                                        <?php if($survey['status'] == 'PUBLISHED') : ?>
                                          <a href="/hasilpertanyaan/<?= $survey['id'] ?>" target="_blank"><?= getenv("app.baseURL") . "hasilpertanyaan/".$survey['id'] ?></a>
                                        <?php endif; ?>
                                        <a class="btn btn-success float-right" href="/survey/publish/<?= $survey['id'] ?>">Generate Link</a>
                                      </div>
                                  </div>
                              </div>
                              </center>
                          </div>

                </div>
              </div>      

              </div>
                <div class="row">
                  <div class="col-sm-12">
                    <input type="submit" value="Add" class="btn btn-success float-right">
                  </div>
                </div>
                  </div>

                 <div class="card card-primary col-sm-4">
                    <div class="card-header">
                       <h3 class="card-title">List Question</h3>
                     </div>

                    <div class="card-body">

                       <?php foreach($pertanyaan as $val) : ?>
                      <div class="question-list-container">
                        <a href="/edit/<?= $val['id'] ?>">
                        <div >
                          <ol class="list-unstyled saved-list">
                            <li  class="added-question pr-2 card pb-0 mb-2">
                                    <p> <?= $val['pertanyaan'] ?></p>

                              <div class="question-properties">
                                <div class="title">
                                    <i class="material-icons ">
                                </div> 
                                <div  class="question-property-icons pl-3 mt-1">
                                  <!----> <!----> <!---->
                                </div>
                              </div>
                            </li>
                          </ol>
                        </div>
                        </a>
                      </div>
                      <?php endforeach; ?>
                    </div>
              
                  
              <!-- /.card -->
            </div>
        </div>
    </div>
          

  </div>
</div>
</form>
</div>                                
      
<?= $this->endSection() ?>