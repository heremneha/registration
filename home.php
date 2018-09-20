<?php
session_start();

/*f (!isset($_SESSION["email"]))
{
   header("location: login.php");
}
elseif(isset($_POST['login'])) {
    $email = $_POST['email'];
}*/
echo "<pre>";
print_r($_SESSION);
?>
session email is <?php echo $_SESSION["email"]; ?><br>
session password is : <?php echo $_SESSION["password"]; ?>


