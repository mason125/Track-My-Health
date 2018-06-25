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
    public function enter($val)
    {
        $data = json_decode($val);
        
        $con = $this -> db();
        
        $query = "INSERT INTO BP (ID, TOP_NUMBER, BOT_NUMBER, CDATE) VALUES (?,?,?, NOW())";
        $stmt = $con ->prepare($query);
        $stmt->bind_param("iii",$data[0],$data[1],$data[2]);
        $stmt -> execute();
        $con->close();
      
        echo("Update Complete!");
         
    }
    
    public function read($login)
    {
        $con = $this -> db();
        $query = mysqli_query($con,"SELECT * FROM BP WHERE ID = '$login'");
        
        while ($row = mysqli_fetch_array($query)) {
            $data[] = array("CDATE"=>$row['CDATE'],"TOP_NUMBER"=>$row['TOP_NUMBER'], "BOT_NUMBER"=>$row['BOT_NUMBER']);
        }
        echo json_encode($data);
        $con->close();
    }
    
    
}

