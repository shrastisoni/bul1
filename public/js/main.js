var app = angular.module('horsify', []);

//inserting send message into the database 
app.controller('messageCtrl', function($scope, $http) {
	console.log($scope);
	$scope.send = function() {
		var data = [{to: "Ankur"}];
		$scope.message.to,
		subject: $scope.message.subject,
		message: $scope.message.text	
		$http.get("sentMessages")
    	.success(function(response) {
    	
    	});
	};
});