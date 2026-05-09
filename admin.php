<?php
include("conn.php");

//creating a table call users
$query1="CREATE TABLE users";
try{
 
}
catch(mysqli_sql_exception){
  echo "Coudn't create a table or table already exist";
}


//inserting into users 2 data
$credentals=["Sunitha"=>"Suki1203#","Dashanika"=>"Dasha1216#"];
$count=0;
foreach($credentals as $user=>$pwd){
   $hash=password_hash($pwd,PASSWORD_DEFAULT);
   $hashed_credentials[$count]=[$user=>$hash];
   $count++;
}

echo $count;


// try{
//   mysqli_query($conn,$query2);
// }
// catch(mysqli_sql_exception){
//   echo "<br> Coudnt insert your data.";
// }

?>

