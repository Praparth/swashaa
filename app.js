var app = angular.module('myApp', ['ngRoute']);

app.config(['$routeProvider', function($routeProvider) {
    $routeProvider
        .when('/login', {
            templateUrl: 'login.html',
            controller: 'LoginController'
        })
        .when('/register', {
            templateUrl: 'register.html',
            controller: 'RegisterController'
        })
        .otherwise({
            redirectTo: '/login'
        });
}]);

app.controller('LoginController', ['$scope', '$route', function($scope, $route) {
    $scope.login = function() {
        // Perform your login logic here (e.g., validate user credentials).
        // If login is successful, you can navigate to another route.
        // For example, to a dashboard page:
        // $location.path('/dashboard');
        $route.reload();
    };
}]);

app.controller('RegisterController', ['$scope', '$route', function($scope, $route) {
    $scope.register = function() {
        // Perform your registration logic here.
        // If registration is successful, you can navigate to the login page or another route.
        // For example, to the login page:
        // $location.path('/login');
        $route.reload();
    };
}]);
