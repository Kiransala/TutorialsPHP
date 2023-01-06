<html>

<body>
  <form action='post.php' method='POST'>
    <input type='password' name='password'><br>
    <input type='submit' value='Click here'>
  </form>
</body>

</html>

<?php

$password = $_POST['password'];

if ($password)
  echo "<h2>Thanks for your password - $password</h2>";
?>
