<!DOCTYPE html>
<html >

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<body ng-app="myApp">


<!-- Angular with json data htmlspecialchars part can be done at controller -->
<div ng-init="positions = <?php echo htmlspecialchars(json_encode($test)); ?>">
	<table>
	  <tr>
	  	<th>ID</th>
	  	<th>Position</th>
	  </tr>
	  <tr ng-repeat="x in positions">
	    <td>{{ x.id }}</td>
	    <td>{{ x.position }}</td>
	  </tr>
	</table>
</div>


<!-- Angular with ajax style get -->
<div  ng-controller="customersCtrl">
	<table style="margin-top: 10px;">
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
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
   $http.post("test.php/test1")
   .then(function (response) {$scope.names = response.data.records;});
});
</script>

</body>
</html>
