<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style media="screen">
      ul{
        list-style-type: none;
      }
      li{
        padding: 20px;
      }
      input{
        float: left;
      margin: 10px;
      }
    </style>
  </head>
  <body>

    <div class="container">
          <h1>CREATE CUSTOMER</h1>

            <div class="col-md-4">
          <ul>
            <li>Header</li>
            <li> News</li>
            <li>Picture</li>
          </ul>

        </div>
<div class="container">
          <form class="" action="" method="post" enctype="multipart/form-data">
               <div class="form-group col-xs-4 ">
                     <input type="text" class="form-control" name="header" placeholder="Header">
                      <input type="text" class="form-control"name="txt" placeholder="News">
                      <!-- <input type="text" class="form-control"  name="picture "placeholder="Picture"> -->
                      <input type="file" name="pic" value="">
                      <input type="submit" class="btn btn-success" name="create" value="create">
                </div>
          </form>
        </div>
          <div class=" col-md-offset-4">

                <button class="btn btn-defaul" name="button"><a href="admin.php">BACK</a></button>
          </div>
          <?php
              include 'db.php';

              if(isset($_POST['create'])){
                echo $header = $_POST['header'];
                $txt = $_POST['txt'];
                $file = $_FILES['pic'];
                $target_dir = "upload/";
                $target_file = $target_dir.basename($file['name']);

                move_uploaded_file($file['tmp_name'],$target_file);


                //  $pic = $_POST['picture'];
                      $sql = "INSERT INTO news(header,news_txt,picture) VALUES('$header','$txt','$target_file')";
                      $query=mysqli_query($db_con,$sql);
                      if($query){
                         header ('Location:admin.php');
                      }else{
                        echo "error launched";
                      }

              }
           ?>

    </div>
  </body>
</html>
