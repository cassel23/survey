<?= $this->extend("template") ?>

<?= $this->section("content") ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="/assets/_dist/img/ShuyoSuvey_logo.png"/>
  <title>ShuyoSurvey | Survey</title>

    <section class="content">
      <form action="/survey" method="post">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Title and Description Survey</h3>
            </div>
</head>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Survey Name</label>
                <input type="text" id="inputName" class="form-control" name="title" required>
              </div>
              <div class="form-group">
                <label for="inputDescription">Survey Description</label>
                <textarea id="inputDescription" class="form-control" name="description" rows="4" required></textarea>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <div class="row justify-content-center">
        <div class="col-6">
          <a href="http://localhost:8080/" class="btn btn-secondary">Cancel</a>
          <button type="submit" class="btn btn-success float-right">Create New Survey</button>
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  </html>
  <?= $this->endSection() ?>