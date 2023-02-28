<html>
<!--https://www.myprograming.com/insert-show-update-and-delete-in-php-mysql-->
<head>
<title>insert</title>
</head>
<body>
<h1>Insert DATA</h1>
<form action="index.php" method="post">
<input type="text" name="firstname" placeholder="firstname"><br><br>
<input type="text" name="lastname" placeholder="lastname"><br><br>
<input type="text" name="email" placeholder="email"><br><br>
<input type="text" name="number" placeholder="phonenumber"><br><br>
<input type="submit" name="submit" value="insert"><br><br>
</form>
<button><a href="show.php">show data</a></button>
</body>
</html>

<?php
error_reporting(0);
include 'connection.php';

if (isset($_POST['submit'])) {
//$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phonenumber = $_POST['number'];

//if(empty($firstname))
//echo "<br>First name cannot be empty";
//else if(!preg_match("/^[a-zA-z]*$/", $firstname))
//echo "<br>Only alphabets and whitespace are allowed in firstname";
//else if(!preg_match("/^[a-zA-z]*$/", $lastname))
//echo "<br>Only alphabets and whitespace are allowed in lastname";
//else if(!preg_match($pattern,$email))
//echo "<br>Email is not valid";
//else if(!preg_match ("/^[0-9]*$/", $phonenumber) )
//echo "<br>Only numeric value is allowed as phone number.";
//else {
$sql = "INSERT INTO registration VALUES (id,'$firstname','$lastname','$email','$phonenumber')";
$data=mysqli_query($con,$sql);

if ($data) {
echo "Records inserted successfully!";
}else
{
echo "Sorry. Error in adding records";
}
}
//}
?>