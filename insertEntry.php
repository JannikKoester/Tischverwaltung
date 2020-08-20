<?php
session_start();

require 'settings.php';
require 'functions.php';

if(isset($_POST['reservierenBtnTisch1'])){
  $daystart=$_POST['daystart'];
  $dayend = $_POST['dayend'];
  $name = $_POST['reservierterName'];
  funcs::InsertDatas($conn, $daystart, $dayend, $name,1,"Tisch1");

} 

else if(isset($_POST['reservierenBtnTisch2'])){
  $daystart=$_POST['daystart'];
  $dayend = $_POST['dayend'];
  $name = $_POST['reservierterName'];
  funcs::InsertDatas($conn, $daystart, $dayend, $name,2,"Tisch2");

} 
else if(isset($_POST['reservierenBtnTisch3'])){
  $daystart=$_POST['daystart'];
  $dayend = $_POST['dayend'];
  $name = $_POST['reservierterName'];
  funcs::InsertDatas($conn, $daystart, $dayend, $name,3,"Tisch3");

} 
else if(isset($_POST['reservierenBtnTisch4'])){
  $daystart=$_POST['daystart'];
  $dayend = $_POST['dayend'];
  $name = $_POST['reservierterName'];
  funcs::InsertDatas($conn, $daystart, $dayend, $name,4,"Tisch4");

} 
else if(isset($_POST['reservierenBtnTisch5'])){
  $daystart=$_POST['daystart'];
  $dayend = $_POST['dayend'];
  $name = $_POST['reservierterName'];
  funcs::InsertDatas($conn, $daystart, $dayend, $name,5,"Tisch5");

} 
else if(isset($_POST['reservierenBtnTisch6'])){
  $daystart=$_POST['daystart'];
  $dayend = $_POST['dayend'];
  $name = $_POST['reservierterName'];
  funcs::InsertDatas($conn, $daystart, $dayend, $name,6,"Tisch6");

} 

else if(isset($_POST['reservierenBtnPark1'])){
  $daystart=$_POST['daystart'];
  $dayend = $_POST['dayend'];
  $name = $_POST['reservierterName'];
  funcs::InsertDatas($conn, $daystart, $dayend, $name,7,"Park1");

} 

else if(isset($_POST['reservierenBtnPark2'])){
  $daystart=$_POST['daystart'];
  $dayend = $_POST['dayend'];
  $name = $_POST['reservierterName'];
  funcs::InsertDatas($conn, $daystart, $dayend, $name,8,"Park2");

} 
