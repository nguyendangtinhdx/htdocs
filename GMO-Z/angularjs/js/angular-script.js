// Application module
var crudApp = angular.module('crudApp',[]);
crudApp.controller("DbController",['$scope','$http', function($scope,$http){

// Function to get employee details from the database
getInfo();
function getInfo(){
// Sending request to EmpDetails.php files 
$http.post('databaseFiles/empDetails.php').success(function(data){
// Stored the returned data into scope 
$scope.details = data;
});
}

// Setting default value of gender 
$scope.empInfo = {'gender' : 'male'};
// Enabling show_form variable to enable Add employee button
$scope.show_form = true;
// Function to add toggle behaviour to form
$scope.formToggle =function(){
	$('#empForm').slideToggle();
	$('#editForm').css('display', 'none');
}
$scope.login = function(info){
	$http.post('databaseFiles/login.php',{"email":info.email,"password":info.password}).success(function(data){
		if (data == true) {
			document.location.href = 'http://localhost:8080/GMO-Z/angularjs/';
		}else{
			alert("Email or Password incorrect!");
		}
	});
}
$scope.insertInfo = function(info){
	$http.post('databaseFiles/insertDetails.php',{"name":info.name,"email":info.email,"address":info.address,"gender":info.gender}).success(function(data){
		if (data == true) {
			getInfo();
			$('#empForm').css('display', 'none');
		}
	});
}
$scope.deleteInfo = function(info){
	if(confirm("Are you sure you want to remove it?"))
	{
		$http.post('databaseFiles/deleteDetails.php',{"del_id":info.emp_id}).success(function(data){
			if (data == true) {
				getInfo();
			}
		});
	}
}
$scope.currentUser = {};
$scope.editInfo = function(info){
	$scope.currentUser = info;
	$('#empForm').slideUp();
	$('#editForm').slideToggle();
}
$scope.UpdateInfo = function(info){
	$http.post('databaseFiles/updateDetails.php',{"id":info.emp_id,"name":info.emp_name,"email":info.emp_email,"address":info.emp_address,"gender":info.emp_gender}).success(function(data){
		$scope.show_form = true;
		if (data == true) {
			getInfo();
		}
	});
}
$scope.updateMsg = function(emp_id){
	$('#editForm').css('display', 'none');
}
}]);