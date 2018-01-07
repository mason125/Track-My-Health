/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

"use strict";

//hide secondary btns
$("#stats_btn_bs").hide();
$("#enter_btn_bs").hide();
$("#stats_btn_bp").hide();
$("#enter_btn_bp").hide();

//diabetes menu
$("#diabetes_btn").on('click', function(){
   collapse();
   $("#enter_btn_bs").show();
   $("#stats_btn_bs").show();
});

//blood pressure menu
$("#bloodPressure_btn").on('click', function(){
   collapse();
   $("#enter_btn_bp").show();
   $("#stats_btn_bp").show();
});

//hide submenu choices diabetes.................................................
$("#enter_btn_bs").on('click', function(){
    $("#stats_btn_bs").hide();
});

$("#stats_btn_bs").on('click', function(){
    $("#enter_btn_bs").hide();
});
//..............................................................................

//hide submenu choices Blood Pressure...........................................
$("#enter_btn_bp").on('click', function(){
   $("#stats_btn_bp").hide(); 
});

$("#stats_btn_bp").on('click', function(){
   $("enter_btn_bp").hide(); 
});
//close function 
function collapse()
{
    $("#diabetes_btn").hide();
    $("#med_btn").hide();
    $("#bloodPressure_btn").hide();
}

