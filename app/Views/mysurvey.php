<?= $this->extend("template") ?>

<?= $this->section("content") ?>
<!DOCTYPE html>
<html>
  <meta charset="utf-8" />
    <div class="row">
        <div class="col-12">
             <div class="card">
                     <div class="card-header">
                        <h3 class="card-title">The List Of All Your Survey</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                 <div class="input-group-append">
                                     <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                     </button>
                                 </div>
                                </input>
                            </div>
                         </div>
                 </div>

    <div class="wrapper"> 
        <div class="row">
          <div class="col-12 col-sm-12">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-publish-tab" data-toggle="pill" href="#custom-tabs-one-publish" role="tab" aria-controls="custom-tabs-one-question" aria-selected="true">Publish</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-draf-tab" data-toggle="pill" href="#custom-tabs-one-draf" role="tab" aria-controls="custom-tabs-one-draf" aria-selected="false">Draf</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-archive-tab" data-toggle="pill" href="#custom-tabs-one-archive" role="tab" aria-controls="custom-tabs-one-archive" aria-selected="false">Archive</a>
                  </li>
                  </ul>
              </div>

              <div class = "card-body">
                <div class = "tab-content" id="custom-tabs-one-tabContent">
                   <div class="tab-pane fade show active" id="custom-tabs-one-publish" role="tabpanel" aria-labelledby="custom-tabs-one-publish-tab">

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                <th>Name</th>
                                <th>Total Question</th>
                                <th>Published Date</th>
                                <th>Responses</th>
                                <th></th>
                                </tr>
                            </thead>

                                <tbody>
                                    <tr>
                                    <td>183</td>
                                    <td>Indonesia</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">Approved</span></td>
                                    <td>
                                        <div class="input-group-prepend">
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                            </button>
                                            <ul class="dropdown-menu">
                                            <li class="dropdown-item"><a href="#"><i class="ml-1 far fa-edit"></i> Edit Survey</a></li>
                                            <li class="dropdown-item"><a href="#"><i class="ml-1 far fa-clone"></i> Copy Survey</a></li>
                                            <li class="dropdown-item"><a href="#"><i class="ml-1 far fa-file-archive"></i>  Archieve Survey</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li class="dropdown-item"><a href="#"><i class="ml-1 far fa-trash-alt"></i> Delete Survey</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td>219</td>
                                    <td>Chinese</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-warning">Pending</span></td>
                                    <td>
                                        <div class="input-group-prepend">
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                            </button>
                                            <ul class="dropdown-menu">
                                            <li class="dropdown-item"><a href="#"><i class="ml-1 far fa-edit"></i> Edit Survey</a></li>
                                            <li class="dropdown-item"><a href="#"><i class="ml-1 far fa-clone"></i> Copy Survey</a></li>
                                            <li class="dropdown-item"><a href="#"><i class="ml-1 far fa-file-archive"></i>  Archieve Survey</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li class="dropdown-item"><a href="#"><i class="ml-1 far fa-trash-alt"></i> Delete Survey</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td>657</td>
                                    <td>Melayu</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-primary">Approved</span></td>
                                    <td>
                                        <div class="input-group-prepend">
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                            </button>
                                            <ul class="dropdown-menu">
                                            <li class="dropdown-item"><a href="#"><i class="ml-1 far fa-edit"></i> Edit Survey</a></li>
                                            <li class="dropdown-item"><a href="#"><i class="ml-1 far fa-clone"></i> Copy Survey</a></li>
                                            <li class="dropdown-item"><a href="#"><i class="ml-1 far fa-file-archive"></i>  Archieve Survey</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li class="dropdown-item"><a href="#"><i class="ml-1 far fa-trash-alt"></i> Delete Survey</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td>175</td>
                                    <td>Inggris</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-danger">Denied</span></td>
                                    <td>
                                        <div class="input-group-prepend">
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                            </button>
                                            <ul class="dropdown-menu">
                                            <li class="dropdown-item"><a href="#"><i class="ml-1 far fa-edit"></i> Edit Survey</a></li>
                                            <li class="dropdown-item"><a href="#"><i class="ml-1 far fa-clone"></i> Copy Survey</a></li>
                                            <li class="dropdown-item"><a href="#"><i class="ml-1 far fa-file-archive"></i>  Archieve Survey</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li class="dropdown-item"><a href="#"><i class="ml-1 far fa-trash-alt"></i> Delete Survey</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                   </div>

                        <div class="tab-pane fade" id="custom-tabs-one-draf" role="tabpanel" aria-labelledby="custom-tabs-one-draf-tab">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                    <th>Name</th>
                                    <th>Total Question</th>
                                    <th>Published Date</th>
                                    <th>Responses</th>
                                    </tr>
                                </thead>

                                    <tbody>
                                        <tr>
                                        <td>dinda</td>
                                        <td>5</td>
                                        <td>11-7-2014</td>
                                        <td><span class="tag tag-success">4</span></td>
                                        </tr>
                                        <tr>
                                        <td>219</td>
                                        <td>Jefri Nichole</td>
                                        <td>11-7-2014</td>
                                        <td><span class="tag tag-warning">Pending</span></td>
                                        </tr>
                                        <tr>
                                        <td>657</td>
                                        <td>Iqbaal Dhiafakhri Ramadhan</td>
                                        <td>11-7-2014</td>
                                        <td><span class="tag tag-primary">Approved</span></td>
                                        </tr>
                                        <tr>
                                        <td>175</td>
                                        <td>Aldi Angga Yunanda</td>
                                        <td>11-7-2014</td>
                                        <td><span class="tag tag-danger">Denied</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                         </div>

                         <div class="tab-pane fade" id="custom-tabs-one-archive" role="tabpanel" aria-labelledby="custom-tabs-one-archive-tab">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                    <th>Name</th>
                                    <th>Total Question</th>
                                    <th>Published Date</th>
                                    <th>Responses</th>
                                    </tr>
                                </thead>

                                    <tbody>
                                        <tr>
                                        <td>dila</td>
                                        <td>2</td>
                                        <td>11-7-2014</td>
                                        <td><span class="tag tag-success">10</span></td>
                                        </tr>
                                        <tr>
                                        <td>219</td>
                                        <td>Mark Lee</td>
                                        <td>11-7-2014</td>
                                        <td><span class="tag tag-warning">Pending</span></td>
                                        </tr>
                                        <tr>
                                        <td>657</td>
                                        <td>Park Chanyeol</td>
                                        <td>11-7-2014</td>
                                        <td><span class="tag tag-primary">Approved</span></td>
                                        </tr>
                                        <tr>
                                        <td>175</td>
                                        <td>Jeon Wonwoo</td>
                                        <td>11-7-2014</td>
                                        <td><span class="tag tag-danger">Denied</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                         </div>

                </div>
            </div>
</html>
<?= $this->endSection() ?>