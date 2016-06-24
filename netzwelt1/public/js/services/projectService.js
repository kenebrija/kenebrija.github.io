angular.module('projectService', [])


.factory('Project', function($http)){
	return{
		get: function() {
			return $http.get('/api/projects');
		},

		save: funtion(projectData){
			return $http({
				method: 'POST',
				url: 'api/projects',
				headers:  { 'Content-Type' : 'application/x-www-form-urlencoded' },
				
				data: $.param(projectData)
			});
		},
	}
}