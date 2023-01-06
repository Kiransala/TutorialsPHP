<?php

$num = 1;
$name = "Alex";

do
{
  echo $num."<br>";
  $num++;

  if ($num >= 10)
  {
    $name = "Billy";
  }
}
while ($name == "Alex")

// Output:
// 1
// 2
// 3
// 4
// 5
// 6
// 7
// 8
// 9

?>
