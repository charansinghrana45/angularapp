<?php defined('BASEPATH') or die("no direct script access allowed"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Angularjs App</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
</head>
<body ng-app="myapp">


	<div ng-controller="myctrl">
		<p> hello </p> 
		<p>{{ 3+4 }}</p>
		<p ng-bind="'cs' | uppercase"></p>

		<form name="myForm">
		<input type="email" name="fname" ng-model="name" ng-change="makeUpper(name)" required> <br>
		<span ng-show="myForm.fname.$error.required">value is required</span>
		<span ng-show="myForm.fname.$error.email">not a valid email</span>
		<select ng-model="selectedName" ng-change="getColor(selectedName)">
			<option ng-repeat="x in colors" >{{x}}</option>
		</select>
		</form>

		<p ng-bind="name"></p>
		<p style="color: {{ color }}">{{ "Mr:" + name }}</p>

		<p>{{ persons[0].name | uppercase }}</p>
		
		<ul>
			
			<li ng-repeat="person in persons">{{ person.age }}</li>

		</ul>

		
		<div class="testdirectvie"></div>
	</div>

	<p><a href="#/!">Main</a></p>

	<a href="#!red">Red</a>
	<a href="#!green">Green</a>
	<a href="#!blue">Blue</a>

	<div ng-view></div>

<script>

var app = angular.module('myapp', ["ngRoute"]);

app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        template : "<p style='color:#000'>main</p>"
    })
    .when("/red", {
        template : "<p style='color:red'>red</p>"
    })
    .when("/green", {
        template : "<p style='color:green'>red</p>"
    })
    .when("/blue", {
        template : "<p style='color:blue'>blue</p>"
    });
});

console.log(app);

app.controller('myctrl', function($scope, hexafy) {

	$scope.selectedName = 'green';
	$scope.name = "hello";
	$scope.color = hexafy.myFunc('red');
	$scope.persons = [{name: 'kapil', age: 20}];
	$scope.colors = ['green', 'red'];

	$scope.makeUpper = function(name) {
		$scope.name = $scope.name.toUpperCase();
		$scope.color = "blue";
	}

	$scope.getColor = function(color) {
		alert(color);
	}

});

app.directive('testdirectvie', function () {

	return { 
		restrict : "C",
		template: '<h1>Made by a directive!</h1>'};

});

app.service('hexafy', function() {

		this.x = 'green';

    this.myFunc = function (x) {
        return this.x;
    }
});
	
</script>

</body>
</html>