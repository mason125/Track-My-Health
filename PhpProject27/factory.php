<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class factory
{
   //return the proper object 
    public function test($choice)       
    {
      
        if($choice == "bs")
        {
            return (new blood_sugar);
        }
        
        elseif ($choice == "bp")
        {
            return (new blood_pressure);
        }
    }
}