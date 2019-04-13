<!DOCTYPE html>
<html ng-app="crudApp">
<head>
	<meta charset="UTF-8">
	<title>AngularJS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- Include main CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Include jQuery library -->
	<script src="js/jQuery/jquery.min.js"></script>
	<!-- Include AngularJS library -->
	<script src="lib/angular/angular.min.js"></script>
	<!-- Include Bootstrap Javascript -->
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container wrapper" ng-controller="DbController">
		<h1 class="text-center">AngularJS</h1>
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<div class="col-md-2">
					<div class="alert alert-default navbar-brand search-box">
						<button class="btn btn-success" ng-show="show_form" ng-click="formToggle()">Add Employee <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
					</div>
				</div>
				<div class="col-md-5">
					<div class="alert alert-default input-group search-box">
						<span class="input-group-btn">
							<input type="text" class="form-control" placeholder="Search Employee..." ng-model="search_query">
						</span>
					</div>
				</div>
				<div class="col-md-3">
					<div class="alert alert-default">
						<?php
						if(isset($_COOKIE["user"])) {
							echo "Xin chào: <b style='color: red'>" . $_COOKIE["user"] . "</b>";
						}else{
							setcookie("user", $_COOKIE["user"], time() - 86400, "/");
							header('Location: ./login.html');
							exit;
						}
						if(isset($_GET['logout'])) {
							setcookie("user", $_COOKIE["user"], time() - 86400, "/");
							header('Location: ./login.html');
							exit;
						}
						?>
					</div>
				</div>
				<div class="col-md-2">
					<div class="alert alert-default">
						<a href="?logout" onclick="return confirm('Are you sure Logout?');" >Đăng xuất</a>
					</div>
				</div>
			</div>
		</nav>
		<div class="col-md-6 col-md-offset-3">

			<!-- Include form template which is used to insert data into database -->
			<div ng-include src="'templates/insertForm.html'"></div>

			<!-- Include form template which is used to edit and update data into database -->
			<div ng-include src="'templates/editForm.html'"></div>

			<!-- <div ng-include src="'login.html'"></div> -->
		</div>
		<div class="clearfix"></div>

		<!-- Table to show employee detalis -->
		<div class="table-responsive">
			<table class="table table-hover">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Gender</th>
					<th>Address</th>
					<th></th>
					<th></th>
				</tr>
				<tr ng-repeat="detail in details| filter:search_query">
					<td><span>{{detail.emp_id}}</span></td>
					<td>{{detail.emp_name}}</td>
					<td>{{detail.emp_email}}</td>
					<!-- <td>{{detail.emp_gender}}</td> -->
					<td>{{detail.emp_gender == 'male' ? 'Nam' : 'Nữ'}}</td>
					<td>{{detail.emp_address}}</td>
					<td>
						<button class="btn btn-primary" ng-click="editInfo(detail)" title="Edit"><span class="glyphicon glyphicon-edit"></span></button>
					</td>
					<td>
						<button class="btn btn-danger" ng-click="deleteInfo(detail)" title="Delete"><span class="glyphicon glyphicon-trash"></span></button>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<!-- Include controller -->
	<script src="js/angular-script.js"></script>
</body>
</html>