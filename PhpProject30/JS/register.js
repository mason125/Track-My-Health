/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


angular.module('unit').controller('user', function($scope, $http) {
    
    //pull user data 
    $scope.read = function(email, password)
    {
     
        let user = [email, password];
        let formatted_user = JSON.stringify(user);
        $http.get("backend.php", {params:{'cat': "u",'val':formatted_user}}).then(function(response) {
            $scope.user = response.data;
            
            if($scope.user === "No_ID")
            {
                alert("Invalid Email or Password");
            }
            else
            {
                sessionStorage.setItem("ID", $scope.user);
                $scope.main();
            }
        });
    };
    
    //create a user login.  Pass data a JSON string to backend
    $scope.write = function(fname, lname, email, pass)
    {
       let user_data = [fname, lname, email,pass];
       let formatted_data = JSON.stringify(user_data);
       $http.get("backend.php", {params:{'func':2, 'cat': "u", 'val':formatted_data}})
            .then(function(response) {
                $scope.resp = response.data;
                alert($scope.resp);
<<<<<<< HEAD
                $scope.home();
=======
>>>>>>> e3675ae7348b20f7f33a753327a790e9b2ffdc07
        });
    };
    
});