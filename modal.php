<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}else
{

}
function selected()
{
  
}
?>
<!-- Modals für erstes belegen-->
    <div class="container">

<!-- The Modal Tisch 1 -->
<form action="insertEntry.php" method="post">
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tisch 1</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      <form action="getTables.php" method="post">
      <h2>Geben Sie Ihren Namen ein:</h2>
            <label for="lname">Name:</label>
            <input type="text" id="lname" name="reservierterName"required><br><br>
            <input class="btn btn-primary" type="submit" value="Reservieren" name="reservierenBtnTisch1" >
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
<div class="container">

<!-- The Modal Tisch 2 -->
<form action="insertEntry.php" method="post">
<div class="modal" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tisch 2</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      <form action="getTables.php">
      <h2>Geben Sie Ihren Namen ein:</h2>
            <label for="lname">Name:</label>
            <input type="text" id="lname" name="reservierterName"required><br><br>
            <input class="btn btn-primary" type="submit" value="Reservieren" name="reservierenBtnTisch2" >
        </form>
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
      
    </div>
    </form>
  </div>
</div>

</div>
<div class="container">

<!-- The Modal Tisch 3 -->
<form action="insertEntry.php" method="post">
<div class="modal" id="myModal3">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tisch 3</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      <form action="getTables.php">
      <h2>Geben Sie Ihren Namen ein:</h2>
            <label for="lname">Name:</label>
            <input type="text" id="lname" name="reservierterName"required><br><br>
            <input class="btn btn-primary" type="submit" value="Reservieren" name="reservierenBtnTisch3" >
        </form>
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
      
    </div>
    </form>
  </div>
</div>

</div>
<div class="container">

<!-- The Modal Tisch 4 -->
<form action="insertEntry.php" method="post">
<div class="modal" id="myModal4">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tisch 4</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      <form action="getTables.php">
      <h2>Geben Sie Ihren Namen ein:</h2>
            <label for="lname">Name:</label>
            <input type="text" id="lname" name="reservierterName"required><br><br>
            <input class="btn btn-primary" type="submit" value="Reservieren" name="reservierenBtnTisch4" >
        </form>
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
      
    </div>
    </form>
  </div>
</div>

</div>
<div class="container">

<!-- The Modal Tisch 5 -->
<form action="insertEntry.php" method="post">
<div class="modal" id="myModal5">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tisch 5</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      <form action="getTables.php">
      <h2>Geben Sie Ihren Namen ein:</h2>
            <label for="lname">Name:</label>
            <input type="text" id="lname" name="reservierterName"required><br><br>
            <input class="btn btn-primary" type="submit" value="Reservieren" name="reservierenBtnTisch5" >
        </form>
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
      
    </div>
    </form>
  </div>
</div>

</div>
<div class="container">

<!-- The Modal Tisch 6 -->
<form action="insertEntry.php" method="post">
<div class="modal" id="myModal6">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tisch 5</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      <form action="getTables.php">
      <h2>Geben Sie Ihren Namen ein:</h2>
            <label for="lname">Name:</label>
            <input type="text" id="lname" name="reservierterName"required><br><br>
            <input class="btn btn-primary" type="submit" value="Reservieren" name="reservierenBtnTisch6" >
        </form>
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
      
    </div>
    </form>
  </div>
</div>

</div>
<div class="container">

<!-- The Modal Parkplatz 1 -->
<form action="insertEntry.php" method="post">
<div class="modal" id="myModalpark1">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Parkplatz 1</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      <form action="/action_page.php">
      <h2>Geben Sie Ihren Namen ein:</h2>
            <label for="lname">Name:</label>
            <input type="text" id="lname" name="reservierterName"required><br><br>
            <input class="btn btn-primary" type="submit" value="Reservieren" name="reservierenBtnpark1" >
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

<div class="container">

<!-- The Modal Parkplatz 2 -->
<form action="insertEntry.php" method="post">
<div class="modal" id="myModalpark2">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Parkplatz 2</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      <form action="/action_page.php">
      <h2>Geben Sie Ihren Namen ein:</h2>
            <label for="lname">Name:</label>
            <input type="text" id="lname" name="reservierterName"required><br><br>
            <input class="btn btn-primary" type="submit" value="Reservieren" name="reservierenBtnpark2" >
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

<!-- Modals für das Belegen wenn schon jemand zugewiesen wurde-->
<div class="container">

<!-- The Modal Tisch 1 -->
<form action="getTables.php" method="post">
<div class="modal" id="myModal_change">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tisch 1</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      <form action="getTables.php" method="post">
        <h2>Aktuell reserviert von: <?php echo '<br>'. $_SESSION["Tisch1"][4]; ?></h2>
            <input class="btn btn-primary" type="submit" value="Namen löschen" name="reservierenBtnTisch1Delete" >
        </form>

      <form action="getTables.php" method="post">
            <h2>Geben Sie Ihren neuen Namen ein:</h2>
            <label for="lname">Name:</label>
            <input type="text" id="lname" name="reservierterNameReplace1"required><br><br>
            <input class="btn btn-primary" type="submit" value="Reservieren" name="reservierenBtnTisch1Replace" >
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

<!-- Modals für das Belegen wenn schon jemand zugewiesen wurde-->
<div class="container">

