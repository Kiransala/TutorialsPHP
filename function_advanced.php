<?php

function calc($num1, $num2 , $op)
{
  switch ($op)
  {
    case "+":
    $total = $num1 + $num2;
    return $total;
    break;

    case "-":
    $total = $num1 - $num2;
    return $total;
    break;

    case "*":
    $total = $num1 * $num2;
    return $total;
    break;

    case "/":
    $total = $num1 / $num2;
    return $total;
    break;

    default:
    echo "Unknown Operator!";

  }
}

echo calc(18,4,'/');

// Output:
//4.5

?>
