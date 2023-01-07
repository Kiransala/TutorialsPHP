<?php

ob_start(); //without this header we cannot write below welcome! 

echo "<h1>Welcome!</h1>";

$goto = "https://www.google.co.in/";

if ($goto)
{
  header("Location: $goto");
}

?>
