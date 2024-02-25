<?php
echo " we are connecting with database<br>";

//connecting to database

$servername="localhost";
$username="root";
$password="";

//create a connection
$conn=mysqli_connect($servername,$username,$password);

//die if connection is not successsful
if(!$conn){
    die("sory we failed to connect ".mysqli_connect_error());
}
else{
    echo " connection was made successfully";
}
?>