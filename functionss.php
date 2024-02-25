<?php
  echo "i m going to call function <br>";
function myFunction($marksarr){
    $sum=0;
 foreach ($marksarr as $key => $value) {
    # code...
   
    $sum+=$value;
 }
 return $sum;

}
$sumit=[92,93,89,98,97,100];
$sumitsum=myFunction($sumit);
echo " sum of marks is $sumitsum";


?>