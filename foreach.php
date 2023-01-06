<?php

$numbers = array(1,2,3,4,5,6,7,8,9,10);
$multiple = 12;

foreach($numbers as $value)
{
  echo "$value x $multiple = ".($value * $multiple)."<br>";
}

// Output:
// 1 x 12 = 12
// 2 x 12 = 24
// 3 x 12 = 36
// 4 x 12 = 48
// 5 x 12 = 60
// 6 x 12 = 72
// 7 x 12 = 84
// 8 x 12 = 96
// 9 x 12 = 108
// 10 x 12 = 120

?>
