<!doctype html>
<html ng-app>
  <head>
    <title>Angular Position List</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  </head>
  <body>
   <?php foreach($users as $key => $user){echo $user['Country'];} ?>
  	<div ng-init="names = <?php echo $users ?>">

		<table>
		  <tr>
		  	<th>Name</th>
		  	<th>Country</th>
		  </tr>
		  <tr ng-repeat="x in names">
		    <td>{{ x.Name }}</td>
		    <td>{{ x.Country }}</td>
		  </tr>
		</table>
	</div>

	<script>
	//var app = angular.module('myApp', []);
	//$scope.names = $positions;
	/*app.controller('customersCtrl', function($scope, $http) {
	   $http.get("customers_mysql.php")
	   .then(function (response) {$scope.names = response.data.records;});
	});*/
	</script>
  </body>
</html>