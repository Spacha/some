angular.module('some').controller('MainCtrl', function($scope, $http) {
	$scope.tulos = "";
	$scope.messages = {};

	$scope.header = 'templates/header.html';

	$scope.sendMessage = function() {
		$http.post('/api/messages/send', {
			message: $scope.msg.message,
			nickname: $scope.msg.nickname
		}).then(function(result) {

			// Refresh message list
			$scope.fetchMessages();

			// Clear fields
			$scope.msg.message = "";
			$scope.msg.nickname = "";

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

	$scope.fetchMessages = function() {
		$scope.loading = true;
		return $http.get('/api/messages/get')
			.then(function(response){
				$scope.messages = response.data;
				$scope.loading = false;
		});
	}

	$scope.deleteMessage = function(id) {
		return $http.post('api/messages/delete', {
			id: id
		}).then(function(result) {
				if(result.data.status == "OK") {
					alert(result.data.message);
				}
			});
	}

	$scope.fetchMessages();
});
