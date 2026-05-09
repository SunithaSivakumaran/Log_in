<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 This is home!! <br>
 <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
  <input type="submit" name="logout" value="Log out">
 </form>
 
</body>
</html>
<?php
 if(isset($_POST['logout'])){
  //we have empty the session array before going out
  $_SESSION=array();
   session_destroy();

   header("Location: index.php");
   exit();
 }
?>