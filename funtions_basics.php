<?php

function myname()
{
  echo "Kiran";
}

echo "My name is ";
myname();

// Output:
// My name is Kiran

function yourname($name, $age)
{
  echo "Your name is ".$name." and you are ".$age." years old.";
}

yourname("Kiran", 19);

// Output:
//Your name is Kiran and you are 19 years old.

?>
