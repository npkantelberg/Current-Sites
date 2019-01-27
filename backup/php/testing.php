<?php
// Start the session
session_start();
?>

<style media="screen">

</style>

<html>

<?php


if ($_GET["textfield"] != "") {
  echo('Hello World!');
} else {
  echo("field is empty");
}

$username = $_GET["textfield"];

$_SESSION["user"] = $username;

// Echo session variables that were set on previous page

if ($_SESSION["user"] != ""){
  echo ("Session name is " . $username . ".<br>");
} else {
  echo("Session not set");
}


 ?>

<form class="" action="#" method="get">
  <input type="text" name="textfield"/>
  <br />
  <button type="submit" name="button">Submit</button>
</form>



</html>
