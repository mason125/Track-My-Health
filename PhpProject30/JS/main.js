/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
"use strict"

angular.module('unit').controller('operation', function($scope, $http) {

    //turn on main menu
    $scope.main = function()
    {

       $("#main_menu").show();
       $("#home").show();
       $("#login").hide();
       $("#login").hide();
       $("#sub_wt").hide();
       $("#sub_bs").hide();
       $("#sub_bp").hide();
       $("#sub_med").hide();
   }
   
   $scope.create_login = function()
   {
       $("#login").hide();
   }
   
   $scope.login = function ()
   {
       $("#login").show();
       $("#sub_wt").hide();
       $("#sub_bs").hide();
       $("#sub_bp").hide();
       $("#sub_med").hide();
       $("#home").hide();
       $("#main_menu").hide();
   }
   
   //turn on bs menu
   $scope.bs_menu = function()
   {
       $('#main_menu').hide();
       $('#sub_bs').show();
   }
   
   //turn on bp menu
   $scope.bp_menu = function()
   {
       $('#main_menu').hide();
       $('#sub_bp').show();
   }
   
   //turn on weight menu
   $scope.wt_menu = function()
   {
       $('#main_menu').hide();
       $('#sub_wt').show();
   }
   
   //turn on med menu
   $scope.med_menu = function()
   {
       $("#main_menu").hide();
       $("#sub_med").show();
   }
   //show graph
   $scope.home = function()
   {
       $('#home').show();
   }
   
   //show stats
   $scope.stats = function(data)
   {
       let sorted_array = data.sort((a,b) => a-b);
       $scope.avg = (sorted_array.reduce((total,num) => total + num)/sorted_array.length).toFixed(2);
       $scope.max = sorted_array[sorted_array.length - 1];
       $scope.min = sorted_array[0];
   
   }
}); 


        
angular.module('unit').controller('start', function($scope, $http) {
    
        $scope.login();
});