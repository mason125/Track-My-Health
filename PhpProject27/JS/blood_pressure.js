/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


angular.module('unit').controller('BP', function($scope, $http) {
    
    $scope.read = function()
    {
        
        
    }
    
    $scope.write = function()
    {
        alert("here");
         $http.get("backend.php", {params:{'func':2, 'cat': "bp"}}).then(function(response) {
            $scope.results = response.data;
            alert($scope.results);
        });
        
    }
    
});