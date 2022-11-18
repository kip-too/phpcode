<?php
if ($_GET['firstname'] != null)
{
  function welcome($fname, $lname)
  {
  echo '<h1>Welcome ' . $fname . ' ' . $lname . '!</h1>';
  }
  welcome($_GET['firstname'], $_GET['lastname']);
}
else {
?>
<!doctype html>
<html>
<head>
<title>Form Validation</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="container">
<h1>Sample Form</h1>
<form name="myForm" id="myForm" action="index2.php" method="get">
  <br><br>
  <span id="firstname">Firstname: </span>
  <input type="text" name="firstname"><br><br>
  <span id="lastname">Lastname: </span>
  <input type="text" name="lastname"><br><br>
  <input type="submit" name="submitBtn"><input type="reset" name="resetBtn">
</form>
</div>
</body>
</html>
<?php
}
?>