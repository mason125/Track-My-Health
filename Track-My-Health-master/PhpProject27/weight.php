<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of weight
 *
 * @author Mason
 */
class weight extends selection {
    //put your code here
    public function enter($val)
    {
        $con = $this -> db();
        $query = "INSERT INTO WT (ID, WEIGHT, CDATE) VALUES (1,?, NOW()";
        $stmt = $con ->prepare($query);
        $stmt->bind_param("i", $val);
        $stmt -> execute();
        $con->close();
        
        echo("Update Complete!");
    }
    
    public function read()
    {
        
    }
}
