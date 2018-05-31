/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

angular.module('unit').controller('BS', function($scope, $http) {

   $scope.read = function()
   {
        //alert("test")
        $http.get("backend.php", {params:{'cat': "bs"}}).then(function(response) {
            $scope.user = response.data;
           
        });
   }
   
   $scope.write = function(glucose)
   {
        $scope.value = glucose;
        if ($scope.value >= 400)
        {
            alert("Seek help now!!");
        }
        else if ($scope.value < 70)
        {
            alert("Your leves are low eat somethign now!");
        }
            
        $http.get("backend.php", {params:{'func':2, 'cat': "bs", 'val':$scope.value}})
            .then(function(response) {
                $scope.resp = response.data;
                alert($scope.resp);
        });
   }
    
});