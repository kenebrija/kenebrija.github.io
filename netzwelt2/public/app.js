var app = angular.module('projectRecords', ['ngRoute', 'trialControllers']).constant('API_URL', 'http://localhost:8000/api/v1/');
	
//var assign = angular.module('projectAssign', ['ngRoute']).constant('API_URL', 'http://localhost:8000/api/v1/');


app.config(['$routeProvider', function($routeProvider){
	$routeProvider
	.when('/', { 
		controller: 'HomeController', 
		templateUrl: 'home.html' })
	.when('/projects/assign', { 
		controller: 'AssignController', 
		templateUrl: 'assign.html' })
    //.when(API_URL+ 'projects/add/{id}', { controller: 'pController', templateUrl: API_URL+ 'projects/add/{id}' })
    //.otherwise({redirectTo: '/'})
}]);
