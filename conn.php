<?php
  //database name admin
   
   $db_host="localhost";
   $db_name="root";
   $db_password="";
   $db="admin";

   
  try{
   $conn=mysqli_connect($db_host,$db_name,$db_password,$db);
   echo "You are succesfully connected<br>";
   }
  
  catch(mysqli_sql_exception){
   echo "Coud not connect to db";
  }
  
?>