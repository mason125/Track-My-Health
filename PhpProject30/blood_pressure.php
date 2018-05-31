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
        //$con = $this -> db();//establish db connection
        //$query = "INSERT INTO BP (TOP, BOTTOM, DATE) VALUES ()";//NOT DONE
        //mysqli_query($con, $query);
    }
    
    public function read()
    {
        echo "BP read";
    }
    
    
}

