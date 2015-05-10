var myApp = angular.module("myApp", ["ngRoute", "myAppControllers"]);

// Change page title when changing views
myApp.factory("Page", function () {
  var title = "Course Management System";
  return {
    title: function () { return title; },
    setTitle: function (newTitle) { title = newTitle; }
  }
});

// Routes
myApp.config(["$routeProvider", "$locationProvider", function($routeProvider, $locationProvider) {
  var viewDir = "partials/"
  $routeProvider
    .when("/", {
      templateUrl: viewDir + "login.html",
      controller: "LoginCtrl"
    })
		.when("/faculty", {
      templateUrl: viewDir + "faculty.html",
      controller: "FacultyCtrl"
    })
		.when("/students", {
      templateUrl: viewDir + "students.html",
      controller: "StudentsCtrl"
    });
	
	$locationProvider.html5Mode({enabled: true, requireBase: true});
	
}]);
