<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of selection
 *
 * @author Mason
 */

abstract class selection
{
    abstract protected function enter($z);
    abstract protected function read();
    
    public function db()
    {
        $host = "localhost"; 
        $user = "root"; 
        $password = ""; 
        $dbname = "healthtrack"; 

        return(mysqli_connect($host, $user, $password, $dbname));
    }
    
}