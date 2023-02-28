<?php
$con=mysqli_connect('localhost','root','','test') or die("connection failed : ".mysqli_connect_error());
if ($con) {
echo "Connection Successful";
}
else{
echo "Error in connection";
}
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>