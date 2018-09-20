<?php     
include('config.php');
session_start();
$_SESSION["email"] = $_POST["email"];
$_SESSION["password"] = $_POST["password"];
?>
<?php
// This results in an error.
// The output above is before the header() call
header('Location: home.php');
?>
