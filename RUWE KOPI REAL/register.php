<!doctype html>
<html>
<head><title>Registration Form</title></head>
<body>

<form name="register" method="post" action="register.php">

Name : <input type="text" name="name" id="name"> <br>
Phone: <input type="text" name="phone" id="phone"> <br> 
Password : <input type="text" name="password" id="password"> <br> 
Confirm Password: <input type="text" name="email" id="email"> <br> 
<input type="submit" name="submit" action="submit"> <br>

</body>
</html>

<?php

$con = mysqli_connect ("localhost", "root", "", "customer") or die
(mysqli_connect_errno($con));

$name=$_POST["name"];
$phone=$_POST["phone"];
$password=$_POST["password"];
$confirm_password=$_POST["comfirm_password"];

if ($password !== $confirm_password) {
    echo "Passwords do not match.";
    exit;
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

mysqli_query($con, "insert into customer (name, phone, password, confirm_password)
values ('$name', '$phone', '$password', '$confirm_password')")
or die(mysqli_error($con));

?>
