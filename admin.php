<?php
include("conn.php");

//creating a table call users
$query1="CREATE TABLE users";
if(mysqli_query($conn,$query1)){
  echo "Users table succesfully created<br>";
}
else {
  echo "Coudn't create a users table.<br>";
}

//inserting into users 2 data
$credentals=["Sunitha"=>"Suki1203#","Dashanika"=>"Dasha1216#"];
$count=0;
foreach($credentals as $user=>$pwd){

   $hash=password_hash($pwd,PASSWORD_DEFAULT);//hashing password
   $hashed_credentials[$count]=[$user=>$hash];//creating associative array

   //inserting into the users table 
   $query[$count]="INSERT INTO users(username,password)
                    VALUES('$user','$hash')";

    //checking whether quereis are inserted
    if(mysqli_query($conn,$query[$count])){
        echo "Query". ($count+1) ."succesfully created<br>";
    }
    else{
      echo "Query". ($count+1) ."coudnt created<br>";
    }
    $count++;
}







?>

