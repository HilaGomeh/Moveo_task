var app=angular.module('myApp',['angularUtils.directives.dirPagination']);
app.controller('dataCtrl',function($scope,$http){

        
        $scope.users = [];
         /*
            Get users data and display it in users table
         */
        $.ajax({
               url: 'https://randomuser.me/api/?results=100',
               dataType: 'json',
               success: function(data) {

               $scope.users = data.results;
                 console.log(data);  
               }
        }); 

        /*
           Loading User details page and display the user full name in the URL 
        */
	$scope.userDetails = function(user){

                localStorage["user"] = JSON.stringify(user);
                window.location.href = 'User_details.php#'+user.name.first+user.name.last; 
	};
        /*
           Sort the received column
        */
        $scope.sort = function(keyname){
        console.log(keyname);
           $scope.sortKey = keyname;   //set the sortKey to the param passed
           $scope.reverse = !$scope.reverse; //if true make it false and vice versa
        }
 
});

	
