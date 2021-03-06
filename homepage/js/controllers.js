var myAppControllers = angular.module("myAppControllers", []);

myAppControllers.controller("LoginCtrl", ["$scope", "$location", "$http",
	function($scope, $location, $http) {
		$scope.login = function() {
			var viewDir = "partials/";
			var $mydata = {
				"inputEmail": $scope.inputEmail,
				"inputPassword": $scope.inputPassword
			};
			$http.post("php/login.php", $mydata)
				.success(function(data, status, headers, config)
        		{
            		console.log(status + ' - ' + data);
            		if (data.type === 0) {
            			$location.path('/faculty');
            		}
            		else if (data.type === 1) {
            			$location.path('/students');
            		}
            		else if (data.type === 2) {
            			$location.path('/admin')
            		}
            		else {
            			console.log('type error');
            			$scope.loginMessage = "There was a database error. Please contact an admin.";
            		}
        		})
				.error(function(data, status, headers, config)
        		{
            		console.log('error');
            		$scope.loginMessage = "There was a database error. Please contact an admin.";
        		});
			/*
			$http({
				method: "POST",
				url: "php/login.php",
				data: {
					inputEmail: $scope.inputEmail,
					inputPassword: $scope.inputPassword
				},
				headers: { "Content-Type": "application/x-www-form-urlencoded;charset=utf-8" }
			})
			.success(function (data) {
				console.log(data);
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
			.error(function (data) {
				$scope.loginMessage = data.error;
			});
			*/
		};
	}
]);

myAppControllers.controller("FacultyCtrl", ["$scope", "$location", "$http",
	function($scope, $location, $http, Page) {
		Page.setTitle("Faculty Course Management");
		
	}
]);

myAppControllers.controller("StudentsCtrl", ["$scope", "$location", "$http",
	function($scope, $location, $http, Page) {
		Page.setTitle("Student Course Management");
	}
]);