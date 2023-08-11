<?php
session_start();

if($_SESSION['uname'])
{
    header("location:market.php");
}else{
    header("location:signin.php");
}

?>