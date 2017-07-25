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


  </body>
</html>