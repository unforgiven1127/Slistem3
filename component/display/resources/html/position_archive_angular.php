<!doctype html>
<html ng-app>
  <head>
    <title>Angular Position List</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  </head>
  <body>
  	<div ng-init="positions = $positions; ">

		<table>
		  <tr>
		  	<th>Position Name</th>
		  	<th>Company Name</th>
		  </tr>
		  <tr ng-repeat="x in positions">
		    <td>{{ x.position_name }}</td>
		    <td>{{ x.company_name }}</td>
		  </tr>
		</table>
	</div>

	<script type="text/javascript">
	//var app = angular.module('myApp', []);
	//var names = <?php echo $positions ?>;
	//names = <?php echo $positions ?>;
	/*app.controller('customersCtrl', function($scope, $http) {
	   $http.get("customers_mysql.php")
	   .then(function (response) {$scope.names = response.data.records;});
	});*/
	</script>
  </body>
</html>