<!doctype html>
<html ng-app>
  <head>
    <title>Angular Position List</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  </head>
  <body>

  	<div ng-init="names = <?php echo $test ?>">

		<table>
		  <tr>
		  	<th>Name</th>
		  	<th>Country</th>
		  </tr>
		  <tr ng-repeat="x in names">
		    <td>{{ x.country }}</td>
		    <td>{{ x.position }}</td>
		  </tr>
		</table>
	</div>

  </body>
</html>