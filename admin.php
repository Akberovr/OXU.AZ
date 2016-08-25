
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
 <title></title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<style media="screen">
</style>
<body>
  <div class="container">


  <h1>Welcome to admin panel</h1>
  <button class="btn btn-success" name="button"><a href="create.php">Create</a></button>

<div class="table-responsive">
<table class="table table-striped table table-bordered">
  <?php
      include "db.php";

      if ($db_con) {
        $sql="SELECT*FROM news";   // 2.data cekmek istediyim tablea gonerdiyim sorgu
        $query=mysqli_query($db_con,$sql);
      ?>

        <thead>
          <tr>
            <td>id</td>
            <td>Name</td>
            <td>Email address</td>
            <td>Mobile Number</td>
            <td colspan="2">Action</td>
          </tr>
        </thead>
                  <?php while ($row=mysqli_fetch_assoc($query)) {?>
                  <tr>
                    <?php foreach ($row as $key => $value) { ?>
                      <td><?php echo $value; ?> </td>
                    <?php } ?>
                    <td><a href="update.php?id=<?= $row['id'] ?>" class="btn btn-success">Update</a></td>
                    <td><a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger">Delete</a></td>
                  </tr>
                  <?php
} ?>
    </table>
            <?php
          }
      else{
        echo "error";
      }
      ?>
</table>
</div>
</div>

</body>
</html>

<?php
    session_start();
    if($_SESSION['checklog']){?>


    <?php }else{
      header('Location:login.php');
    }
     ?>

  </body>
</html>
