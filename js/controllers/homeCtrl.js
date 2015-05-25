'use strict';

app.controller('homeCtrl', ['$scope','loginService', function($scope,loginService){
	$scope.txt='Page Home';
	$scope.logout=function(){
		loginService.logout();
	}
}])


app.controller('getDatos', ['$scope', '$http', function($scope, $http) {
  //$scope.greeting = 'Hola!';
   // this is where the JSON from api.php is consumed
    $http.get('http://localhost/tienda/data/getProductos.php').
        success(function(data) {
            // here the data from the api is assigned to a variable named users
            $scope.productos = data;
        });
}]);




