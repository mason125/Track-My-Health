/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//only use angular for the routing
//module only one therefore leve it here 
const app = angular.module("unit", ["ngRoute"]);




  
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        template: "<h2>Please Make A Selection</h2>"
    })
    .when("/BP_Enter", {
        templateUrl: "views/BP_Enter.html"
    })
    .when("/BS_Enter", {
        templateUrl: "views/BS_Enter.html"
    })
    .when("/BP_view",{
        templateUrl: "views/BP_view.html"
    })
    .when("/BS_view",{
        templateUrl: "views/BS_view.html"
    })
    .when("/meds",{
        templateUrl: "views/Meds.html"
    })
});