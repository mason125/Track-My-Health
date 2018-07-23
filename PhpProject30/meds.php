<?php


class meds extends selection{
    
    public function enter($val)
    {
        //[0] = med name
        //[1] = mor dose
        //[2] = aft dose
        //[3] = eve dose
        $data = json_decode($val);
        $con = $this -> db();
        $query = "INSERT INTO WT (ID, WEIGHT, CDATE) VALUES (?,?, NOW())";
        $stmt = $con ->prepare($query);
        $stmt->bind_param("ii", $data[0], $data[1]);
        $stmt -> execute();
        $con->close();
        
    }
    
    public function read($login)
    {
        
    }
    
    //this function is unique to this class and should not be implmented 
    //else where.  This function will only delete medicine from the patients
    //roster.  DO NOT USE ELSE WHERE
    public function delete($login)
    {
        
    }
}
