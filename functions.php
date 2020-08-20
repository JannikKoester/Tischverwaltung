<?php
require 'settings.php';
class Funcs
{

    public static function InsertDatas($conn, $ds, $de, $n, $tisch, $tnum)
    {
        $day = $_SESSION["day"];
        $month = $_SESSION["month"];
        $year = $_SESSION["year"];
        $daystart = $ds;
        $dayend = $de;
        $name = $n;

        $besetzt = array();
        $table = $tisch;

        for ($daystart; $daystart <= $dayend; $daystart++) {

            $sql = "SELECT * FROM calenderplanner WHERE month='$month' AND day='$daystart'AND year='$year'  AND tisch='$table'";
            $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            
            while ($row = $result->fetch_assoc()) {
                $besetzt[$row['day']] = $row['reserviertvon'];
                //array_push($besetzt[$row['day'] = $row['reserviertvon']]);
            }
            }
            else{
                $sql = "INSERT INTO calenderplanner (year, month, day,reserviert,reserviertvon,tisch)
            VALUES ('$year', '$month', '$daystart', '1', '$name', '$table')";
            $conn->query($sql);
            }

            
        }
        $sql = "SELECT * FROM calenderplanner WHERE month='$month' AND day='$day'AND year='$year'  AND tisch='$table'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $_SESSION[$tnum] = array($row['uniqueid'], $row['month'], $row['day'], $row['reserviert'], $row['reserviertvon'], $row['tisch'], $row['year']);
            }
        }

            if(empty($besetzt)) {
                
                $_SESSION["sucessmessage"] = '<div class="alert alert-success">
                Du hast den/die Tisch/e erfolgreich reserviert.</div>';
                
                header("location:index.php?result=gotrecords");
            }
            else
            {
                $_SESSION["sucessmessage"] = '<div class="alert alert-danger">
                
                Folgende Tische sind schon belegt von: <br>
                ';
                
                foreach ($besetzt as $key => $value)
                {
                    
                    $_SESSION["sucessmessage"].= "Tag ".$key." belegt von: ".$value." <br>";
                }
                
                $_SESSION["sucessmessage"].='</div><br>';
                $_SESSION["sucessmessage"].='<div class="alert alert-success">
                
                Die freien Tische wurden belegt! <br>
                </div><br>';
                
                header("location:index.php?result=gotrecords");
            }
            
        

        }
    
}
