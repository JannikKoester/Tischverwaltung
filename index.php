<!DOCTYPE html>

<body>
    <?php
    if (!file_exists("settings.php")) {

        header("location:install.php");
    }
    require 'required/header.php';

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    } else {
        session_destroy();
        session_start();
    }
    require 'settings.php';
    require 'modal.php';
    ?>

    <div class="container-fluid">


        <?php
        if (isset($_GET['result'])) {
            if ($_GET['result'] == "gotrecords" || $_GET['result'] == "loggedin") {

            //DROPDOWN JAHRE
                echo '<form action="getTables.php" method="post">
                                <div class="form-group">
                                <label for="sel1"style="color:white;font-family:Bitter;font-size:24px;">Jahr:</label>
                                <select class="form-control" name="year" onchange="refreshListe()">';
                for ($i = 2020; $i < 2030; $i++) {

                    if ($i == $_SESSION["year"]) {
                        echo ("<option value='$i' selected>$i</option>");
                    } else {
                        echo '<option value =' . $i . '>' . $i . '</option>';
                    }
                }


                echo '</select>';
            //DROPDOWN MONATE
                $monate = array('Januar','Februar','März','April','Mai','Juni','Juli','August',
                'September','Oktober','November','Dezember');
                
                echo '<form action="getTables.php" method="post">
                <div class="form-group">
                <label for="sel1"style="color:white;font-family:Bitter;font-size:24px;">Monat:</label>
                <select class="form-control" name="month"onchange="refreshListe()">';
                for ($i=0; $i <12 ; $i++) { 
                  if($monate[$i] == $_SESSION["month_string"])
                  {
                    echo ("<option value='$monate[$i]'selected>$monate[$i]</option>");
                  }
                  echo '<option value ='.$monate[$i].'>'.$monate[$i].'</option>';
                }
                
                echo '</select>';

            //DROPDOWN TAGE

                echo '<div class="form-group">
        
                    <label for="sel1"style="color:white;font-family:Bitter;font-size:24px;">Tag:</label>
                    <select class="form-control" name="day" onchange="refreshListe()">';

                for ($i = 1; $i < 32; $i++) {
                    if ($i == $_SESSION["day"]) {
                        echo ("<option value='$i' selected>$i</option>");
                    } else {
                        echo ("<option value='$i'>$i</option>");
                    }
                }
                echo '</select>
                  </div>
                  <button id="refresh" name="getTables" type="submit" class="btnchange"style="display:none;" >Aktualisiere erneut</button>
                  </form>
                  <h2 style="color:white;font-family:Bitter; text-align:center;">' . $_SESSION["day_string"] . '.  ' . $_SESSION["month_string"] . ' ' . $_SESSION["year"] . ' </h2>';
            } else {
            }
        } else {
            //DROPDOWN JAHRE
            echo '<form action="getTables.php" method="post">
                            <div class="form-group">
                            <label for="sel1"style="color:white;font-family:Bitter;font-size:24px;">Jahr:</label>
                            <select class="form-control" name="year" onchange="refreshListe()">';
            for ($i = 2020; $i < 2030; $i++) {

                if ($i == $_SESSION["year"]) {
                    echo ("<option value='$i' selected>$i</option>");
                } else {
                    echo '<option value =' . $i . '>' . $i . '</option>';
                }
            }
            echo '</select>';
            //DROPDOWN MONATE
            $monate = array('Januar','Februar','März','April','Mai','Juni','Juli','August',
            'September','Oktober','November','Dezember');
            
            echo '<form action="getTables.php" method="post">
            <div class="form-group">
            <label for="sel1"style="color:white;font-family:Bitter;font-size:24px;">Monat:</label>
            <select class="form-control" name="month"onchange="refreshListe()">';
            for ($i=0; $i <12 ; $i++) { 
              if($monate[$i] == $_SESSION["month_string"])
              {
                echo ("<option value='$monate[$i]'selected>$monate[$i]</option>");
              }
              echo '<option value ='.$monate[$i].'>'.$monate[$i].'</option>';
            }
            
            echo '</select>';
            //DROPDOWN JAHRE
            echo '<div class="form-group">
        
                            <label for="sel1"style="color:white;font-family:Bitter;font-size:24px;">Tag:</label>
                            <select class="form-control" name="day" onchange="refreshListe()">';

            for ($i = 1; $i < 32; $i++) {
                if ($i == $_SESSION["day"]) {
                    echo ("<option value='$i' selected>$i</option>");
                } else {
                    echo ("<option value='$i'>$i</option>");
                }
            }
            echo '</select>
                          </div>
                          <button id="refresh" name="getTables" type="submit" class="btnchange style="display:none;"" >Aktualisiere</button>
                          </form>';
        }


        ?>





        <div>


            <div class="container-fluid" style="background-color:lightgrey;opacity: 0.6;border:solid; width:800px;">

                <div class="right-tables">
                    <ul>
                        <li>
                            <div id="table4">
                                <?php
                                if (isset($_GET['result'])) {
                                    if ($_GET['result'] == "gotrecords") {
                                        if ($_SESSION["Tisch4"] == "FREI") {
                                            echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal4" style="color:green; width:120px;">Tisch 4 <br> ist frei.</button>';
                                        } else {
                                            echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal_change4" style="color:red;width:120px;" >Tisch 4 ist belegt durch <br>' . $_SESSION["Tisch4"][4] . '.</button>';
                                        }
                                    }
                                }
                                ?>


                            </div>
                        </li>
                        <li>
                            <div id="table3">
                                <?php
                                if (isset($_GET['result'])) {
                                    if ($_GET['result'] == "gotrecords") {
                                        if ($_SESSION["Tisch3"] == "FREI" || $_SESSION["Tisch3"][6] != $_SESSION["year"]) {
                                            echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal3" style="color:green;opacity: 1.5;width:120px;">Tisch 3 <br> ist frei.</button>';
                                        } else {
                                            echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal_change3" style="color:red;width:120px;">Tisch 3 ist belegt durch <br>' . $_SESSION["Tisch3"][4] . '.</button>';
                                        }
                                    }
                                }
                                ?>


                            </div>
                        </li>

                        <li>

                            <div id="table2">
                                <?php
                                if (isset($_GET['result'])) {
                                    if ($_GET['result'] == "gotrecords") {
                                        if ($_SESSION["Tisch2"] == "FREI") {
                                            echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal2" style="color:green;">Tisch 2 <br> ist frei.</button>';
                                        } else {
                                            echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal_change2" style="color:red;">Tisch 2 ist belegt durch <br>' . $_SESSION["Tisch2"][4] . '.</button>';
                                        }
                                    }
                                }
                                ?>


                            </div>
                        </li>
                        <li>

                            <div id="table1">
                                <?php
                                if (isset($_GET['result'])) {
                                    if ($_GET['result'] == "gotrecords") {
                                        if ($_SESSION["Tisch1"] == "FREI") {
                                            echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal" style="color:green;">Tisch 1 <br> ist frei.</button>';
                                        } else {
                                            echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal_change" style="color:red;">Tisch 1 ist belegt durch <br>' . $_SESSION["Tisch1"][4] . '</button>';
                                        }
                                    }
                                }
                                ?>


                            </div>
                        </li>
                    </ul>
                </div>

                <div class="left-tables">
                    <ul>


                        <li>

                            <div id="table5">
                                <?php
                                if (isset($_GET['result'])) {
                                    if ($_GET['result'] == "gotrecords") {
                                        if ($_SESSION["Tisch5"] == "FREI") {
                                            echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal5" style="color:green;">Tisch 5 <br> ist frei.</button>';
                                        } else {
                                            echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal_change5" style="color:red;">Tisch 5 ist belegt durch <br>' . $_SESSION["Tisch5"][4] . '.</button>';
                                        }
                                    }
                                }
                                ?>


                            </div>
                        </li>
                        <li>

                            <div id="table6">
                                <?php
                                if (isset($_GET['result'])) {
                                    if ($_GET['result'] == "gotrecords") {
                                        if ($_SESSION["Tisch6"] == "FREI") {
                                            echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal6" style="color:green;">Tisch 6 <br> ist frei.</button>';
                                        } else {
                                            echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal_change6" style="color:red;">Tisch 6 ist belegt durch <br>' . $_SESSION["Tisch6"][4] . '.</button>';
                                        }
                                    }
                                }
                                ?>


                            </div>
                        </li>
                        <li>
                            <div id="park1" style="margin-left:250px;margin-top:-268px;">
                                <?php
                                if (isset($_GET['result'])) {
                                    if ($_GET['result'] == "gotrecords") {
                                        if ($_SESSION["Park1"] == "FREI") {
                                            echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModalpark1" style="color:green; height:265px;">Parkplatz 1  <br> ist frei.</button>';
                                        } else {
                                            echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal_changepark1" style="color:red; height:265px;">Parkplatz 1 ist belegt durch <br>' . $_SESSION["Park1"][4] . '.</button>';
                                        }
                                    }
                                }
                                ?>


                            </div>
                        </li>
                        <li>
                            <div id="park2" style="margin-left:500px;margin-top:-273px;">
                                <?php
                                if (isset($_GET['result'])) {
                                    if ($_GET['result'] == "gotrecords") {
                                        if ($_SESSION["Park2"] == "FREI") {
                                            echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModalpark2" style="color:green; height:265px;">Parkplatz 2  <br> ist frei.</button>';
                                        } else {
                                            echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal_changepark2" style="color:red; height:265px;">Parkplatz 2 ist belegt durch <br>' . $_SESSION["Park2"][4] . '.</button>';
                                        }
                                    }
                                }
                                ?>


                            </div>
                        </li>
                    </ul>



                </div>
                <?php
                if (isset($_SESSION["sucessmessage"])) {
                    echo $_SESSION["sucessmessage"];
                    $_SESSION["sucessmessage"] = "";
                }
                if (isset($_SESSION["sucessmessagedeleted"])) {
                    echo $_SESSION["sucessmessagedeleted"];
                    $_SESSION["sucessmessagedeleted"] = "";
                }
                if (isset($_SESSION["sucessmessagereplaced"])) {
                    echo $_SESSION["sucessmessagereplaced"];
                    $_SESSION["sucessmessagereplaced"] = "";
                }
                if (isset($_SESSION["errmsg"])) {
                    echo $_SESSION["errmsg"];
                    $_SESSION["errmsg"] = "";
                }


                ?>

            </div>






        </div>
        <br>

        <?php
        require 'required/footer.php';
        ?>



</body>





<style>
    .left-tables button {
        width: 220px;
        height: 130px;
        border: solid;

    }

    .left-tables ul li {

        list-style-type: none;
        padding-top: 5px;

    }

    .right-tables button {
        width: 225px;
        height: 130px;
        border: solid;

    }

    .right-tables ul li {
        list-style-type: none;
        display: inline-block;
        padding-top: 10px;

    }

    .btnchange {
        background: #208f8f;
        border-radius: 20px;
        font-size: inherit;
        color: #fff;
        box-shadow: none;
        border: none;
        text-shadow: none;
        padding: .5rem .8rem;
        transition: background-color 0.25s;
        height: 50px;
        width: 200px;
    }

    .btnchange:hover {
        background: #269d9d;
    }
</style>







</html>