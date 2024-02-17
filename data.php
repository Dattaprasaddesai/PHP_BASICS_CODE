<?php

$servername="localhost";
$username="root";
$password="";
$database="phptutorial";

//creating database connection

$conn =mysqli_connect($servername,$username,$password,$database);

//Check connection 
if(!$conn)
{
    die("Failed to connect ". mysqli_connect_error());

}
else
{
   echo "connection Successfull ";

}

//$sql = "INSERT INTO  'users'  ('sno','name','age','salary') VALUES  ('3','raj','19','30000')";
$sql=" INSERT INTO `users` (`sno`, `name`, `age`, `salary`) VALUES ('4', 'raj', '24', '15000')";

if(mysqli_query($conn,$sql))
{
    echo "Success";

}
else{
    echo "error".mysqli_error($conn);
}

mysqli_close($conn);
?>

