/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


angular.module('unit').controller('BS', function($scope, $http) {

   $scope.read = function()
   {
  
   }
   
   $scope.write = function(glucose)
   {
        $scope.value = glucose;
        $http.get("backend.php", {params:{'func':2, 'cat': "bs", 'val':$scope.value}}).then(function(response) {
            $scope.myWelcome = response.data;
            alert($scope.myWelcome);
        });
   }
    
});