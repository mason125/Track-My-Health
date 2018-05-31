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
    public function enter($val, $val2)
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
        $con = $this -> db();
        $query = mysqli_query($con,"SELECT * FROM BS WHERE ID = 1");
        
        while ($row = mysqli_fetch_array($query)) {
            $data[] = array("CDATE"=>$row['CDATE'],"GLUCOSE"=>$row['GLUCOSE']);
        }
        echo json_encode($data);
    }
}