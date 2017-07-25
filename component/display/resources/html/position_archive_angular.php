<!doctype html>
<html ng-app>
  <head>
    <title>Angular Position List</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  </head>
  <body>

  	<ul ng-init="positions = <?php echo $test; ?>">
	    <li ng-repeat="position in positions | filter:query">
	       <p>{{position.country}}</p>
	    </li>
	</ul>

  </body>
</html>