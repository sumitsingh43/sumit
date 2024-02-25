<?php


//connecting to database

$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
    //die if connection is not successsful
    die("sorry we failed to connect ".mysqli_connect_error());
}
else{
    echo " connection was made successfully";
}
//creating a database  at myadmin

$sql="CREATE DATABASE dbsumit2";
$result=mysqli_query($conn,$sql);
if($result){
    echo "database is created successfully <br>";
}
else{
    echo "database could not be created  because of this error <br>".mysqli_error($conn);
}

?>