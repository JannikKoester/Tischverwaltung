<?php
session_start();

require 'settings.php';

if(isset($_POST['reservierenBtnTisch1'])){
    $month = $_SESSION["month"];
    $day = $_SESSION["day"];
    $name = $_POST['reservierterName'];
    $table = 1;

    $sql = "INSERT INTO calenderplanner (year, month, day,reserviert,reserviertvon,tisch)
VALUES ('2020', '$month', '$day', '1', '$name', '$table')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  $_SESSION["sucessmessage"] = '<div class="alert alert-success">
  Du hast den Tisch erfolgreich reserviert.</div>';
  $_SESSION["Tisch1"] = array(1,2,3,4,$name);
  header("location:index.php?result=gotrecords");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}
else if(isset($_POST['reservierenBtnTisch2'])){
    $month = $_SESSION["month"];
    $day = $_SESSION["day"];
    $name = $_POST['reservierterName'];
    $table = 2;

    $sql = "INSERT INTO calenderplanner (year, month, day,reserviert,reserviertvon,tisch)
VALUES ('2020', '$month', '$day', '1', '$name', '$table')";

if ($conn->query($sql) === TRUE) {
    $_SESSION["sucessmessage"] = '<div class="alert alert-success">
    Du hast den Tisch erfolgreich reserviert.</div>';
    $_SESSION["Tisch2"] = array(1,2,3,4,$name);
    header("location:index.php?result=gotrecords");
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}
else if(isset($_POST['reservierenBtnTisch3'])){
    $month = $_SESSION["month"];
    $day = $_SESSION["day"];
    $name = $_POST['reservierterName'];
    $table = 3;

    $sql = "INSERT INTO calenderplanner (year, month, day,reserviert,reserviertvon,tisch)
VALUES ('2020', '$month', '$day', '1', '$name', '$table')";

if ($conn->query($sql) === TRUE) {
    $_SESSION["sucessmessage"] = '<div class="alert alert-success">
    Du hast den Tisch erfolgreich reserviert.</div>';
    $_SESSION["Tisch3"] = array(1,2,3,4,$name);
    header("location:index.php?result=gotrecords");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}
else if(isset($_POST['reservierenBtnTisch4'])){
    $month = $_SESSION["month"];
    $day = $_SESSION["day"];
    $name = $_POST['reservierterName'];
    $table = 4;

    $sql = "INSERT INTO calenderplanner (year, month, day,reserviert,reserviertvon,tisch)
VALUES ('2020', '$month', '$day', '1', '$name', '$table')";

if ($conn->query($sql) === TRUE) {
    $_SESSION["sucessmessage"] = '<div class="alert alert-success">
  Du hast den Tisch erfolgreich reserviert.</div>';
  $_SESSION["Tisch4"] = array(1,2,3,4,$name);
  header("location:index.php?result=gotrecords");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}
else if(isset($_POST['reservierenBtnTisch5'])){
    $month = $_SESSION["month"];
    $day = $_SESSION["day"];
    $name = $_POST['reservierterName'];
    $table = 5;

    $sql = "INSERT INTO calenderplanner (year, month, day,reserviert,reserviertvon,tisch)
VALUES ('2020', '$month', '$day', '1', '$name', '$table')";

if ($conn->query($sql) === TRUE) {
    $_SESSION["sucessmessage"] = '<div class="alert alert-success">
    Du hast den Tisch erfolgreich reserviert.</div>';
    $_SESSION["Tisch5"] = array(1,2,3,4,$name);
    header("location:index.php?result=gotrecords");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}
else if(isset($_POST['reservierenBtnTisch6'])){
  $month = $_SESSION["month"];
  $day = $_SESSION["day"];
  $name = $_POST['reservierterName'];
  $table = 6;

  $sql = "INSERT INTO calenderplanner (year, month, day,reserviert,reserviertvon,tisch)
VALUES ('2020', '$month', '$day', '1', '$name', '$table')";

if ($conn->query($sql) === TRUE) {
  $_SESSION["sucessmessage"] = '<div class="alert alert-success">
  Du hast den Tisch erfolgreich reserviert.</div>';
  $_SESSION["Tisch6"] = array(1,2,3,4,$name);
  header("location:index.php?result=gotrecords");

} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

}

else if(isset($_POST['reservierenBtnpark1'])){
  $month = $_SESSION["month"];
  $day = $_SESSION["day"];
  $name = $_POST['reservierterName'];
  $table = 7;

  $sql = "INSERT INTO calenderplanner (year, month, day,reserviert,reserviertvon,tisch)
VALUES ('2020', '$month', '$day', '1', '$name', '$table')";

if ($conn->query($sql) === TRUE) {
  $_SESSION["sucessmessage"] = '<div class="alert alert-success">
  Du hast den Parkplatz 1 erfolgreich reserviert.</div>';
  $_SESSION["Park1"] = array(1,2,3,4,$name);
  header("location:index.php?result=gotrecords");

} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

}

else if(isset($_POST['reservierenBtnpark2'])){
  $month = $_SESSION["month"];
  $day = $_SESSION["day"];
  $name = $_POST['reservierterName'];
  $table = 8;

  $sql = "INSERT INTO calenderplanner (year, month, day,reserviert,reserviertvon,tisch)
VALUES ('2020', '$month', '$day', '1', '$name', '$table')";

if ($conn->query($sql) === TRUE) {
  $_SESSION["sucessmessage"] = '<div class="alert alert-success">
  Du hast den Parkplatz 2 erfolgreich reserviert.</div>';
  $_SESSION["Park2"] = array(1,2,3,4,$name);
  header("location:index.php?result=gotrecords");

} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

}


    
?>