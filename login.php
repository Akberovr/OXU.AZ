<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" >
<style>
html,body{
  margin: 0;
  padding: 0;
}
  #main{
    width: 100%;
    height: 700px;
    background: #EDEFF0;
  }
 .login{
   width: 300px !important;
   height: 400px !important;
   background: white;
   position: relative;
   top:30px;
   left: 40%;
   border-radius: 3px;
       box-shadow: 2px 4px 10px #888888;
       border-radius: 6px;
    }
 img{
   border-radius:300px !important;
   width: 90px;
   height: 90px;
   position: relative;
   left: 35%;
   top: 20px;
 }
 .foot{
   background: red;
   width: 30px;
   height: 100%;
 }
 input{
position: relative !important;
top: 60px !important
}
button{
  position: relative !important;
  top: 70px !important;
}
</style>
  </head>
  <body >
    <div id="main">
      <div id="login" class="row">
          <div class="col-md-4 login">

            <form class="post" action="check.php" method="post">
              <!-- first input -->
              <div class="form-group">
                   <input type="email" class="form-control"  placeholder="Email" name="email">
              </div>
              <!-- second input -->
              <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password">
              </div>
              <!-- button -->
              <button type="submit" class="btn btn-success" name="button">Sign in</button>
            </form>

          </div>
          <!-- footer -->
          <div class="foot">

          </div>
      </div>
    </div>
      <?php
      session_start();
      if (isset($_SESSION['errormsj'])) { ?>
        <h1><?= $_SESSION['errormsj'] ?></h1>
        <?php unset($_SESSION['errormsj']);
        # code...
      }
       ?>
  </body>
</html>
