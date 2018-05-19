<?php require_once 'core/init.php'; 

if(not_logged_in() === TRUE) {
	header('location: login.php');
}

$userdata = getUserDataByUserId($_SESSION['id']);

?>

<!DOCTYPE html>
<html>
<head>
	<!-- <meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="">
  	<meta name="author" content=""> -->
	<title>Profile Information</title>
	<!-- Bootstrap core CSS-->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  	<!-- Custom fonts for this template-->
  	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  	<!-- Page level plugin CSS-->
  	<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  	<!-- Custom styles for this template-->
  	<link href="css/sb-admin.css" rel="stylesheet">
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
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

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Profile Information</a>
        </li>
        <li class="breadcrumb-item active" href="profile.php">Profile Information</li>
      </ol>


	  <div class="card-header">

<table class="table table-inverse" border="1" style="width:100%;">
	<thread>
	<tr>
		<th>Username </th>
		<td><?php echo $userdata['username'] ?></td>
	</tr>
	<tr>
		<th>First Name </th>
		<td><?php echo $userdata['first_name'] ?></td>
	</tr>
	<tr>
		<th>Last Name </th>
		<td><?php echo $userdata['last_name'] ?></td>
	</tr>
	<tr>
		<th>Contact </th>
		<td><?php echo $userdata['contact'] ?></td>
	</tr>
	<tr>
		<th>Address </th>
		<td><?php echo $userdata['address'] ?></td>
	</tr>
	</thread>
</table>

<br />
</div>

<a href="dashboard.php"><button type="button" class="btn btn-secondary">Back</button></a>

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