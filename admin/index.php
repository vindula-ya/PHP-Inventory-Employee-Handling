<?php 

require_once 'core/init.php';

if(logged_in() === TRUE) {
	header('location: dashboard.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="">
  	<meta name="author" content="">
	<title>SLT Inventory System 2.0</title>
	<!-- Bootstrap core CSS-->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  	<!-- Custom fonts for this template-->
  	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  	<!-- Page level plugin CSS-->
  	<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  	<!-- Custom styles for this template-->
  	<link href="css/sb-admin.css" rel="stylesheet">
	<meta name = "viewport" content = "width=device-width, initial-scale=1" />
	<link rel = "stylesheet" type = "text/css" href = "vendor\bootstrap\css\bootstrap.css"/>
</head>

<body>

			<!-- <a href="login.php">Login</a> or <a href="register.php">Register</a> -->
			<button type="button" class="btn btn-primary" href="login.php">Login</button>
			<button type="button" class="btn btn-primary" href="register.php">Register</button>
				
</body>
</html>