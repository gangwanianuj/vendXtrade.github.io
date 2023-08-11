<?php
session_start();
require('conn.php');
$username=$_SESSION['uname'];

$query="select * from userstocks where username='$username'";
$res=mysqli_query($dbconn,$query) or die('error in query');

$row=mysqli_fetch_array($res);
$raw_price=$row['stocks'];


echo $raw_price;
?>

