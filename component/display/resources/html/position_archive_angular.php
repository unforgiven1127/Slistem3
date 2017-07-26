<!doctype html>
<html ng-app="myApp">
  <head>
    <title>Angular Position List</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  </head>
  <body>

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

	<div ng-controller="myCtrl">
		<table>
		  <tr ng-repeat="x in names">
		    <td>{{ x.firstname }}</td>
		    <td>{{ x.lastname }}</td>
		  </tr>
		</table>
	</div>

	<script>
	var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope, $http) {
       $http.get("test.php")
       .then(function (response)
        {
            angular.fromJson(response);
            $scope.names = response;
        },
            function(error)
            {
            	console.log(error);
            }
       );
    });
    </script>



  </body>
</html>