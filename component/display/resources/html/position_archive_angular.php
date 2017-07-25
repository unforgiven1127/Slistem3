<!doctype html>
<html ng-app>
  <head>
    <title>Angular Position List</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  </head>
  <body>
  	<div ng-app="myApp" ng-controller="customersCtrl">

		<table>
		  <tr>
		  	<th>Position Name</th>
		  	<th>Company Name</th>
		  </tr>
		  <tr ng-repeat="x in names">
		    <td>{{ x.position_name }}</td>
		    <td>{{ x.company_name }}</td>
		  </tr>
		</table>
	</div>

	<script>
	var app = angular.module('myApp', []);
	$scope.names = $positions;
	/*app.controller('customersCtrl', function($scope, $http) {
	   $http.get("customers_mysql.php")
	   .then(function (response) {$scope.names = response.data.records;});
	});*/
	</script>
  </body>
</html>