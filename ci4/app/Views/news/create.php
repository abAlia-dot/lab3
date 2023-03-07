
<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="create" method="post">
<?= csrf_field() ?>
<div class="mb-3">
  <label for="title" class="form-label">Title</label>
  <input type="input" name="title" class="form-control" value="<?= set_value('title')?>">
</div>
<div class="mb-3">
  <label for="body" class="form-label">Text</label>
  <textarea class="form-control" name="body" rows="3"><?=set_value('body')?></textarea>
  <br>
  <input type="submit" name="submit" class="btn btn-primary"></button>
</div>
</form>


<br>
<br>
<p>You can add news here! <?= anchor("news", "News Section") ?></p>
<p>Back to Homepage<a class="btn btn-primary" href="~abalia/lab3/ci4/public/home" role="button">Homepage</a>
