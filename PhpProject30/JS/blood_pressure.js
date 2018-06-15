/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


angular.module('unit').controller('BP', function($scope, $http) {
    
    $scope.read = function()
    {
         $http.get("backend.php", {params:{'cat': "bp", 'val': sessionStorage.getItem("ID")}}).then(function(response) {
            $scope.user = response.data;
           
        });
       
    }
    
    $scope.write = function(topNum, bottomNum)
    {
       let data_array = [sessionStorage.getItem("ID"), topNum, bottomNum];
       let formatted_array = JSON.stringify(data_array);
       $http.get("backend.php", {params:{'func':2, 'cat': "bp", 'val':formatted_array}})
            .then(function(response) {
                $scope.resp = response.data;
                alert($scope.resp);
        });
    }
    
});