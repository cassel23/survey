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
                    <a class="nav-link" id="custom-tabs-one-surveysetting-tab" data-toggle="pill" href="#custom-tabs-one-surveysetting" role="tab" aria-controls="custom-tabs-one-surveysetting" aria-selected="false">Survey Setting</a>
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

                                   <div class="tab-pane fade" id="vert-tabs-multiple" role="tabpanel" aria-labelledby="vert-tabs-multiple-tab">

                                            <div class="card-body">
                                              <div class="form-group">
                                                <label for="inputName">Question</label>
                                                <input type="text" id="inputName" class="form-control" placeholder="Type your question">
                                              </div>
                                              <div class="form-group">
                                                <label for="inputDescription">Option</label>
                                                <input type="text" id="inputName" class="form-control" placeholder="Type your option">
                                                <input type="text" id="inputName" class="form-control mt-2" placeholder="Type your option">
                                                <input type="text" id="inputName" class="form-control mt-2" placeholder="Type your option">
                                                <input type="text" id="inputName" class="form-control mt-2" placeholder="Type your option">
                                                <input type="text" id="inputName" class="form-control mt-2" placeholder="Type your option">
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
                                                <span class="fa fa-star custom"></span>
                                                <span class="fa fa-star custom"></span>
                                                <span class="fa fa-star custom"></span>
                                                <span class="fa fa-star custom"></span>
                                                <span class="fa fa-star custom"></span>
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
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Question</label>
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control" id="inputEmail3" placeholder="Type your question" name="quest_email">
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
                                                  <span class="far fa-meh"></span>
                                                  <span class="far fa-smile"></span>
                                                  <span class="far fa-laugh-beam"></span>
                                                  <span class="far fa-frown"></span>
                                                  <span class="far fa-angry"></span>
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

                       <div class="col-sm-12">
                            <input type="submit" value="Add" class="btn btn-success float-right">
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
                          <div class="tab-pane fade" id="custom-tabs-one-surveysetting" role="tabpanel" aria-labelledby="custom-tabs-one-surveysetting-tab">
                              <h4>Additional Setting</h4>

                              <div class="card-body">
                                  <div class="form-group">
                                      <label for="inputName">Survey Title</label>
                                      <input type="text" id="inputName" class="form-control">
                                  </div>
                                  <div class="form-group">
                                      <label for="inputDescription">Survey Description</label>
                                      <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                                  </div>
                                  <div class="row">
                                    <div class="col-mr-4">
                                      <a href="#" class="btn btn-secondary">Cancel</a>
                                      <input type="submit" value="Save" class="btn btn-success float-right">
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
                                       <input type="submit" value="Generate Link" class="btn btn-success float-right">
                                      </div>
                                  </div>
                              </div>
                              </center>
                          </div>

                </div>
              </div>      
            </div>
          </div>

            <div class="row">
             <div class="col-12 col-sm-12">
               
                 <div class="card card-primary">
                    <div class="card-header">
                       <h3 class="card-title">Daftar Pertanyaan Yang Telah Dibuat</h3>
                     </div>

                    <div class="card-body">
                    <?php foreach($pertanyaan as $val) : ?>
                      <td>
                        <button type="button" class="btn btn-block btn-light">
                      <p><?= $val['pertanyaan'] ?></p>
                        </div>
                       </button>
                      </td>                      
                    <?php endforeach; ?>
                    </div>

                    <div class="row">
                        <div class="col-4 col-sm-12">
                           <a href="#" class="btn btn-secondary">Cancel</a>
                           <input type="submit" value="Save" class="btn btn-success float-right">
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
      
<?= $this->endSection() ?>