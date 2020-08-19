<?php
require './required/header.php';
?>
<label for="cars">Choose a car:</label>

<select id="cars" onchange="test()">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="vw">VW</option>
  <option value="audi" selected>Audi</option>
</select>
<script>
function test() {
    alert( "ready!" );
}
</script>