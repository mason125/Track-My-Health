<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of register
 *
 * @author Mason
 */
class register extends selection
{
<<<<<<< HEAD
    public function enter($val)
=======
    public function enter($val, $val2)
>>>>>>> e3675ae7348b20f7f33a753327a790e9b2ffdc07
    {
   
       //decode user array
       $data = json_decode($val);
       
       //insert data into db
       $con = $this->db();
       $query  = "INSERT INTO PATIENT (FIRST_NAME, LAST_NAME, EMAIL, P_PASSWORD) VALUES (?,?,?,?)";
       $stmt = $con ->prepare($query);
       $stmt->bind_param("ssss", $data[0],$data[1],$data[2],$data[3]);
       $stmt -> execute();
       $con->close();
 
<<<<<<< HEAD
       echo("Welcome to Track My Health! Press the home button to begin");
=======
       echo("Welcome to Track My Health");
>>>>>>> e3675ae7348b20f7f33a753327a790e9b2ffdc07
    }
    
    public function read($login)
    {
        $data = json_decode($login);
        $email = $data[0];
        $pass = $data[1];
        //echo($email);
        //echo($pass);
        
        $con = $this -> db();
        $query = $con->query("SELECT ID FROM patient WHERE EMAIL = '$email' AND P_PASSWORD = '$pass';");
    
        
        if(mysqli_num_rows($query) == 0)
        {
            echo("No_ID");
        }
        else 
        {
            while($id = mysqli_fetch_assoc($query))
            {
                echo($id['ID']);
            }
        }
        $con -> close();
    }
    /*
     *   while ($row = mysqli_fetch_array($query)) {
            $data[] = array("CDATE"=>$row['CDATE'],"BLOOD_PRESSURE"=>$row['BLOOD_PRESSURE']);
        }
     */
}