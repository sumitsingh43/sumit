<?php
echo " 2d  Array <br>";

$arr =array(array(1,2,3,6) ,
array(3,4,6,7),
array(0,1,3,9),
array(1,0,2,0));

for ($i=0; $i <count($arr) ; $i++) { 
    for ($j=0; $j < count($arr[$i]) ; $j++) { 
        # code...
        echo $arr[$i][$j];
        echo " ";
    }
    # code...
  echo "<br>";
}
// echo  var_dump($arr);


?>