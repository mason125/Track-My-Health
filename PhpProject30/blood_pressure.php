<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of blood_pressure
 *
 * @author Mason
 */
class blood_pressure extends selection 
{
    public function enter($val, $val2)
    {
        $con = $this -> db();
        $query = "INSERT INTO BP (ID, BLOOD_PRESSURE, CDATE) VALUES (1,?, NOW())";
        $stmt = $con ->prepare($query);
        $stmt->bind_param("s", $val);
        $stmt -> execute();
        $con->close();
        
        echo("Update Complete!");
         
    }
    
    public function read()
    {
        $con = $this -> db();
        $query = mysqli_query($con,"SELECT * FROM BP WHERE ID = 1");
        
        while ($row = mysqli_fetch_array($query)) {
            $data[] = array("CDATE"=>$row['CDATE'],"BLOOD_PRESSURE"=>$row['BLOOD_PRESSURE']);
        }
        echo json_encode($data);
        $con->close();
    }
    
    
}

