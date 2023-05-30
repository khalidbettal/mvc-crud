<?php 
$title = 'Create';
ob_start()
?>
<form action="" method="post">
<div class="mb-3">
  <input type="hidden" name="id" class="form-control" >
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">name</label>
  <input type="text" name="name" class="form-control" >
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" name="email" class="form-control">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">password</label>
  <input type="password" name="password" class="form-control">
</div>
<div class="mt-5">
    <button type="submit" class="btn btn-primary mb-3" name="submit">Create</button>
</div>
</form>

<?php $content= ob_get_clean();
require "main/views/layout.php"; ?>