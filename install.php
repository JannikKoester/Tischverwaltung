<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Installer</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container margin:0 auto;" style="width:800px;">

<form method="post">
  <div class="form-group">
    <label for="DBHost">Host</label>
    <input type="text" class="form-control" name="dbhost" placeholder="localhost"required>
  </div>
  <div class="form-group">
  <label for="DBUser">DB-User</label>
    <input type="text" class="form-control" name="dbuser" placeholder="root"required>
  </div>
  <div class="form-group">
  <label for="DBPW">DB-Password</label>
    <input type="text" class="form-control" name="dbpw" placeholder="Database Password">
  </div>
  <button type="submit" name="dbConfigBtn" class="btn btn-primary">Weiter</button>
</form>
</div>

<?php
if(isset($_POST['dbConfigBtn']))
{

//Create Database and Tables
 
  $servername = $_POST['dbhost'];
  $username = $_POST['dbuser'];
  $password = $_POST['dbpw'];
  $db = 'calender';
  
  
  // Create connection
  $conn = new mysqli($servername, $username, $password);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Create database
  $sql = "CREATE DATABASE calender";
  if ($conn->query($sql) === TRUE) {
    //echo "Database created successfully";
  } else {
    echo "Error creating database: " . $conn->error;
  }
  $conn->close();

  $conn2 = new mysqli($servername, $username, $password,$db);
    // Create Tables
    $sql = "CREATE TABLE `calenderplanner` (
      `uniqueid` int(16) NOT NULL AUTO_INCREMENT,
      `year` int(16) NOT NULL,
      `month` int(16) NOT NULL,
      `day` int(16) NOT NULL,
      `reserviert` int(16) NOT NULL,
      `reserviertvon` varchar(16) NOT NULL,
      `tisch` int(16) NOT NULL,
      PRIMARY KEY (`uniqueid`)
    )";
    if ($conn2->query($sql) === TRUE) {
      //echo "Tables created successfully";
    } else {
      echo "Error creating database: " . $conn2->error;
    }
  
  $conn2->close();
 
//Create Database and Tables Ende

  $settingsfile = fopen("settings.php", "w") or die("Unable to open file!");
  $txt = '<?php
  $servername = "'.$_POST['dbhost'].'";
  $username = "'.$_POST['dbuser'].'";
  $password = "'.$_POST['dbpw'].'";
  $db = "calender";
  
  
  // Create connection
  $conn = new mysqli($servername, $username, $password,$db);
  // Check connection
  if ($conn->connect_error) {
    header("location:install.php");
    }
  
  ?>';
  fwrite($settingsfile, $txt);
  fclose($settingsfile);

  echo '<div class="alert alert-success">
  Die Datenbank wurde erfolgreich erstellt!
</div>';

header("location:index.php");

}
?>
</body>
</html>