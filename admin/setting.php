<?php require_once 'core/init.php'; 

if(not_logged_in() === TRUE) {
	header('location: login.php');
}

$userdata = getUserDataByUserId($_SESSION['id']);


if($_POST) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$username = $_POST['username'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];

	if($fname == "") {
		echo " * First Name is Required <br />";
	}

	if($lname == "") {
		echo " * Last Name is Required <br />";
	}

	if($username == "") {
		echo " * Username is Required <br />";
	}

	if($contact == "") {
		echo " * Contact is Required <br />";
	}

	if($address == "") {
		echo " * Address is Required <br />";
	}

	if($fname && $lname && $username && $contact && $address) {
		$user_exists = users_exists_by_id($_SESSION['id'], $username);
		if($user_exists === TRUE) {
			echo "username already exists <br /> ";
		} else {
			if(updateInfo($_SESSION['id']) === TRUE) {
				echo "Successfully Updated <br />";
			} else {
				echo "Error while updating the information";
			}
		}
	}

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
	<title>Settings</title>
	<!-- Bootstrap core CSS-->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  	<!-- Custom fonts for this template-->
  	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  	<!-- Page level plugin CSS-->
  	<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  	<!-- Custom styles for this template-->
  	<link href="css/sb-admin.css" rel="stylesheet">
</head>
<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
<a class="navbar-brand" href="login.php">SLT Inventory 2.0</a>
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarResponsive">
  <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
	<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
	  <a class="nav-link" href="dashboard.php">
		<i class="fa fa-fw fa-dashboard"></i>
		<span class="nav-link-text">Dashboard</span>
	  </a>
	</li>
	<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
	  <a class="nav-link" href="profile.php">
		<i class="fa fa-fw fa-table"></i>
		<span class="nav-link-text">Profile</span>
	  </a>
	</li>
	<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
	  <a class="nav-link" href="setting.php">
		<i class="fa fa-gear"></i>
		<span class="nav-link-text">Settings</span>
	  </a>
	</li>

  </ul>
  <ul class="navbar-nav sidenav-toggler">
	<li class="nav-item">
	  <a class="nav-link text-center" id="sidenavToggler">
		<i class="fa fa-fw fa-angle-left"></i>
	  </a>
	</li>
  </ul>
  <ul class="navbar-nav ml-auto">
	
	<li class="nav-item">
	  <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
		<i class="fa fa-fw fa-sign-out" href="login.php"></i>Logout</a>
	</li>
  </ul>
</div>
</nav>
<br/>
<br/>
<div class="content-wrapper">
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
	<li class="breadcrumb-item">
	  <a href="dashboard.php">Dashboard</a>
	</li>
	<li class="breadcrumb-item active" href="profile.php">Settings</li>
  </ol>


<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
	<div>
		<label for="username">Username</label>
		<input type="text" name="username" id="username" placeholder="Username" value="<?php if($_POST) {
			echo $_POST['username'];
			} else {
			 	echo $userdata['username'];
			 	} ?>">
	</div>
	<br />

	<div>
		<label for="fname">First Name</label>
		<input type="text" name="fname" id="fname" placeholder="Fisrt Name" value="<?php if($_POST) {
			echo $_POST['fname'];
			} else {
				echo $userdata['first_name'];
				} ?>">
	</div>
	<br />

	<div>
		<label for="lname">Last Name</label>
		<input type="text" name="lname" id="lname" placeholder="Last Name" value="<?php if($_POST) {
			echo $_POST['lname'];
			} else { 
				echo $userdata['last_name'];
				} ?>">
	</div>
	<br />

	<div>
		<label for="contact">Contact</label>
		<input type="text" name="contact" id="contact" placeholder="Contact" value="<?php if($_POST) {
			echo $_POST['contact'];
			} else {
				echo $userdata['contact'];
				}  ?>">
	</div>
	<br />

	<div>
		<label for="address">Address</label>
		<input type="text" name="address" id="address" placeholder="Address" value="<?php if($_POST) {
			echo $_POST['address'];
			} else { 
				echo $userdata['address']; 
				} ?>">
	</div>
	<br />

</form>

<div>
		<button class="btn btn-primary" type="submit">Submit</button>		
		<a href="dashboard.php"><button class="btn btn-primary" type="button">Back</button></a>
</div>
<footer class="sticky-footer">
<div class="container">
	<div class="text-center">
		<small>Copyright © SLT 2018</small>
	</div>
</div>
</footer>
<!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
 			<div class="modal-header">
	 			<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
	 			<button class="close" type="button" data-dismiss="modal" aria-label="Close">
		 			<span aria-hidden="true">×</span>
	 			</button>
 			</div>
 			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
 				<div class="modal-footer">
	 				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
	 				<a class="btn btn-primary" href="logout.php">Logout</a>
 				</div>
		</div>
	</div>
</div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</div>
</body>
</html>

