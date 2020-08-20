<?php
session_start();

require 'settings.php';
require 'functions.php';

if(isset($_POST['reservierenBtnTisch1'])){
  $daystart=$_POST['daystart'];
  $dayend = $_POST['dayend'];
  $name = $_POST['reservierterName'];
  funcs::InsertDatas($conn, $daystart, $dayend, $name,1);

} 

else if(isset($_POST['reservierenBtnTisch2'])){
    $month = $_SESSION["month"];
    $day = $_SESSION["day"];
    $name = $_POST['reservierterName'];
    $year = $_SESSION["year"];
    $table = 2;

    $sql = "INSERT INTO calenderplanner (year, month, day,reserviert,reserviertvon,tisch)
VALUES ('$year', '$month', '$day', '1', '$name', '$table')";

if ($conn->query($sql) === TRUE) {
    $_SESSION["sucessmessage"] = '<div class="alert alert-success">
    Du hast den Tisch erfolgreich reserviert.</div>';
    $sql = "SELECT * FROM calenderplanner WHERE month='$month' AND day='$day'AND year='$year'  AND tisch='2'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        //echo $row['uniqueid'].$row['year'].$row['month'].$row['day'].$row['reserviert'].$row['reserviertvon'].$row['tisch']."<br>" ;
        $_SESSION["Tisch2"] = array($row['uniqueid'],$row['month'],$row['day'],$row['reserviert'],$row['reserviertvon'],$row['tisch'],$row['year']);
        //echo $_SESSION["Tisch3"][6];
      }
    }
    header("location:index.php?result=gotrecords");
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}
else if(isset($_POST['reservierenBtnTisch3'])){
    $month = $_SESSION["month"];
    $day = $_SESSION["day"];
    $name = $_POST['reservierterName'];
    $year = $_SESSION["year"];
    $table = 3;

    $sql = "INSERT INTO calenderplanner (year, month, day,reserviert,reserviertvon,tisch)
VALUES ('$year', '$month', '$day', '1', '$name', '$table')";

if ($conn->query($sql) === TRUE) {
    $_SESSION["sucessmessage"] = '<div class="alert alert-success">
    Du hast den Tisch erfolgreich reserviert.</div>';

    $sql = "SELECT * FROM calenderplanner WHERE month='$month' AND day='$day'AND year='$year'  AND tisch='3'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        //echo $row['uniqueid'].$row['year'].$row['month'].$row['day'].$row['reserviert'].$row['reserviertvon'].$row['tisch']."<br>" ;
        $_SESSION["Tisch3"] = array($row['uniqueid'],$row['month'],$row['day'],$row['reserviert'],$row['reserviertvon'],$row['tisch'],$row['year']);
        //echo $_SESSION["Tisch3"][6];
      }
    }
    header("location:index.php?result=gotrecords");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}
else if(isset($_POST['reservierenBtnTisch4'])){
    $month = $_SESSION["month"];
    $day = $_SESSION["day"];
    $name = $_POST['reservierterName'];
    $year = $_SESSION["year"];
    $table = 4;

    $sql = "INSERT INTO calenderplanner (year, month, day,reserviert,reserviertvon,tisch)
VALUES ('$year', '$month', '$day', '1', '$name', '$table')";

if ($conn->query($sql) === TRUE) {
    $_SESSION["sucessmessage"] = '<div class="alert alert-success">
  Du hast den Tisch erfolgreich reserviert.</div>';
  $sql = "SELECT * FROM calenderplanner WHERE month='$month' AND day='$day'AND year='$year'  AND tisch='4'";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //echo $row['uniqueid'].$row['year'].$row['month'].$row['day'].$row['reserviert'].$row['reserviertvon'].$row['tisch']."<br>" ;
      $_SESSION["Tisch4"] = array($row['uniqueid'],$row['month'],$row['day'],$row['reserviert'],$row['reserviertvon'],$row['tisch'],$row['year']);
      //echo $_SESSION["Tisch3"][6];
    }
  }
  header("location:index.php?result=gotrecords");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}
