<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "userdb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
// Create database
//$sql = "CREATE DATABASE userDB";
/*$sql = "CREATE TABLE user (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    password VARCHAR(50) NOT NULL,
    mobile VARCHAR(40) NOT NULL,
    reg_date TIMESTAMP
    )";*/
    $name=$_POST['user_email'];
    $email=$_POST['user_name'];
    $password=$_POST['user_'];
    $mobile=$_POST['user_mobile'];
    //$sql = "INSERT INTO user('name', 'email', 'password','mobile') VALUES($name, $email, $password,$mobile)";
    $sql = "INSERT INTO `user`(`name`, `email`, `password`, `mobile`) VALUES ('$name', '$email', '$password','$mobile')";
    //echo  $sql;exit();


if (mysqli_query($conn, $sql)) {

    echo "you have registered successfully";

} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
header('Location: login.php');
?>

<!DOCTYPE html>
<html>
<body>

<a href="http://localhost/registration/registration.php">registered sucessfully</a>
<a href="http://localhost/registration/login.php">registered sucessfully</a>

</body>
</html>