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
    public function enter($val, $val2)
    {
        $data = json_decode($val);
        $con = $this -> db();
        $query = "INSERT INTO WT (ID, WEIGHT, CDATE) VALUES (?,?, NOW())";
        $stmt = $con ->prepare($query);
        $stmt->bind_param("ii", $data[0], $data[1]);
        $stmt -> execute();
        $con->close();
        
        echo("Update Complete!");
    }
    
    public function read($login)
    {
        $con = $this -> db();
        $query = mysqli_query($con,"SELECT * FROM WT WHERE ID = '$login'");
        
        while ($row = mysqli_fetch_array($query)) {
            $data[] = array("CDATE"=>$row['CDATE'],"WEIGHT"=>$row['WEIGHT']);
        }
        echo json_encode($data);
    }
}
