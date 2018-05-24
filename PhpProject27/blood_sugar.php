<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//this class is for blood sugar 
class blood_sugar extends selection
{
    //this method enter blood sugar data into database
    public function enter($val)
    {
        $con = $this -> db();
        $query = "INSERT INTO BS (ID, CDATE, GLUCOSE) VALUES (1, NOW(), ?)";
        $stmt = $con ->prepare($query);
        $stmt->bind_param("i", $val);
        $stmt -> execute();
        $con->close();
        
        echo("Update Complete!");
    }
    
    //this method queries blood sugar data from database
    public function read()
    {
        echo "BS php read";
    }
}