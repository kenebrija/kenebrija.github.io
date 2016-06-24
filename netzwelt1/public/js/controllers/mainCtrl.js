angular.module('mainCtrl',[])


.controller('mainController', function($scope, $http, Project){
	$scope.data = {};

	$scope.loading = true;

	Project.get().success(function(data){
		$scope.projects = data;
		$scope.loading = false;
	});

	$scope.submitProject = function() {
		$scope.loading = true;

		Project.save($scope.data).success(function(getData){
			$scope.projects = getData;
			$scope.loading = false;
		});

		.error(function(data){
			console.log(data);
		});
	};
});