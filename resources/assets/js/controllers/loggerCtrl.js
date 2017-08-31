angular.module('some').controller('LoggerCtrl', function($scope, $http) {
	$scope.tulos = "";
	$scope.works = {};

	$scope.addWork = function() {
		$http.post('/api/works/add', {
			name: $scope.work.name,
			hours: $scope.work.hours,
			projectId: 1
		}).then(function(result) {

			// Refresh work list
			$scope.fetchWorks();

			// Clear fields
			$scope.work.name = "";
			$scope.work.hours = "";

			if(result.data.status == 'OK') {
				// Success
				alert(result.data.message);
			} else {
				// $scope.response = result.data.message;
			}
		}, function(response) {
			$scope.sending = false;
			$scope.response = 'Unknown error.';
		});
	}

	$scope.fetchWorks = function() {
		$scope.loading = true;
		return $http.get('/api/works/get')
			.then(function(response){
				$scope.works = response.data;
				$scope.loading = false;
		});
	}

	$scope.fetchWorks();
});
