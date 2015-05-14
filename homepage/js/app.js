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
myApp.config(["$routeProvider", function($routeProvider) {
  var viewDir = "partials/";
  $routeProvider
    .when("/", {
      templateUrl: viewDir + "login.html",
      controller: "LoginCtrl",
      title: "Login"
    })
		.when("/faculty", {
      templateUrl: viewDir + "faculty.html",
      controller: "FacultyCtrl",
      title: "Faculty"
    })
    .when("/students", {
      templateUrl: viewDir + "students.html",
      controller: "StudentsCtrl",
      title: "Student"
    })
    .when("/admin", {
      templateUrl: viewDir + "admin.html",
      controller: "AdminCtrl",
      title: "Admin"
    });
	
}]);

myApp.run(["$location", "$rootScope", function($location, $rootScope) {
  $rootScope.$on("$routeChangeSuccess",
    function (event, current, previous) {
      $rootScope.title = current.$$route.title;
    });
}]);