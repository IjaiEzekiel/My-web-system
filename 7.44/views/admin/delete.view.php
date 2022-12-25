
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h1 class="mt-5">Delete Term</h1>
    </div>
  </div>
  <div>
    Are you sure you want to delete <?= $model->term ?>?
  </div>
  <form class="form-inline" action="" method="POST">
    <input type="hidden" value="<?= $model->id ?>" name="term" />
    <button type="submit">Delete</button>
  </form>
</div>