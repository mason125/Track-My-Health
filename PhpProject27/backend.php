<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
  The backend utilizes a factory pattern to generate the proper object.
 * There are a total of four classes and abstract class for the generic read and
 * write function. The other class blood_sugar, blood_pressure, and a weight 
  */
require("selection.php");
require("factory.php");
require("blood_pressure.php");
require("blood_sugar.php");
require("weight.php");

$sel = new factory;//factory function

if(isset($_GET['func']))//enter data to db
{
    //func empty = read.  if func not  write
    //insert data into database   
    $fac = $sel -> func($_GET["cat"]);
    $fac -> enter($_GET['val']);
  
}
 else //read data from db
 {
    $fac = $sel -> func($_GET["cat"]);
    $fac -> read($_GET['val']);     
 }