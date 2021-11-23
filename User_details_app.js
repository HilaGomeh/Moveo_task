var app=angular.module('myApp',[]);
app.controller('dataCtrl',function($scope,$http){

        /*
           Get user data from local storage and display it on user page
        */
        var userObj = JSON.parse(localStorage["user"]);
        $scope.user = userObj;

        /*
           Sava user location address
        */
        var latlon = userObj.location.coordinates.latitude + "," + userObj.location.coordinates.longitude;

        /*
           Display user address on google map
        */
        var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="+latlon+"&zoom=14&size=400x300&sensor=false&key=YOUR_KEY";

        document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";

        
});
