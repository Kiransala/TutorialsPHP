<html>

<body>
  <form action='get.php' method='GET'>
    <h3>Enter your name:</h3>
    <input type='text' name='myname'><br>
    <input type='submit' value='Click here'>
  </form>
</body>
</html>

<?php

@$name = $_GET['myname'];

if ($name)
  echo "<h2>Hello, $name.</h2>";
?>
