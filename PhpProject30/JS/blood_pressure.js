/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


angular.module('unit').controller('BP', function($scope, $http) {
    
    $scope.read = function()
    {
        
       alert("page loaded") 
    }
    
    $scope.write = function(topNum, bottomNum)
    {
        $scope.top = topNum;
        $scope.bottom = bottomNum;
        $http.get("backend.php", {params:{'func':2, 'cat': "bp", 'value1': $scope.top}})
            .then(function(response) {
                $scope.results = response.data;
                alert($scope.results);
        });
        
    }
    
});