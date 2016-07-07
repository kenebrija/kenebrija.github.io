app.controller('HomeController', function($scope, $http) {
	$http.get("/view")
    .success(function(response) {
        $scope.project = response;
        console.log(response);
    });
    $scope.toggle = function() {
        $('#myModal').modal('show');
    }
    $scope.save = function(){
     	$http({
            method: 'POST',
            url: '/add',
            data: $.param($scope.item),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function(data) {
            console.log(data);
           // location.reload(); //
        }).error(function(data, xhr, status, thrown) {
            //console.log(response);
            console.log('Error:', data, xhr, status, thrown);
        });
    }
});