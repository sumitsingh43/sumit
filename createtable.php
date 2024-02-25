<?php

$servername="localhost";
$username="root";
$password="";
$database="dbsumit9";

$conn=mysqli_connect($servername,$username,$password, $database);
if(!$conn){
    echo " connection failed".mysqli_connect_error();
}
else{
    echo " connection made";
}
//$sql= " CREATE TABLE .`PHPTRIP` (`S.NO` INT NOT NULL AUTO_INCREMENT , `NAME` VARCHAR(11) NOT NULL , `DEST` VARCHAR(11) NOT NULL , PRIMARY KEY (`S.NO`)); ";

// $sql="CREATE TABLE `DON OF THE YEAR` (`S.NO` INT NOT NULL AUTO_INCREMENT , `NAME` VARCHAR(11) NOT NULL , `CLASS` INT(13) NOT NULL , `ROLL` INT(20) NOT NULL , PRIMARY KEY (`S.NO`)) ;

// INSERT INTO `DON OF THE YEAR` (`S.NO`, `NAME`, `CLASS`, `ROLL`) VALUES ('1', 'SUMIT', '2', '1');


// INSERT INTO `DON OF THE YEAR` (`S.NO`, `NAME`, `CLASS`, `ROLL`) VALUES (NULL, 'SHASWAT', '2', '2');

// INSERT INTO `DON OF THE YEAR` (`S.NO`, `NAME`, `CLASS`, `ROLL`) VALUES (NULL, 'HIMANSHU', '2', '1.0');

// "

$sql = "CREATE TABLE `DON OF THE YEAR` (
    `S.NO` INT NOT NULL AUTO_INCREMENT,
    `NAME` VARCHAR(11) NOT NULL,
    `CLASS` INT(13) NOT NULL,
    `ROLL` INT NOT NULL,
    PRIMARY KEY (`S.NO`)
   
)";

$result= mysqli_query($conn,$sql);

if($result){
    echo "TABLE is created successfully <br>";
}
else{
    echo "TABLE could not be created  because of this error <br>".mysqli_error($conn);
}

?>