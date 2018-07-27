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
        //database connection data.  This connects to the AWS MySQL DB
        //this is a live version.  
        $host = "ht.cxavl69wbi6c.us-east-1.rds.amazonaws.com"; 
        $user = "maswhite"; 
        $password = "kTmlord0302!"; 
        $dbname = "healthtrack"; 
        
        return(mysqli_connect($host, $user, $password, $dbname));
    }
    
}