<?php
session_start();

require 'settings.php';




if(isset($_POST['getTables']))
{


    $_SESSION["month"] = $_POST['month'];
    $_SESSION["month_string"] = $_POST['month'];

    $_SESSION["day"] = $_POST['day'];
    $_SESSION["day_string"] = $_POST['day'];
    

    
    switch($_SESSION["month"])
    {
        case 'Januar':
            $_SESSION["month"] = 1;
        break;
        case 'Februar':
            $_SESSION["month"] = 2;
        break;
        case 'März':
            $_SESSION["month"] = 3;
        break;
        case 'April':
            $_SESSION["month"] = 4;
        break;
        case 'Mai':
            $_SESSION["month"] = 5;
        break;
        case 'Juni':
            $_SESSION["month"] = 6;
        break;
        case 'Juli':
            $_SESSION["month"] = 7;
        break;
        case 'August':
            $_SESSION["month"] = 8;
        break;
        case 'September':
            $_SESSION["month"] = 9;
        break;
        case 'Oktober':
            $_SESSION["month"] = 10;
        break;
        case 'November':
            $_SESSION["month"] = 11;
        break;
        case 'Dezember':
            $_SESSION["month"] = 12;
        break;

        
        
    }
    
    $month = $_SESSION["month"];
    $day = $_SESSION["day"];

    $sql = "SELECT * FROM calenderplanner WHERE month='$month' AND day='$day' AND tisch='1'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo $row['uniqueid'].$row['year'].$row['month'].$row['day'].$row['reserviert'].$row['reserviertvon'].$row['tisch']."<br>" ;
        $_SESSION["Tisch1"] = array($row['uniqueid'],$row['month'],$row['day'],$row['reserviert'],$row['reserviertvon'],$row['tisch']);
      }
    } else
    {
        $_SESSION["Tisch1"] = "FREI";
        echo $_SESSION["Tisch1"]."<br>";
    }

    $sql = "SELECT * FROM calenderplanner WHERE month='$month' AND day='$day' AND tisch='2'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo $row['uniqueid'].$row['year'].$row['month'].$row['day'].$row['reserviert'].$row['reserviertvon'].$row['tisch']."<br>" ;
        $_SESSION["Tisch2"] = array($row['uniqueid'],$row['month'],$row['day'],$row['reserviert'],$row['reserviertvon'],$row['tisch']);
      }
    } else
    {
        $_SESSION["Tisch2"] = "FREI";
        echo $_SESSION["Tisch2"]."<br>";
    }

    $sql = "SELECT * FROM calenderplanner WHERE month='$month' AND day='$day' AND tisch='3'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo $row['uniqueid'].$row['year'].$row['month'].$row['day'].$row['reserviert'].$row['reserviertvon'].$row['tisch']."<br>" ;
        $_SESSION["Tisch3"] = array($row['uniqueid'],$row['month'],$row['day'],$row['reserviert'],$row['reserviertvon'],$row['tisch']);
      }
    } else
    {
        $_SESSION["Tisch3"] = "FREI";
        echo $_SESSION["Tisch3"]."<br>";
    }

    $sql = "SELECT * FROM calenderplanner WHERE month='$month' AND day='$day' AND tisch='4'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo $row['uniqueid'].$row['year'].$row['month'].$row['day'].$row['reserviert'].$row['reserviertvon'].$row['tisch']."<br>" ;
        $_SESSION["Tisch4"] = array($row['uniqueid'],$row['month'],$row['day'],$row['reserviert'],$row['reserviertvon'],$row['tisch']);
      }
    } else
    {
        $_SESSION["Tisch4"] = "FREI";
        echo $_SESSION["Tisch4"]."<br>";
    }

    $sql = "SELECT * FROM calenderplanner WHERE month='$month' AND day='$day' AND tisch='5'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo $row['uniqueid'].$row['year'].$row['month'].$row['day'].$row['reserviert'].$row['reserviertvon'].$row['tisch']."<br>" ;
        $_SESSION["Tisch5"] = array($row['uniqueid'],$row['month'],$row['day'],$row['reserviert'],$row['reserviertvon'],$row['tisch']);
      }
    } else
    {
        $_SESSION["Tisch5"] = "FREI";
        echo $_SESSION["Tisch5"]."<br>";
    }

    $sql = "SELECT * FROM calenderplanner WHERE month='$month' AND day='$day' AND tisch='6'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo $row['uniqueid'].$row['year'].$row['month'].$row['day'].$row['reserviert'].$row['reserviertvon'].$row['tisch']."<br>" ;
        $_SESSION["Tisch6"] = array($row['uniqueid'],$row['month'],$row['day'],$row['reserviert'],$row['reserviertvon'],$row['tisch']);
      }
    } else
    {
        $_SESSION["Tisch6"] = "FREI";
        echo $_SESSION["Tisch6"]."<br>";
    }
    
    header("location:index.php?result=gotrecords");

    }

    //Tisch 1
    if(isset($_POST['reservierenBtnTisch1Delete']))
    { // Löscht den Eintrag und macht somit den Tisch frei.
      
      $uid = $_SESSION["Tisch1"][0];
      $sql = "DELETE FROM calenderplanner WHERE uniqueid='$uid'";
      if ($conn->query($sql) === TRUE) {
        $_SESSION["sucessmessagedeleted"] = '<div class="alert alert-success">
            Du hast den Tisch 1 wieder frei gemacht.</div>';
            $_SESSION["Tisch1"] = "FREI";
        header("location:index.php?result=gotrecords");
      } else {
        echo "Error deleting record: " . $conn->error;
      }
      
      
    }
    
    
     if(isset($_POST['reservierenBtnTisch1Replace']))
    {
      
      $uid = $_SESSION["Tisch1"][0];
      $name = $_POST["reservierterNameReplace1"];
      $sql = "UPDATE calenderplanner SET reserviertvon='$name' WHERE uniqueid='$uid'";
      if ($conn->query($sql) === TRUE) {
        $_SESSION["sucessmessagereplaced"] = '<div class="alert alert-success">
            Du hast den Namen der Person an Tisch 1 geändert.</div>';
            $_SESSION["Tisch1"][4] = $name ;
        header("location:index.php?result=gotrecords");
      } else {
        echo "Error deleting record: " . $conn->error;
      }
       
    }
    //Tisch 1 Ende
    //Tisch 2
    if(isset($_POST['reservierenBtnTisch2Delete']))
    { // Löscht den Eintrag und macht somit den Tisch frei.
      
      $uid = $_SESSION["Tisch2"][0];
      $sql = "DELETE FROM calenderplanner WHERE uniqueid='$uid'";
      if ($conn->query($sql) === TRUE) {
        $_SESSION["sucessmessagedeleted"] = '<div class="alert alert-success">
            Du hast den Tisch 2 wieder frei gemacht.</div>';
            $_SESSION["Tisch2"] = "FREI";
        header("location:index.php?result=gotrecords");
      } else {
        echo "Error deleting record: " . $conn->error;
      }
      
      
    }
    
    
     if(isset($_POST['reservierenBtnTisch2Replace']))
    {
      
      $uid = $_SESSION["Tisch2"][0];
      $name = $_POST["reservierterNameReplace2"];
      $sql = "UPDATE calenderplanner SET reserviertvon='$name' WHERE uniqueid='$uid'";
      if ($conn->query($sql) === TRUE) {
        $_SESSION["sucessmessagereplaced"] = '<div class="alert alert-success">
            Du hast den Namen der Person an Tisch 2 geändert.</div>';
            $_SESSION["Tisch2"][4] = $name;
        header("location:index.php?result=gotrecords");
      } else {
        echo "Error deleting record: " . $conn->error;
      }
       
    }
    //Tisch 2 Ende

    //Tisch 3
    if(isset($_POST['reservierenBtnTisch3Delete']))
    { // Löscht den Eintrag und macht somit den Tisch frei.
      
      $uid = $_SESSION["Tisch3"][0];
      $sql = "DELETE FROM calenderplanner WHERE uniqueid='$uid'";
      if ($conn->query($sql) === TRUE) {
        $_SESSION["sucessmessagedeleted"] = '<div class="alert alert-success">
            Du hast den Tisch 3 wieder frei gemacht.</div>';
            $_SESSION["Tisch3"] = "FREI";
        header("location:index.php?result=gotrecords");
      } else {
        echo "Error deleting record: " . $conn->error;
      }
      
      
    }
    
    
     if(isset($_POST['reservierenBtnTisch3Replace']))
    {
      
      $uid = $_SESSION["Tisch3"][0];
      $name = $_POST["reservierterNameReplace3"];
      $sql = "UPDATE calenderplanner SET reserviertvon='$name' WHERE uniqueid='$uid'";
      if ($conn->query($sql) === TRUE) {
        $_SESSION["sucessmessagereplaced"] = '<div class="alert alert-success">
            Du hast den Namen der Person an Tisch 3 geändert.</div>';
            $_SESSION["Tisch3"][4] = $name;
        header("location:index.php?result=gotrecords");
      } else {
        echo "Error deleting record: " . $conn->error;
      }
       
    }
    //Tisch 3 Ende

    //Tisch 4
    if(isset($_POST['reservierenBtnTisch4Delete']))
    { // Löscht den Eintrag und macht somit den Tisch frei.
      
      $uid = $_SESSION["Tisch4"][0];
      $sql = "DELETE FROM calenderplanner WHERE uniqueid='$uid'";
      if ($conn->query($sql) === TRUE) {
        $_SESSION["sucessmessagedeleted"] = '<div class="alert alert-success">
            Du hast den Tisch 4 wieder frei gemacht.</div>';
            $_SESSION["Tisch4"] = "FREI";
        header("location:index.php?result=gotrecords");
      } else {
        echo "Error deleting record: " . $conn->error;
      }
      
      
    }
    
    
     if(isset($_POST['reservierenBtnTisch1Replace']))
    {
      
      $uid = $_SESSION["Tisch4"][0];
      $name = $_POST["reservierterNameReplace4"];
      $sql = "UPDATE calenderplanner SET reserviertvon='$name' WHERE uniqueid='$uid'";
      if ($conn->query($sql) === TRUE) {
        $_SESSION["sucessmessagereplaced"] = '<div class="alert alert-success">
            Du hast den Namen der Person an Tisch 4 geändert.</div>';
            $_SESSION["Tisch4"][4] = $name;
        header("location:index.php?result=gotrecords");
      } else {
        echo "Error deleting record: " . $conn->error;
      }
       
    }
    //Tisch 4 Ende

    //Tisch 5
    if(isset($_POST['reservierenBtnTisch5Delete']))
    { // Löscht den Eintrag und macht somit den Tisch frei.
      
      $uid = $_SESSION["Tisch5"][0];
      $sql = "DELETE FROM calenderplanner WHERE uniqueid='$uid'";
      if ($conn->query($sql) === TRUE) {
        $_SESSION["sucessmessagedeleted"] = '<div class="alert alert-success">
            Du hast den Tisch 5 wieder frei gemacht.</div>';
            $_SESSION["Tisch5"] = "FREI";
            
        header("location:index.php?result=gotrecords");
      } else {
        echo "Error deleting record: " . $conn->error;
      }
      
      
    }
    
    
     if(isset($_POST['reservierenBtnTisch5Replace']))
    {
      
      $uid = $_SESSION["Tisch5"][0];
      $name = $_POST["reservierterNameReplace5"];
      $sql = "UPDATE calenderplanner SET reserviertvon='$name' WHERE uniqueid='$uid'";
      if ($conn->query($sql) === TRUE) {
        $_SESSION["sucessmessagereplaced"] = '<div class="alert alert-success">
            Du hast den Namen der Person an Tisch 5 geändert.</div>';
            $_SESSION["Tisch5"][4] = $name;
        header("location:index.php?result=gotrecords");
      } else {
        echo "Error deleting record: " . $conn->error;
      }
       
    }
    //Tisch 5 Ende

    //Tisch 6
    if(isset($_POST['reservierenBtnTisch6Delete']))
    { // Löscht den Eintrag und macht somit den Tisch frei.
      
      $uid = $_SESSION["Tisch6"][0];
      $sql = "DELETE FROM calenderplanner WHERE uniqueid='$uid'";
      if ($conn->query($sql) === TRUE) {
        $_SESSION["sucessmessagedeleted"] = '<div class="alert alert-success">
            Du hast den Tisch 6 wieder frei gemacht.</div>';
            $_SESSION["Tisch6"] = "FREI";
        header("location:index.php?result=gotrecords");
      } else {
        echo "Error deleting record: " . $conn->error;
      }
      
      
    }
    
    
     if(isset($_POST['reservierenBtnTisch6Replace']))
    {
      
      $uid = $_SESSION["Tisch6"][0];
      $name = $_POST["reservierterNameReplace6"];
      $sql = "UPDATE calenderplanner SET reserviertvon='$name' WHERE uniqueid='$uid'";
      if ($conn->query($sql) === TRUE) {
        $_SESSION["sucessmessagereplaced"] = '<div class="alert alert-success">
            Du hast den Namen der Person an Tisch 6 geändert.</div>';
            $_SESSION["Tisch6"][4] = $name;
        header("location:index.php?result=gotrecords");
      } else {
        echo "Error deleting record: " . $conn->error;
      }
       
    }
    //Tisch 6 Ende
?>