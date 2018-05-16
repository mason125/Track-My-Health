<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//$bs = new blood_sugar;
//$bs -> enter();
/*if(isset($_POST["submit"]))
{
  test();
}

function test()
{
    $var = $_POST["name"];
    $var2 = $_POST["email"];
    $cl = new $var;
    
    $cl -> read();
}*/
require ("as.php");
require ("factory.php");
require ("blood_sugar.php");
require ("blood_pressure.php");



if(isset($_POST["submit"]))
{
    $sel = new factory;
    $fac = $sel -> test($_POST["name"]);
    $fac -> read();
}


