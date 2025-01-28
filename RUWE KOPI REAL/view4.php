<!doctype html>
<html>

<head><title>View</title></head>

<body>
</body>

</html>

<?php 

$con = mysqli_connect ("localhost", "root", "", "ruwekopidb") or die
(mysqli_connect_errno($con));

$carian= mysqli_query ($con, "select * from customer") or die (mysqli_error($con));

echo "<h1>Senarai Data</h1>";

while ($data=mysqli_fetch_array($carian))
{
echo "Nama: $data[name]<br>";
echo "Phone: $data[phone]<br>";
echo "Password: $data[password]<br>";
echo "Confirm_Password: $data[confirm_password]<br>";

}

mysqli_close($con);

?>