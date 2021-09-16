<!doctype html>
<?php 
    require 'header.php';
    $name = $_GET['userName'];
    $pass = $_GET['password'];

    $rightUserName = 'zeinabrefat';
    $rightPassword = 123456;

    if($name == $rightUserName && $pass == $rightPassword)
    {
        header( "refresh:5;url=form2.php" );
    }
    else
    {
        echo "User name or password is wrong, pleas try again.";
    }
?>
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" type="text/css" href="css/styleSheet.css" >
