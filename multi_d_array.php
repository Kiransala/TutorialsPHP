<?php
$alpha = array(
  "ABC"=>array("A","B","C","D"),
  "123"=>array(1,2,3,4)
);

echo $alpha['123'][0];//1

$pos = (1)-1;

echo "Letter ".$alpha['ABC'][$pos]." is in position ".$alpha['123'][$pos]; //Letter A is in position 1

?>
