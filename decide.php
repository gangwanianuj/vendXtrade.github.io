<?php
session_start();

if($_SESSION['uname'])
{
    header("location:profile.php");
}else{
    header("location:signin.php");
}

?>