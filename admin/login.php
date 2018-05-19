<?php 

require_once 'core/init.php';

if(logged_in() === TRUE) {
	header('location: dashboard.php');
}

// form submiited
if($_POST) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username == "") {
		echo " * Username Field is Required <br />";
	}

	if($password == "") {
		echo " * Password Field is Required <br />";
	}

	if($username && $password) {
		if(userExists($username) == TRUE) {
			$login = login($username, $password);
			if($login) {
				$userdata = userdata($username);

				$_SESSION['id'] = $userdata['id'];

				header('location: dashboard.php');
				exit();
					
			} else {
				echo "Incorrect username/password combination";
			}
		} else{
			echo "username does not exists";
		}
	}

} // /if


?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
	<title>Login</title>
	  	<!-- Bootstrap core CSS-->
	  	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  		<!-- Custom fonts for this template-->
  		<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  		<!-- Custom styles for this template-->
  		<link href="css/sb-admin.css" rel="stylesheet">
</head>
<body class="bg-dark">
<div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      	<div class="card-body">
			<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
			<div>
				<label for="username">Username</label>
				<input class="form-control" type="text" name="username" id="username" autocomplete="off" placeholder="Username" />
			</div>
			<br />

			<div>
				<label for="password">Password</label>
				<input class="form-control" type="password" name="password" id="password" autocomplete="off" placeholder="Password" />
			</div>
			<br />

			<div>
				<button class="btn btn-primary btn-block" type="submit">Login</button>
				</br>
				<a href="../index.php" class="btn btn-primary btn-block" role="button">Main</a>
			</div>
			</form>

			<!-- Create authorized users -->
			<!-- ****This line should be commented***** -->
			Not Registered? Click <a href="register.php">Register</a>
		</div>
	</div>
</div>
</div>
</body>
</html>


<style>
body{height:100%;
	width:100%;
	background-image:url(images/back.jpg);  
	background-repeat:no-repeat;  
	background-size:cover;  
	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='.images/back.jpg',sizingMethod='scale');
	-ms-filter:"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.jpg',sizingMethod='scale')";
 }
</style>