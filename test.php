<!-- Modals für erstes belegen Mehrfachauswahl-->
<div class="container">

<!-- The Modal Tisch 1 -->
<form action="insertEntry.php" method="post">
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tisch 1 neu</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      <form action="getTables.php" method="post">
      <h2>Geben Sie Ihren Namen ein:</h2>
            <label for="lname">Name:</label>
            <input type="text" id="lname" name="reservierterName"required><br><br>
            
            <?php
            echo '<h3>Reservieren von</h3>';
            echo '<select class="form-control" name="daystart" id="daystart" onchange="ValidInputs()">';
                             for ($i=1; $i <32 ; $i++) { 
                              $month = $_SESSION['month_string'];
                                if ($i == 1) {
                                    echo "<option value='$i' selected>$i. $month</option>";
                                } else {
                                    echo "<option value ='$i'> $i. $month</option>";
                                }
                                
                            }
                            echo '</select>';
                            echo '<h3>bis</h3>';
                            echo '<select class="form-control" name="dayend" id="dayend" onchange="ValidInputs()">';
                             for ($i=1; $i <32 ; $i++) { 
                              $month = $_SESSION['month_string'];
                                if ($i == 1) {
                                    echo "<option value='$i' selected>$i. $month</option>";
                                } else {
                                    echo "<option value ='$i'> $i. $month</option>";
                                }
                                
                            }
                            echo '</select>';
                            
            ?>
            <br>
            

            <input class="btn btn-primary" type="submit" id="reservierenbutton"value="Reservieren" name="reservierenBtnTisch1" >
        </form>
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
  </form>
</div>

</div>



if(isset($_POST['reservierenBtnTisch1'])){
    $month = $_SESSION["month"];
    $daystart=intval($_POST['daystart']);
    $dayend = intval($_POST['dayend']);
    $name = $_POST['reservierterName'];
    $year = $_SESSION["year"];
    $table = 1;
    


  for ($daystart; $daystart <= $dayend ; $daystart++) { 
          
    $sql = "INSERT INTO calenderplanner (year, month, day,reserviert,reserviertvon,tisch)
    VALUES ('$year', '$month', '$daystart', '1', '$name', '$table')";
    $conn->query($sql);
    
    
}
$_SESSION["sucessmessage"] = '<div class="alert alert-success">
Du hast den Tisch erfolgreich reserviert.</div>';
header("location:index.php");
}