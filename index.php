
<!DOCTYPE html>
<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}else
{
    session_destroy();
    session_start();
}
require 'settings.php';
require 'modal.php';

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="calender.css">
<script src="tables.js"></script>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

                        <?php
                        if(isset($_GET['result']))
                        {
                            if($_GET['result'] == "gotrecords")
                            {   
                                echo '<form action="getTables.php" method="post">
                                <div class="form-group">
                                <label for="sel1">Monat:</label>
                                <select class="form-control" name="month">
                                <option value ="Januar">Januar</option>
                                <option value ="Februar">Februar</option>
                                <option value ="März">März</option>
                                <option value ="April">April</option>
                                <option value ="Mai">Mai</option>
                                <option value ="Juni">Juni</option>
                                <option value ="Juli">Juli</option>
                                <option value ="August">August</option>
                                <option value ="September">September</option>
                                <option value ="Oktober">Oktober</option>
                                <option value ="November">November</option>
                                <option value ="Dezember">Dezember</option>
                                </select>';
                    echo '<div class="form-group">
        
                    <label for="sel1">Tag:</label>
                    <select class="form-control" name="day">
                      <option value ="1">1</option>
                      <option value ="2">2</option>
                      <option value ="3">3</option>
                      <option value ="4">4</option>
                      <option value ="5">5</option>
                      <option value ="6">6</option>
                      <option value ="7">7</option>
                      <option value ="8">8</option>
                      <option value ="9">9</option>
                      <option value ="10">10</option>
                      <option value ="11">11</option>
                      <option value ="12">12</option>
                      <option value ="13">13</option>
                      <option value ="14">14</option>
                      <option value ="15">15</option>
                      <option value ="16">16</option>
                      <option value ="17">17</option>
                      <option value ="18">18</option>
                      <option value ="19">19</option>
                      <option value ="20">20</option>
                      <option value ="21">21</option>
                      <option value ="22">22</option>
                      <option value ="23">23</option>
                      <option value ="24">24</option>
                      <option value ="25">25</option>
                      <option value ="26">26</option>
                      <option value ="27">27</option>
                      <option value ="28">28</option>
                      <option value ="29">29</option>
                      <option value ="30">30</option>
                    </select>
                  </div>
                  <button name="getTables" type="submit" class="btn btn-primary">Aktualisiere erneut</button>
                  </form>
                  <h2>'.$_SESSION["day_string"].'. '.$_SESSION["month_string"].' </h2>';
                            }
                            else{

                            }
                        }
                        else{
                            echo '<form action="getTables.php" method="post">
                            <div class="form-group">
                            <label for="sel1">Monat:</label>
                            <select class="form-control" name="month">
                            <option value ="Januar">Januar</option>
                            <option value ="Februar">Februar</option>
                            <option value ="März">März</option>
                            <option value ="April">April</option>
                            <option value ="Mai">Mai</option>
                            <option value ="Juni">Juni</option>
                            <option value ="Juli">Juli</option>
                            <option value ="August">August</option>
                            <option value ="September">September</option>
                            <option value ="Oktober">Oktober</option>
                            <option value ="November">November</option>
                            <option value ="Dezember">Dezember</option>
                            </select>';
                echo '<div class="form-group">
    
                <label for="sel1">Tag:</label>
                <select class="form-control" name="day">
                  <option value ="1">1</option>
                  <option value ="2">2</option>
                  <option value ="3">3</option>
                  <option value ="4">4</option>
                  <option value ="5">5</option>
                  <option value ="6">6</option>
                  <option value ="7">7</option>
                  <option value ="8">8</option>
                  <option value ="9">9</option>
                  <option value ="10">10</option>
                  <option value ="11">11</option>
                  <option value ="12">12</option>
                  <option value ="13">13</option>
                  <option value ="14">14</option>
                  <option value ="15">15</option>
                  <option value ="16">16</option>
                  <option value ="17">17</option>
                  <option value ="18">18</option>
                  <option value ="19">19</option>
                  <option value ="20">20</option>
                  <option value ="21">21</option>
                  <option value ="22">22</option>
                  <option value ="23">23</option>
                  <option value ="24">24</option>
                  <option value ="25">25</option>
                  <option value ="26">26</option>
                  <option value ="27">27</option>
                  <option value ="28">28</option>
                  <option value ="29">29</option>
                  <option value ="30">30</option>
                </select>
              </div>
              <button name="getTables" type="submit" class="btn btn-primary">Aktualisieren</button>
              </form>';
    
            }

                                               
                        ?>
 
 

    

    <div>


    <div class="container" style="border:solid;">
    
        <div class="right-tables">
            <ul>
                <li>
                <div id="table3">
                        <?php
                        if(isset($_GET['result']))
                        {
                            if($_GET['result'] == "gotrecords")
                            {   
                                if($_SESSION["Tisch3"] == "FREI")
                                {
                                    echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal3" style="color:green;">Tisch 3 <br> ist frei.</button>';

                                }
                                else
                                {
                                    echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal3" style="color:red;"disabled>Tisch 3 ist belegt durch <br>'.$_SESSION["Tisch3"][4].'.</button>';

                                }

                            }
                        }
                        else{
                                //echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal3">Tisch 3</button>';
                        }
                        ?>
                        
                        
                    </div>
                </li>

                <li>

                <div id="table2">
                        <?php
                        if(isset($_GET['result']))
                        {
                            if($_GET['result'] == "gotrecords")
                            {   
                                if($_SESSION["Tisch2"] == "FREI")
                                {
                                    echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal2" style="color:green;">Tisch 2 <br> ist frei.</button>';

                                }
                                else
                                {
                                    echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal2" style="color:red;"disabled>Tisch 2 ist belegt durch <br>'.$_SESSION["Tisch2"][4].'.</button>';

                                }

                            }
                        }
                        else{
                                //echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal2">Tisch 2</button>';
                        }
                        ?>
                        
                        
                    </div>
                </li>
                <li>

                    <div id="table1">
                        <?php
                        if(isset($_GET['result']))
                        {
                            if($_GET['result'] == "gotrecords")
                            {   
                                if($_SESSION["Tisch1"] == "FREI")
                                {
                                    echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal" style="color:green;">Tisch 1 <br> ist frei.</button>';

                                }
                                else
                                {
                                    echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal" style="color:red;"disabled>Tisch 1 ist belegt durch <br>'.$_SESSION["Tisch1"][4].'</button>';

                                }

                            }
                        }
                        else{
                                //echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal">Tisch 1</button>';
                        }
                        ?>
                        
                        
                    </div>
                </li>
            </ul>
        </div>

        <div class="left-tables">
            <ul>
                <li>
                <div id="table4">
                        <?php
                        if(isset($_GET['result']))
                        {
                            if($_GET['result'] == "gotrecords")
                            {   
                                if($_SESSION["Tisch4"] == "FREI")
                                {
                                    echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal4" style="color:green;">Tisch 4 <br> ist frei.</button>';

                                }
                                else
                                {
                                    echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal4" style="color:red;" disabled>Tisch 4 ist belegt durch <br>'.$_SESSION["Tisch4"][4].'.</button>';

                                }

                            }
                        }
                        else{
                               // echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal4">Tisch 4 ist belegt.</button>';
                        }
                        ?>
                        
                        
                    </div>
                </li>

                <li>

                <div id="table5">
                        <?php
                        if(isset($_GET['result']))
                        {
                            if($_GET['result'] == "gotrecords")
                            {   
                                if($_SESSION["Tisch5"] == "FREI")
                                {
                                    echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal5" style="color:green;">Tisch 5 <br> ist frei.</button>';

                                }
                                else
                                {
                                    echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal5" style="color:red;"disabled>Tisch 5 ist belegt durch <br>'.$_SESSION["Tisch5"][4].'.</button>';

                                }

                            }
                        }
                        else{
                                //echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal5">Tisch 5</button>';
                        }
                        ?>
                        
                        
                    </div>
                </li>
                <li>

                <div id="table6">
                        <?php
                        if(isset($_GET['result']))
                        {
                            if($_GET['result'] == "gotrecords")
                            {   
                                if($_SESSION["Tisch6"] == "FREI")
                                {
                                    echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal6" style="color:green;">Tisch 6 <br> ist frei.</button>';

                                }
                                else
                                {
                                    echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal6" style="color:red;"disabled>Tisch 6 ist belegt durch <br>'.$_SESSION["Tisch6"][4].'.</button>';

                                }

                            }
                        }
                        else{
                                //echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal6">Tisch 6</button>';
                        }
                        ?>
                        
                        
                    </div>
                </li>
            </ul>
        </div>
<?php
     if(isset( $_SESSION["sucessmessage"])){
        echo $_SESSION["sucessmessage"];
        $_SESSION["sucessmessage"]="";
     }
                        
            
?>
 

    </div>

    
</body>



<style>
.left-tables button  {
    width: 220px;
    height: 130px;
    border: solid;
    
}
.left-tables ul li  {
    
    list-style-type: none;
    padding-top: 5px;
    
}

.right-tables button  {
    width: 225px;
    height: 130px;
    border: solid;
    
}
.right-tables ul li  {
    list-style-type: none;
    display: inline-block;
    padding-top: 10px;
    
}

button:disabled,
button[disabled]{
  border: 3px solid red !important;

  color: red !important;
}


</style>
</html>