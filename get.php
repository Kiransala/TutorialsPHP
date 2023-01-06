<html>
<head>
  <title>PHP Form</title>
</head>
<body>
  <h1>Enter your name:</h1>
  <form action='get.php' method='GET'>
    <input type='text' name='myname'><br>
    <input type='submit' value='Click here'>
  </form>
  <br>
  <?php
  if (isset($_GET['myname'])) {
    $name = $_GET['myname'];
    echo "<h2>Hello, $name.</h2>";
  }
  ?>
</body>
</html>
