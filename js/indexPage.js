var app = angular.module('appname', []);

app.controller('IndexPageController', function ($scope, $http) {
	
	$scope.getlista = function(){
		$http({
			method: 'GET',
			header: 'application/json',
			url: 'API/viewTeste.php',
			data: 'getlista'
			}).then( function(response){
				$scope.lista = response.data;
			});
	};
	
	$scope.getlista();
});
	
