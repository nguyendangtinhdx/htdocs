<?php
// Including database connections
require_once 'database_connections.php'; 
// mysqli query to fetch all data from database
$data = json_decode(file_get_contents("php://input")); 
// Escaping special characters from submitting data & storing in new variables.
$email = mysqli_real_escape_string($con, $data->email);
$password = mysqli_real_escape_string($con, $data->password);

$query = "SELECT * from emp_details WHERE emp_email = '$email' AND emp_password = '$password'";
$query_getName = "SELECT emp_name from emp_details WHERE emp_email = '$email' AND emp_password = '$password'";
$result = mysqli_query($con, $query);
$result_getName = mysqli_query($con, $query_getName);
$getName = mysqli_fetch_array($result_getName);
if(mysqli_num_rows($result) != 0) {
	setcookie("user", $getName['emp_name'], time() + 86400, "/");
	echo true;
}

?>


