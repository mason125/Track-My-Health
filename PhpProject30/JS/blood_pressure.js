/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//this is the blood pressure file all BP functions are executed here

//bp controller
angular.module('unit').controller('BP', function($scope, $http) {
    
    //input data into database.
    //use session var for patient ID
    $scope.read = function()
    {
         $http.get("backend.php", {params:{'cat': "bp", 'val': sessionStorage.getItem("ID")}}).then(function(response) {
            $scope.user = response.data;
           
        });
       
    }
    
    //this method retrieves data from DB.  Using session var for ID
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