<html>
<head>
  <meta charset="utf-8">
  <title>POST Form example</title>
</head>
<body>
  <form name="example1" method="post" action="form.php">
    <input type="radio" name="option1" value="Option 1">Option 1<br>
    <input type="radio" name="option2" value="Option 2">Option 2<br>
    <input type="radio" name="option3" value="Option 3">Option 3<br>
    <input type="hidden" name="hidden" value="secret">
    <input type="submit" name="submit" value="Submit">
  </form>
  <?php
  # if form above have been submitted (user clicked on Submit button)
  # then _POST array will contain _POST["submit"] entry
  # (the entry's name comes from the "name" of the type="submit"
  # element of the form above)
  if (isset($_POST['submit'])){
    echo "<hr>";
    echo "$_POST contains: ";
    var_dump($_POST);
    echo "<br>";
    echo "The value of the hidden field is: ";
    echo $_POST['hidden'];
  }
   ?>
</body>
</html>
