<?= $this->extend("template") ?>

<?= $this->section("content") ?>

            
              <center class="mb-3">
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Editor</button>
                        <button type="button" class="btn btn-info">Publish / share</button>
                      </div>
              </center>

<div class="wrapper">        
        <!-- ./row -->
        <div class="row">
          <div class="col-12 col-sm-12">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-question-tab" data-toggle="pill" href="#custom-tabs-one-question" role="tab" aria-controls="custom-tabs-one-question" aria-selected="true">Question</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-surveysetting-tab" data-toggle="pill" href="#custom-tabs-one-surveysetting" role="tab" aria-controls="custom-tabs-one-surveysetting" aria-selected="false">Survey Setting</a>
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
                                          <input type="text" id="inputName" class="form-control">
                                        </div>
                                        <div class="form-group">
                                          <label for="inputDescription">Answer</label>
                                          <input type="text" id="inputName" class="form-control">
                                          <input type="text" id="inputName" class="form-control mt-2">
                                        </div>
                                            <div class="ml-4 mr-4">
                                          <a href="#" class="btn btn-block btn-danger">
                                            <i class="fa fa-plus mr-2"></i> 
                                            Add More
                                          </a>
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

                                    

                              

                                      <div class="tab-pane fade" id="vert-tabs-multiple" role="tabpanel" aria-labelledby="vert-tabs-multiple-tab">
                                        Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
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
                              Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                          </div>
                </div>
              </div>      
                          
                    </div>
                  </div>
              <!-- /.card -->
            </div>
            <div class="row">
              <div class="col-sm-12">
                <a href="#" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Add" class="btn btn-success float-right">
              </div>
            </div>
        </div>
    </div>
</div>                                
      
<?= $this->endSection() ?>