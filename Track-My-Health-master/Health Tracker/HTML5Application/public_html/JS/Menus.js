/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

"use strict";
collapse_subs();

//when med is clicked the eveything closes 
$("#med_btn").on('click',() => $("#main_menu").hide());

//weight click
$("#weight_btn").on('click', function(){
    $("#main_menu").hide();
    $("#sub_weight").show();
});

//blood sugar click main.........................................................
$("#bs_btn").on('click',function(){
    $("#main_menu").hide();
    $("#chart").show();
    $("#sub_bs").show();
});

//control sub menu
$("#sub_bs").on('click', () => $("#sub_bs").hide());
//..............................................................................

//blood pressure click main.....................................................
$("#bp_btn").on('click',function(){
    $("#main_menu").hide();
    $("#chart").show();
    $("#sub_bp").show();
});
//sub menu
$("#sub_bp").on('click', () => $("#sub_bp").hide());
//..............................................................................

//weight main click.............................................................
$("#weight_btn").on('click',function(){
   $("#sub_weight").show();
});

$("#sub_weight").on('click', () => $("#sub_weight").hide());
//..............................................................................

//home click
$("#home").on('click', function(){
   collapse_subs();
   $("#main_menu").show();
});

function collapse_subs()
{
  $("#chart").hide();
  $("#sub_weight").hide();
  $("#sub_bp").hide();
  $("#sub_bs").hide();
}


 