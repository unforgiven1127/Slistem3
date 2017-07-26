<!DOCTYPE html>
<html >

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<body ng-app="myApp">

<div class="container" ng-controller="PostController as postCtrl">
	 <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">

	    <div class="panel panel-default" >
	       <div class="panel-heading">
	          <div class="panel-title text-center">Login using username & password</div>
	       </div>
	       <div class="panel-body" >
	          <form name="login" ng-submit="postCtrl.postForm()" class="form-horizontal" method="POST">
	             <div class="input-group">
	                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                <input type="text" id="inputUsername" class="form-control" required autofocus ng-model="postCtrl.inputData.username"/>
	             </div>
	             <div class="input-group">
	                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
	                <input type="password" id="inputPassword" class="form-control" required ng-model="postCtrl.inputData.password"/>
	             </div>
	             <div class="alert alert-danger" ng-show="errorMsg">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
	                ×</button>
	                <span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;{{errorMsg}}
	             </div>
	             <div class="form-group">
	                <div class="col-sm-12 controls">
	                   <button type="submit" class="btn btn-primary pull-right" ng-disabled="login.$invalid">
	                   <i class="glyphicon glyphicon-log-in"></i> Log in</button>
	                </div>
	             </div>
	          </form>
	       </div>
	    </div>
	 </div>
</div>

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
<div ng-controller="customersCtrl">
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
	   $http.get("test.php?f=test1")
	   .then(function (response) {$scope.names = response.data.records;});
	});

    app.controller('PostController', ['$scope', '$http', function($scope, $http) {
            this.postForm = function() {
                var encodedString = 'username=' +
                    encodeURIComponent(this.inputData.username) +
                    '&password=' +
                    encodeURIComponent(this.inputData.password);

                $http({
                    method: 'POST',
                    url: 'test.php?f=loginTest',
                    data: {'login':encodedString},
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).then(function (response)
			        {
			        	console.log('success');
			        },
			        function(error)
			        {
			        	console.log(error);
			        }
			       );
            }
    }]);


</script>

</body>
</html>
