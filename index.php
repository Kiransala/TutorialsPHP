<?php

$name = "Alex";

if ($name == "Alex") 
{
  echo "Hi, Alex.";
} 
else 
{
?>

  You're not Alex? Please type your name:<br />
  <form action="tutorial.php" method="POST">
    <input type="text" name="name"><input type="submit" value="Submit">
  </form>

<?php
}
?>
