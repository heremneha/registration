<html>
<body>

Welcome <?php echo $_POST["txt_name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
Your mobile number is: <?php echo $_POST["mobile"]; ?><br>
Your address : <?php echo $_POST["address"]; ?><br>
Your time: <?php echo $_POST["time"]; ?><br>
Your comment is: <?php echo $_POST["comment"]; ?><br>
Your class is: <?php echo $_POST["class"]; ?>
</body>
</html>
<?php
// This results in an error.
// The output above is before the header() call
header('Location: login.php/');
?>