<?php 
    include 'run.php';
?>
<!doctype html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  </head>

  <?php
    if(isset($_POST['btnlogin'])){
        if(ceklogin($_POST['username'], $_POST['password'])){
            header("Location: formpenjualan.php");
        } else {
            echo "salah";
        }
        
    } 
  ?>
<body>

    <form action="" method="POST">
        <div>
        <label class="user">Username</label>
        <input type="text" name="username" id="user" > 
        <br>
        </div>
        <div>
        <label class="pass">password </label>
        <input type="password" name="password" id="pass">
        <br>
        </div>
        <div>
        <input type="checkbox" name="checkbox" id="check">
        <label for="showpass">show pass</label>
        </div>
    <button type="submit" name="btnlogin">Login <a href="formpenjualan.php"> </button></a>
    </form>

  
</body>  
</html>

