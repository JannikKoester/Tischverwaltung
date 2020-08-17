<!DOCTYPE html>
<body>
<?php
    require 'required/header.php';

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
<div class="container">


                        <?php
                        if(isset($_GET['result']))
                        {
                            if($_GET['result'] == "gotrecords" || $_GET['result'] == "loggedin")
                            {   
                                    $selectedjan ='';
                                    $selectedfeb ='';
                                    $selectedmar ='';
                                    $selectedapr ='';
                                    $selectedmai ='';
                                    $selectedjun ='';
                                    $selectedjul ='';
                                    $selectedaug ='';
                                    $selectedsep ='';
                                    $selectedokt ='';
                                    $selectednov ='';
                                    $selecteddez ='';

                                switch($_SESSION["month_string"])
                                {
                                    
                                    case "Januar":
                                    $selectedjan ='selected'; 
                                    break;

                                    case "Februar":                                    
                                    $selectedfeb ='selected';   
                                    break;

                                    case "März":
                                    $selectedmar ='selected'; 
                                    break; 

                                    case "April":
                                    $selectedapr ='selected'; 
                                    break;

                                    case "Mai":
                                    $selectedmai ='selected';
                                    break;

                                    case "Juni":
                                    $selectedjun ='selected';
                                    break; 

                                    case "Juli":
                                    $selectedjul ='selected'; 
                                    break;

                                    case "August":                                    
                                    $selectedjaug ='selected'; 
                                    break;
                                    
                                    case "September":
                                    $selectedsep ='selected'; 
                                    break;

                                    case "Oktober":
                                    $selectedokt ='selected'; 
                                    break;

                                    case "November":
                                    $selectednov ='selected'; 
                                    break;

                                    case "Dezember":
                                    $selecteddez ='selected'; 
                                     break;
                                

                                }




                                echo '<form action="getTables.php" method="post">
                                <div class="form-group">
                                <label for="sel1"style="color:white;font-family:Bitter;font-size:32px;">Monat:</label>
                                <select class="form-control" name="month">
                                <option value ="Januar"'. $selectedjan.'>Januar</option>
                                <option value ="Februar"'. $selectedfeb.'>Februar</option>
                                <option value ="März"'. $selectedmar.'>März</option>
                                <option value ="April"'. $selectedapr.'>April</option>
                                <option value ="Mai"'. $selectedmai.'>Mai</option>
                                <option value ="Juni"'. $selectedjun.'>Juni</option>
                                <option value ="Juli"'. $selectedjul.'>Juli</option>
                                <option value ="August"'. $selectedaug.'>August</option>
                                <option value ="September"'. $selectedsep.'>September</option>
                                <option value ="Oktober"'. $selectedokt.'>Oktober</option>
                                <option value ="November"'. $selectednov.'>November</option>
                                <option value ="Dezember"'. $selecteddez.'>Dezember</option>
                                </select>';
                    echo '<div class="form-group">
        
                    <label for="sel1"style="color:white;font-family:Bitter;font-size:32px;">Tag:</label>
                    <select class="form-control" name="day">                   
                    <option value = '.$_SESSION["day"].' selected>'.$_SESSION["day"].'</option>
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
                  <button id="trigger" name="getTables" type="submit" class="btnchange" id="aktualisiere">Aktualisiere erneut</button>
                  </form>
                  <h2 style="color:white;font-family:Bitter; text-align:center;">'.$_SESSION["day_string"].'.  '.$_SESSION["month_string"].' </h2>';
                  

                
                            }
                            else{

                            }
                        }
                        else{
                            echo '<form action="getTables.php" method="post">
                            <div class="form-group">
                            <label for="sel1" style="color:white;font-family:Bitter;font-size:32px;">Monat:</label>
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
    
                <label for="sel1"style="color:white;font-family:Bitter;font-size:32px;">Tag:</label>
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
              <button name="getTables" type="submit" class="btnchange">Aktualisieren</button>
              </form>';
              
    
            }

                                               
                        ?>
 
 

    

    <div>


    <div class="container" style="background-color:lightgrey;opacity: 0.6;border:solid;" >
    
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
                                    echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal3" style="color:green;opacity: 1.5;">Tisch 3 <br> ist frei.</button>';

                                }
                                else
                                {
                                    echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal_change3" style="color:red;">Tisch 3 ist belegt durch <br>'.$_SESSION["Tisch3"][4].'.</button>';

                                }

                            }
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
                                    echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal_change2" style="color:red;">Tisch 2 ist belegt durch <br>'.$_SESSION["Tisch2"][4].'.</button>';

                                }

                            }
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
                                    echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal_change" style="color:red;">Tisch 1 ist belegt durch <br>'.$_SESSION["Tisch1"][4].'</button>';

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
                                    echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal_change4" style="color:red;" >Tisch 4 ist belegt durch <br>'.$_SESSION["Tisch4"][4].'.</button>';

                                }

                            }
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
                                    echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal_change5" style="color:red;">Tisch 5 ist belegt durch <br>'.$_SESSION["Tisch5"][4].'.</button>';

                                }

                            }
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
                                    echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal_change6" style="color:red;">Tisch 6 ist belegt durch <br>'.$_SESSION["Tisch6"][4].'.</button>';

                                }

                            }
                        }
                        ?>
                        
                        
                    </div>
                </li>
                <li>
                <div id="park1" style="margin-left:250px;margin-top:-268px;">
        <?php
        if(isset($_GET['result']))
        {
            if($_GET['result'] == "gotrecords")
            {   
                if($_SESSION["Park1"] == "FREI")
                {
                    echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModalpark1" style="color:green; height:265px;">Parkplatz 1  <br> ist frei.</button>';

                }
                else
                {
                    echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal_changepark1" style="color:red; height:265px;">Parkplatz 1 ist belegt durch <br>'.$_SESSION["Park1"][4].'.</button>';

                }

            }
        }
        ?>
        
        
    </div>
</li>
<li>
                <div id="park2" style="margin-left:500px;margin-top:-273px;">
        <?php
        if(isset($_GET['result']))
        {
            if($_GET['result'] == "gotrecords")
            {   
                if($_SESSION["Park2"] == "FREI")
                {
                    echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModalpark2" style="color:green; height:265px;">Parkplatz 2  <br> ist frei.</button>';

                }
                else
                {
                    echo '<button id="buttonTable1" type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal_changepark2" style="color:red; height:265px;">Parkplatz 2 ist belegt durch <br>'.$_SESSION["Park2"][4].'.</button>';

                }

            }
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
     if(isset( $_SESSION["sucessmessagedeleted"])){
        echo $_SESSION["sucessmessagedeleted"];
        $_SESSION["sucessmessagedeleted"]="";
     }
     if(isset( $_SESSION["sucessmessagereplaced"])){
        echo $_SESSION["sucessmessagereplaced"];
        $_SESSION["sucessmessagereplaced"]="";
     }
     if(isset( $_SESSION["accnotfound"])){
        echo $_SESSION["accnotfound"];
        $_SESSION["accnotfound"]="";
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
  height:90px;
  width:200px;
}


</style>







</html>