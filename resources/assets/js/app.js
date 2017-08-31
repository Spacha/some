var some = angular.module('some', ['ngRoute', 'ui.bootstrap']);

some.config(function($routeProvider, $locationProvider) {
	$locationProvider.hashPrefix('');

	$routeProvider
		.when('/', {
			templateUrl: 'templates/home.html',
			controller: 'MainCtrl'
		})
		.when('/logger', {
			templateUrl: 'templates/logger.html',
			controller: 'LoggerCtrl'
		})
		.when('/login', {
			templateUrl: 'templates/login.html',
			controller: 'LoginCtrl'
		});
});
