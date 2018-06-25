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
    abstract protected function enter($val);
    abstract protected function read($login);
    
    public function db()
    {
        $host = "localhost"; 
        $user = "root"; 
        $password = ""; 
        $dbname = "healthtrack"; 

        return(mysqli_connect($host, $user, $password, $dbname));
    }
    
}