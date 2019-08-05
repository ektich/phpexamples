<?php
//Start the session, or access already existing one
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
  echo "Score is: " . $_SESSION["score"] . ".<br>" ?>
</body>
</html>
