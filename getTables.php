<?php
session_start();

require 'settings.php';




if(isset($_POST['getTables'])){


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

    
?>