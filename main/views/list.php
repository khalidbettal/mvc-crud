

<?php 
$title = 'list users';
ob_start()
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th colspan="2" >action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($users as $user):?>
    <tr>
      <td><?= $user->id ?></td>
      <td><?= $user->name ?></td>
      <td><?= $user->email ?></td>
      <td><button ><a href="delete?id=<?= $user->id ?>">delete</a></button></td>
      <td><button><a href="update?id=<?= $user->id ?>">update</a></button></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php $content= ob_get_clean()?>
<?php require "main/views/layout.php"; ?>