/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

angular.module('unit').controller('WT', function($scope, $http) {
 
   $scope.read = function()
   {
          $http.get("backend.php", {params:{'cat': "wt"}}).then(function(response) {
            $scope.user = response.data;
           
        });
   }
   
   $scope.write = function(weight)
   {
       $scope.value = weight;
       if ($scope.value > 975 || $scope.value < 3)
       {
           alert("Please enter a valid weght")
       }
       else
       {
           $http.get("backend.php", {params:{'func':2, 'cat': "wt", 'val':$scope.value}}).then(function(response) {
                $scope.results = response.data;
                alert($scope.results);
            });
       }
   }
 
 });