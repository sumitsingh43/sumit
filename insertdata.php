<?php
echo " adding data in table<br>";

$servername="localhost";
$username="root";
$password="";
$database="dbsumit9";



$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    //die if connection is not successsful
    die("sorry we failed to connect ".mysqli_connect_error());
}
else{
    echo " connection was made successfully";
}
//creating a database  at myadmin

$sql="INSERT INTO .`don of the year` ( `NAME`, `CLASS`, `ROLL`) VALUES ('ram', '3', '1')";

$result=mysqli_query($conn,$sql);
if($result){
    echo "data is inserted successfully <br>";
}
else{
    echo "data could not be inserted  because of this error <br>".mysqli_error($conn);
}




?>