<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Session Example</title>
</head>
<body>
  <?php
  // Set session variable
  $_SESSION["score"] = 3;
  echo "Session variable is set.<br>"
  ?>
<a href="page2.php">Click here to proceed to next page</a>
</body>
</html>
