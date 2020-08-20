<?php
/*
for ($i=0; $i <12 ; $i++) { 
  echo $monate[$i]."\n"; 
}
*/
$monate = array('Januar','Februar','März','April','Mai','Juni','Juli','August',
'September','Oktober','November','Dezember');

echo '<form action="getTables.php" method="post">
<div class="form-group">
<label for="sel1"style="color:white;font-family:Bitter;font-size:24px;">Monat:</label>
<select class="form-control" name="month"onchange="refreshListe()">';
for ($i=0; $i <12 ; $i++) { 
  if($monate[$i] == $_SESSION["month_string"])
  {
    echo '<option value ='.$monate[$i].'selected>'.$monate[$i].'</option>';
  }
  echo '<option value ='.$monate[$i].'>'.$monate[$i].'</option>';
}

echo '</select>';

?>