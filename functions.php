<?php
require 'settings.php';
class Funcs
{

    public static function InsertDatas($conn, $ds, $de, $n,$tisch)
    {
        $day = $_SESSION["day"];
        $month = $_SESSION["month"];
        $year = $_SESSION["year"];
        $daystart = $ds;
        $dayend = $de;
        $name = $n;

        
        $table = $tisch;

        for ($daystart; $daystart <= $dayend; $daystart++) {

            $sql = "INSERT INTO calenderplanner (year, month, day,reserviert,reserviertvon,tisch)
    VALUES ('$year', '$month', '$daystart', '1', '$name', '$table')";
            $conn->query($sql);
        }
        $sql = "SELECT * FROM calenderplanner WHERE month='$month' AND day='$day'AND year='$year'  AND tisch='1'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                //echo $row['uniqueid'].$row['year'].$row['month'].$row['day'].$row['reserviert'].$row['reserviertvon'].$row['tisch']."<br>" ;
                $_SESSION["Tisch1"] = array($row['uniqueid'], $row['month'], $row['day'], $row['reserviert'], $row['reserviertvon'], $row['tisch'], $row['year']);
                //echo $_SESSION["Tisch3"][6];
            }
            $_SESSION["sucessmessage"] = '<div class="alert alert-success">
Du hast den Tisch erfolgreich reserviert.</div>';
            header("location:index.php?result=gotrecords");
        }
    }
}