else if(isset($_POST['reservierenBtnTisch5'])){
    $month = $_SESSION["month"];
    $day = $_SESSION["day"];
    $name = $_POST['reservierterName'];
    $year = $_SESSION["year"];
    $table = 5;

    $sql = "INSERT INTO calenderplanner (year, month, day,reserviert,reserviertvon,tisch)
VALUES ('$year', '$month', '$day', '1', '$name', '$table')";

if ($conn->query($sql) === TRUE) {
    $_SESSION["sucessmessage"] = '<div class="alert alert-success">
    Du hast den Tisch erfolgreich reserviert.</div>';
    $sql = "SELECT * FROM calenderplanner WHERE month='$month' AND day='$day'AND year='$year'  AND tisch='5'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        //echo $row['uniqueid'].$row['year'].$row['month'].$row['day'].$row['reserviert'].$row['reserviertvon'].$row['tisch']."<br>" ;
        $_SESSION["Tisch5"] = array($row['uniqueid'],$row['month'],$row['day'],$row['reserviert'],$row['reserviertvon'],$row['tisch'],$row['year']);
        //echo $_SESSION["Tisch3"][6];
      }
    }
    header("location:index.php?result=gotrecords");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}
else if(isset($_POST['reservierenBtnTisch6'])){
  $month = $_SESSION["month"];
  $day = $_SESSION["day"];
  $name = $_POST['reservierterName'];
  $year = $_SESSION["year"];
  $table = 6;

  $sql = "INSERT INTO calenderplanner (year, month, day,reserviert,reserviertvon,tisch)
VALUES ('$year', '$month', '$day', '1', '$name', '$table')";

if ($conn->query($sql) === TRUE) {
  $_SESSION["sucessmessage"] = '<div class="alert alert-success">
  Du hast den Tisch erfolgreich reserviert.</div>';
  $sql = "SELECT * FROM calenderplanner WHERE month='$month' AND day='$day'AND year='$year'  AND tisch='6'";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //echo $row['uniqueid'].$row['year'].$row['month'].$row['day'].$row['reserviert'].$row['reserviertvon'].$row['tisch']."<br>" ;
      $_SESSION["Tisch6"] = array($row['uniqueid'],$row['month'],$row['day'],$row['reserviert'],$row['reserviertvon'],$row['tisch'],$row['year']);
      //echo $_SESSION["Tisch3"][6];
    }
  }
  header("location:index.php?result=gotrecords");

} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

}

else if(isset($_POST['reservierenBtnpark1'])){
  $month = $_SESSION["month"];
  $day = $_SESSION["day"];
  $name = $_POST['reservierterName'];
  $year = $_SESSION["year"];
  $table = 7;

  $sql = "INSERT INTO calenderplanner (year, month, day,reserviert,reserviertvon,tisch)
VALUES ('$year', '$month', '$day', '1', '$name', '$table')";

if ($conn->query($sql) === TRUE) {
  $_SESSION["sucessmessage"] = '<div class="alert alert-success">
  Du hast den Parkplatz 1 erfolgreich reserviert.</div>';
  $sql = "SELECT * FROM calenderplanner WHERE month='$month' AND day='$day'AND year='$year'  AND tisch='7'";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //echo $row['uniqueid'].$row['year'].$row['month'].$row['day'].$row['reserviert'].$row['reserviertvon'].$row['tisch']."<br>" ;
      $_SESSION["Park1"] = array($row['uniqueid'],$row['month'],$row['day'],$row['reserviert'],$row['reserviertvon'],$row['tisch'],$row['year']);
      //echo $_SESSION["Tisch3"][6];
    }
  }
  header("location:index.php?result=gotrecords");

} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

}

else if(isset($_POST['reservierenBtnpark2'])){
  $month = $_SESSION["month"];
  $day = $_SESSION["day"];
  $name = $_POST['reservierterName'];
  $year = $_SESSION["year"];
  $table = 8;

  $sql = "INSERT INTO calenderplanner (year, month, day,reserviert,reserviertvon,tisch)
VALUES ('$year', '$month', '$day', '1', '$name', '$table')";

if ($conn->query($sql) === TRUE) {
  $_SESSION["sucessmessage"] = '<div class="alert alert-success">
  Du hast den Parkplatz 2 erfolgreich reserviert.</div>';
 $sql = "SELECT * FROM calenderplanner WHERE month='$month' AND day='$day'AND year='$year'  AND tisch='4'";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //echo $row['uniqueid'].$row['year'].$row['month'].$row['day'].$row['reserviert'].$row['reserviertvon'].$row['tisch']."<br>" ;
      $_SESSION["Park2"] = array($row['uniqueid'],$row['month'],$row['day'],$row['reserviert'],$row['reserviertvon'],$row['tisch'],$row['year']);
      //echo $_SESSION["Tisch3"][6];
    }
  }
  header("location:index.php?result=gotrecords");

} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

}
