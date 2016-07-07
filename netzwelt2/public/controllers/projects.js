/*app.controller('projectsController', function($scope, $http, API_URL){
	$scope.toggle = function() {
        $('#myModal').modal('show');
    }

    $scope.save = function(){
     	$http({
            method: 'POST',
            url: 'api/v1/projects/add',
            data: $.param($scope.project),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function(response) {
            console.log(response);
            location.reload();
        }).error(function(data, xhr, status, thrown) {
            //console.log(response);
            console.log('Error:', data, xhr, status, thrown);
        });
    }
   
});

app.controller('pController', function($scope, $http, API_URL){
    $scope.projects = [];
    $http.get(API_URL + 'projects/add/{id}')
    .success(function(response) {
        $scope.projects = response;
        console.log(response);
    });
});
*/

var trialControllers = angular.module('trialControllers', []);

trialControllers.controller('HomeController', ['$scope', '$http', function ($scope, $http) {

    /*
    projectsService.getAll()
        .success(function(response) {

        })
        .error(function(...){});    
    */

    // restangular

	$http.get('/projects/list')
    .success(function(response) {
        $scope.projects = response;
        console.log(response);
    });

	$scope.toggle = function() {
        $('#myModal').modal('show');
    }

    $scope.save = function(){
     	$http({
            method: 'POST',
            url: '/projects/add',
            data: $.param($scope.item),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function(data) {
            console.log(data);
            //location.reload(); //
        }).error(function(data, xhr, status, thrown) {
            //console.log(response);
            console.log('Error:', data, xhr, status, thrown);
        });
    }

    $scope.click = function () {
       this.$hide();
    }
}]);


trialControllers.controller('AssignController', ['$scope', '$http', function ($scope, $http) {
	$scope.array={};
    $http.get('/projects/assign')
    .success(function(response) {
        $scope.array = response;
        console.log(response);
    });
    $scope.select = {};
    $scope.save = function(){
        //$scope.array.user.pop($scope.select);
        $scope.array.user.pop($scope.select);

        $scope.array.projAssign.push($scope.select);

        $http({
            method: 'POST',
            url: '/projects/user/save',
            data: $.param($scope.select),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function(data) {
            console.log(data, $scope.select.id, $scope.select.first_name, $scope.array.projAssign);
            //location.reload(); 
        }).error(function(data, xhr, status, thrown) {
            //console.log(response);
            console.log('Error', data);
        });
    }

    $scope.delete = function(idx){
        //$scope.array.projAssign.splice($scope.delete);
       // $scope.persons.splice( $scope.persons.indexOf($index), 1 );
        console.log(idx);
        $scope.array.projAssign.splice(idx, 1);
        $scope.array.user.push(idx);
         //console.log($scope.array.projAssign.splice($scope.array.users.indexOf($index), 1 ));
        $http({
            method: 'DELETE',
            url: '/projects/user/delete',
            data: $.param(idx),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function(data) {
            console.log($scope.delete);
        }).error(function(data, xhr, status, thrown) {
            console.log('Error', data);
        });   
    }

   //{"id":1,"first_name":"Gayle"}

}]);

