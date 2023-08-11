<?php
session_start();

require('conn.php');
$email=$_POST['email'];
$pwd=$_POST['password'];
$pass=SHA1($_POST['password']);

$query="select * from users where email='$email'";
$res=mysqli_query($dbconn,$query) or die('error in query');
$row=mysqli_fetch_array($res);

if($row['password']==$pass)
{
	$_SESSION['uname']=$row['name'];
	$_SESSION['email']=$row['email'];
	
	header('Location:market.php');
}
else
{
// echo 'Incorrect username or password. Pls try again.';
header("location:signin.php?f=1");
session_destroy();

}
?>