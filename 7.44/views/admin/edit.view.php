
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h1 class="mt-5">Edit Term</h1>
    </div>
  </div>
  <form class="form-inline" action="" method="POST">
    <input type="hidden" value="<?= $model->id ?>" name="original-term" />
    <label for="term">Term:</label>
    <input type="text" name="term" id="term" value="<?= $model->term ?>" />
    <label for="definition">Definition:</label>
    <textarea name="definition" id="definition"><?= $model->definition ?></textarea>
    <button type="submit">Edit</button>
  </form>
</div>