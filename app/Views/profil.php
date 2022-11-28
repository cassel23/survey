<?= $this->extend("template") ?>

<?= $this->section("content") ?>
<div class="row">
<div class="col-12 col-sm-7">
<div class="card-header">
    <h5 class="card-title m-0">Personal Information</h5>
</div>
 <div class="card-header">
    <div class="card card-primary card-tabs">
        <div class="tab-pane" id="settings">
            <form class="form-horizontal">
            <div class="form-group row">
                    <label for="inputName" class="col-sm-3 col-form-label mx-2 mt-2">Email</label>
            </div>
            <div class="form-group row">
                    <label for="inputName" class="col-sm-3 col-form-label mx-2 mt-2">Name</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control mt-2" id="inputName" placeholder="Name">
                </div>
            </div>
            <div class="form-group row">
                     <label for="inputEmail" class="col-sm-3 col-form-label mx-2 ">Phone Number</label>
                <div class="col-sm-8">
                     <input type="email" class="form-control" id="inputEmail" placeholder="Phone Number">
                </div>
            </div>
            <div class="form-group row">
                     <label for="inputEmail" class="col-sm-3 col-form-label mx-2">Company</label>
                <div class="col-sm-8">
                     <input type="email" class="form-control" id="inputEmail" placeholder="Company">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-10 col-sm-10">
                <button type="submit" class="btn btn-danger">Update</button>
                </div>
            </div>
            </form>
        </div>
     </div>
  </div>
</div>
</div>

<div class="row">
<div class="col-12 col-sm-7">
<div class="card-header">
    <h5 class="card-title m-0">Security Information</h5>
</div>
 <div class="card-header">
    <div class="card card-primary card-tabs">
        <div class="tab-pane" id="settings">
            <form class="form-horizontal">
            <div class="form-group row">
                    <label for="inputName" class="col-sm-3 col-form-label mx-2 mt-2">Current Password</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control mt-2" id="inputName" placeholder="Current Password">
                </div>
            </div>
            <div class="form-group row">
                     <label for="inputEmail" class="col-sm-3 col-form-label mx-2">New Password</label>
                <div class="col-sm-8">
                     <input type="email" class="form-control" id="inputEmail" placeholder="New Password">
                </div>
            </div>
            <div class="form-group row">
                     <label for="inputEmail" class="col-sm-3 col-form-label mx-2">Confirm Password</label>
                <div class="col-sm-8">
                     <input type="email" class="form-control" id="inputEmail" placeholder="Confirm Password">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-10 col-sm-10">
                <button type="submit" class="btn btn-danger">Update</button>
                </div>
            </div>
            </form>
        </div>
     </div>
  </div>





<?= $this->endSection()?>