/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

angular.module('unit').controller('BS', function($scope, $http) {
    const url = "backend.php";
   $scope.read = function()
   {
        //read data from DB
        $http.get(url, {params:{'cat': "bs", 'val':sessionStorage.getItem("ID")}}).then(function(response) {
            $scope.user = response.data;
            let value_array = $scope.user.map(e => parseFloat(e.GLUCOSE));
            $scope.stats(value_array);
        });
   };
   
   $scope.write = function(glucose_value)
   {
        let value = glucose_value;
        
        //check medical warnings 
        if (value >= 400)
        {
            alert("Seek help now!!");
        }
        else if (value < 80)
        {
            alert("Your leves are low eat somethign now!");
        }
        
        //pack up array
        let data_array = [sessionStorage.getItem("ID"), value];
        let formatted_data = JSON.stringify(data_array);
        
        //http request
        $http.get(url, {params:{'func':2, 'cat': "bs", 'val':formatted_data}})
            .then(function(response) {
                $scope.resp = response.data;
                alert($scope.resp);
        });
        
        //clear out value
        $scope.glucose = "";
   };
    
});