<?php
require 'settings.php';
session_start();

if(isset($_POST['logoutBtn'])){
    session_destroy();
    header("location:index.php");
}
else
{
    header("location:index.php");
}