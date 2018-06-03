/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


angular.module('unit').controller('BP', function($scope, $http) {
    
    $scope.read = function()
    {
         $http.get("backend.php", {params:{'cat': "bp"}}).then(function(response) {
            $scope.user = response.data;
           
        });
       
    }
    
    $scope.write = function(topNum, bottomNum)
    {
       $scope.value = topNum + "/" + bottomNum;//format string
       $http.get("backend.php", {params:{'func':2, 'cat': "bp", 'val':$scope.value}})
            .then(function(response) {
                $scope.resp = response.data;
                alert($scope.resp);
        });
    }
    
});