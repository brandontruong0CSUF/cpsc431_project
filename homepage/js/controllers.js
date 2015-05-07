var myAppControllers = angular.module("myAppControllers", []);

myAppControllers.controller("LoginCtrl", ["$scope", "$location",
	function($scope, $location, $http, Page) {
		$scope.Page = Page;
		$scope.login = function() {
			$http({
				method: "POST",
				url: "php\login.php",
				data: {
					inputEmail: $scope.inputEmail,
					inputPassword: $scope.inputPassword
				},
				headers: { "Content-Type": "application/x-www-form-urlencoded" }
			})
			.success(function (data) {
				var type = data.type;
				if (type === 0) {
					$location.path("faculty.html");
				}
				else if (type === 1) {
					$location.path("student.html");
				}
				else if (type === 2) {
					$location.path("admin.html");
				}
				else {
					$scope.loginMessage = "There was a database error. Please contact an admin.";	
				}
			})
			.fail(function (data) {
				$scope.loginMessage = data.error;
			});
		};
	}
]);

myAppControllers.controller("FacultyCtrl", ["$scope", "$location",
	function($scope, $location, $http, Page) {
		Page.setTitle = "Faculty Course Management";
		
	}
]);

myAppControllers.controller("StudentsCtrl", ["$scope", "$location",
	function($scope, $location, $http, Page) {
		Page.setTitle = "Student Course Management";
	}
]);