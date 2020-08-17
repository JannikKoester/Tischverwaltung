<?php
require 'settings.php';
require 'getTables.php';
session_start();

if(isset($_POST['loginBtn'])){
    $uname = $_POST['uname'];
    $pw = $_POST['pw'];
    //Check if User exists
    $sql = "SELECT * FROM users WHERE users='$uname' AND password='$pw'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $_SESSION["LoggedInUser"] = array($row['uniqueid'],$row['users']);
        header("location:index.php?result=loggedin");
      }
      $_SESSION["month"] = '';
    $_SESSION["month_string"] = '';

    $_SESSION["day"] = '';
    $_SESSION["day_string"] = '';
      }
      else
      {
          header("location:index.php?result=gotrecords");
          $_SESSION["accnotfound"] = '<div class="alert alert-danger">
            Benutzername oder Passwort falsch!</div>'; 
      }

   // echo $pw .$uname;
    //header("location:index.php?result=gotrecords");
}
else
{
    header("location:index.php");
}