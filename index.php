<?php
  include("admin.php");
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" name="login" value="Log in">
  </form>
</body>
</html>

<?php

  if(isset($_POST['login'])){
    
    if(!empty($_POST['username']) && !empty($_POST["password"])){
      //sanitizing username
      $name=filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
      $pwd=$_POST["password"];
      $query_1="SELECT * FROM users";
      $result=mysqli_query($conn,$query_1);
      if($result){
        $rows=mysqli_num_rows($result);
        if($rows>0){
        $count=0;
          while($cred=mysqli_fetch_assoc($result)){
            if($cred['username']==$name && password_verify($pwd,$cred['password'])){
              //this is not efficiant when its comes to more users
                echo "You succesfully loged in";
                $_SESSION['name']=$cred['username'];
                $_SESSION['pwd']=$cred['password'];
                header("Location: home.php");
                exit();
            
            
        }
          $count++;
        }
      }
      else{
        echo "There is no data in the table";
      }
      }
    }
    if($count>0){
        echo "<b><div style='color:red'>Your Username and password dont match</div></b>";
    }

    else {
      echo "<b><div style='color:red'>Please enter Username/Password!!</div></b>";
    }
  }
?>