<!-- The Modal Tisch 1 -->
<form action="getTables.php" method="post">
<div class="modal" id="myModal_change2">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tisch 2</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      <form action="getTables.php" method="post">
        <h2>Aktuell reserviert von: <?php echo '<br>'. $_SESSION["Tisch2"][4]; ?></h2>
            <input class="btn btn-primary" type="submit" value="Namen löschen" name="reservierenBtnTisch2Delete" >
        </form>

      <form action="getTables.php" method="post">
            <h2>Geben Sie Ihren neuen Namen ein:</h2>
            <label for="lname">Name:</label>
            <input type="text" id="lname" name="reservierterNameReplace2"required><br><br>
            <input class="btn btn-primary" type="submit" value="Reservieren" name="reservierenBtnTisch2Replace" >
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

<!-- Modals für das Belegen wenn schon jemand zugewiesen wurde-->
<div class="container">

<!-- The Modal Tisch 1 -->
<form action="getTables.php" method="post">
<div class="modal" id="myModal_change3">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tisch 3</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      <form action="getTables.php" method="post">
        <h2>Aktuell reserviert von: <?php echo '<br>'. $_SESSION["Tisch3"][4]; ?></h2>
            <input class="btn btn-primary" type="submit" value="Namen löschen" name="reservierenBtnTisch3Delete" >
        </form>

      <form action="getTables.php" method="post">
            <h2>Geben Sie Ihren neuen Namen ein:</h2>
            <label for="lname">Name:</label>
            <input type="text" id="lname" name="reservierterNameReplace3"required><br><br>
            <input class="btn btn-primary" type="submit" value="Reservieren" name="reservierenBtnTisch3Replace" >
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

<div class="container">

<!-- The Modal Tisch 1 -->
<form action="getTables.php" method="post">
<div class="modal" id="myModal_change4">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tisch 4</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      <form action="getTables.php" method="post">
        <h2>Aktuell reserviert von: <?php echo '<br>'. $_SESSION["Tisch4"][4]; ?></h2>
            <input class="btn btn-primary" type="submit" value="Namen löschen" name="reservierenBtnTisch4Delete" >
        </form>

      <form action="getTables.php" method="post">
            <h2>Geben Sie Ihren neuen Namen ein:</h2>
            <label for="lname">Name:</label>
            <input type="text" id="lname" name="reservierterNameReplace4"required><br><br>
            <input class="btn btn-primary" type="submit" value="Reservieren" name="reservierenBtnTisch4Replace" >
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
<!-- Modals für das Belegen wenn schon jemand zugewiesen wurde-->
<div class="container">

<!-- The Modal Tisch 1 -->
<form action="getTables.php" method="post">
<div class="modal" id="myModal_change5">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tisch 5</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      <form action="getTables.php" method="post">
        <h2>Aktuell reserviert von: <?php echo '<br>'. $_SESSION["Tisch5"][4]; ?></h2>
            <input class="btn btn-primary" type="submit" value="Namen löschen" name="reservierenBtnTisch5Delete" >
        </form>

      <form action="getTables.php" method="post">
            <h2>Geben Sie Ihren neuen Namen ein:</h2>
            <label for="lname">Name:</label>
            <input type="text" id="lname" name="reservierterNameReplace5"required><br><br>
            <input class="btn btn-primary" type="submit" value="Reservieren" name="reservierenBtnTisch5Replace" >
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
<!-- Modals für das Belegen wenn schon jemand zugewiesen wurde-->
<div class="container">

<!-- The Modal Tisch 1 -->
<form action="getTables.php" method="post">
<div class="modal" id="myModal_change6">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tisch 6</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      <form action="getTables.php" method="post">
        <h2>Aktuell reserviert von: <?php echo '<br>'. $_SESSION["Tisch6"][4]; ?></h2>
            <input class="btn btn-primary" type="submit" value="Namen löschen" name="reservierenBtnTisch6Delete" >
        </form>

      <form action="getTables.php" method="post">
            <h2>Geben Sie Ihren neuen Namen ein:</h2>
            <label for="lname">Name:</label>
            <input type="text" id="lname" name="reservierterNameReplace6"required><br><br>
            <input class="btn btn-primary" type="submit" value="Reservieren" name="reservierenBtnTisch6Replace" >
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
<div class="container">

<!-- The Modal Parkplatz 1 -->
<form action="getTables.php" method="post">
<div class="modal" id="myModal_changepark1">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Parkplatz 1</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      <form action="getTables.php" method="post">
        <h2>Aktuell reserviert von: <?php echo '<br>'. $_SESSION["Park1"][4]; ?></h2>
            <input class="btn btn-primary" type="submit" value="Namen löschen" name="reservierenBtnpark1Delete" >
        </form>

      <form action="getTables.php" method="post">
            <h2>Geben Sie Ihren neuen Namen ein:</h2>
            <label for="lname">Name:</label>
            <input type="text" id="lname" name="reservierterNameReplacepark"required><br><br>
            <input class="btn btn-primary" type="submit" value="Reservieren" name="reservierenBtnpark1Replace" >
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
<div class="container">

<!-- The Modal Parkplatz 2 -->
<form action="getTables.php" method="post">
<div class="modal" id="myModal_changepark2">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Parkplatz 2</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      <form action="getTables.php" method="post">
        <h2>Aktuell reserviert von: <?php echo '<br>'. $_SESSION["Park2"][4]; ?></h2>
            <input class="btn btn-primary" type="submit" value="Namen löschen" name="reservierenBtnpark2Delete" >
        </form>

      <form action="getTables.php" method="post">
            <h2>Geben Sie Ihren neuen Namen ein:</h2>
            <label for="lname">Name:</label>
            <input type="text" id="lname" name="reservierterNameReplacepark2"required><br><br>
            <input class="btn btn-primary" type="submit" value="Reservieren" name="reservierenBtnpark2Replace" >
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