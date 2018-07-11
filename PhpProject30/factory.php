<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of factory
 *
 * @author Mason
 */
class factory
{ 
    //This function return the actual object
    public function func($choice)       
    {
        switch($choice)
        {
            case "u"://registration obj
                return (new register);
            case "bp"://blood pressure obj
                return (new blood_pressure);
            case "wt"://weight obj
                return (new weight);
            case "bs"://blood sugar obj
                return (new blood_sugar);
            case "med":
                return(new medicine);
        }
    }
}