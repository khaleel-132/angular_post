var app = angular.module('myApp',['ngRoute']);
app.controller('myController',function($scope,$http){
    $scope.insert = function(){
        $http.post(
            "api/data.php",
            {'name':$scope.name,'email':$scope.email,'age':$scope.age}
        ).success(function(data){
            $scope.name = null;
            $scope.email = null;
            $scope.age = null;
        });
    }

});
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "templates/main.html"
    });
});