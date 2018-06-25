/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

angular.module('unit').controller('WT', function($scope, $http) {
 
   $scope.read = function()
   {
          let ID = sessionStorage.getItem("ID");
          $http.get("backend.php", {params:{'cat': "wt", 'val': ID}}).then(function(response) {
          $scope.user = response.data;
          let value_array = $scope.user.map(e => parseFloat(e.WEIGHT)); 
          $scope.stats(value_array);
        });
   }
   
   $scope.write = function(weight)
   {
       let value = weight;
       if (value > 975 || value < 3)
       {
           alert("Please enter a valid weght")
       }
       else
       {
           let data_array = [sessionStorage.getItem("ID"), weight];
           let formatted_array = JSON.stringify(data_array);
           $http.get("backend.php", {params:{'func':2, 'cat': "wt", 'val':formatted_array}}).then(function(response) {
                $scope.results = response.data;
                alert($scope.results);
            });
       }
   }
 
 });