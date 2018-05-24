<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//This class return an object
class factory
{ 
    //This function return the actual object
    public function func($choice)       
    {
        if($choice == "bs")
        {
            return (new blood_sugar);
        }
        
        elseif ($choice == "bp")
        {
            return (new blood_pressure);
        }
        
        else 
        {
            return (new weight);
        }
    }
}