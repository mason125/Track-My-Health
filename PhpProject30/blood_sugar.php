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
        $data = json_decode($val);
        $con = $this -> db();
        $query = "INSERT INTO BS (ID, CDATE, GLUCOSE) VALUES (?, NOW(), ?)";
        $stmt = $con ->prepare($query);
        $stmt->bind_param("ii", $data[0], $data[1]);
        $stmt -> execute();
        $con->close();
        
        echo("Update Complete!");
    }
    
    //this method queries blood sugar data from database
    public function read($login)
    {
        $con = $this -> db();
        $query = mysqli_query($con,"SELECT * FROM BS WHERE ID = '$login'");
        
        while ($row = mysqli_fetch_array($query)) {
            $data[] = array("CDATE"=>$row['CDATE'],"GLUCOSE"=>$row['GLUCOSE']);
        }
        echo json_encode($data);
    }
}