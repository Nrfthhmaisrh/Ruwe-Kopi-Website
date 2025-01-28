<?php

$con = mysqli_connect ("localhost", "root", "", "ruwekopidb") or die
(mysqli_connect_errno($con));



if (isset($_POST["username"]))
{
$username=$_POST["username"];
$password=$_POST["password"];

$semak= mysqli_query($con, "Select * from student where username='$username' and password='$password'") or die (mysqli_error($con));

$bilrekod=mysqli_num_rows($semak);

if ($bilrekod==0)
{
echo "Wrong username or password";
}
else
{
$_SESSION["username"]=$username;

$datarekod=mysqli_fetch_array($semak);

if ($datarekod['status']=="USER")
{
header ("location: indexuser.php");
}
elseif ($datarekod['status']=="ADMIN")
{
header ("location: indexadmin.php");
}

}




}
?>