<?php require_once 'core/init.php'; 

if(not_logged_in() === TRUE) {
	header('location: login.php');
}

$userdata = getUserDataByUserId($_SESSION['id']);

require_once 'core/conn.php';
$q_items = $conn->query("SELECT * FROM `items`") or die(mysqli_error());
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="">
  	<meta name="author" content="">
	<title>Dashboard</title>
	<!-- Bootstrap core CSS-->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  	<!-- Custom fonts for this template-->
  	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  	<!-- Page level plugin CSS-->
  	<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  	<!-- Custom styles for this template-->
  	<link href="css/sb-admin.css" rel="stylesheet">
</head>
<body class="fixe  d-nav sticky-footer bg-dark" id="page-top">

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
  </br>
  </br>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active" href="login.php">Dashboard</li>
      </ol>
      
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered" id="itemData" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <td>Part No</td>
                  <td>Part Description</td>
                  <td>Site</td>
                  <td>Site Description</td>
                  <td>Unit Cost</td>
                  <td>Internal Customer No</td>
                  <td>UoM</td>
                  <td>Delivered Date</td>
                  <td>Issued Qty</td>
                  <td>Cost Center</td>
                  <td>Cost Center Description</td>
                  <td>MIN Reference No</td>
                  <td>Service No</td>
              </tr>
              </thead>
             <?php
              while ($row = mysqli_fetch_array($q_items)) {
                  echo '
                      
                      <tr>
                          <td>' . $row["Part_No"] . '</td>
                          <td>' . $row["Part_Description"] . '</td>
                          <td>' . $row["Site"] . '</td>
                          <td>' . $row["Site_Description"] . '</td>
                          <td>' . $row["Unit_Cost"] . '</td>
                          <td>' . $row["Internal_Customer_No"] . '</td>
                          <td>' . $row["UoM"] . '</td>
                          <td>' . $row["Delivery_Date"] . '</td>
                          <td>' . $row["Issued_Qty"] . '</td>
                          <td>' . $row["Cost_Center"] . '</td>
                          <td>' . $row["Cost_Center_Description"] . '</td>
                          <td>' . $row["MIN_Reference_No"] . '</td>
                          <td>' . $row["WOService_NoProject_NoVehicle"] . '</td>
                      </tr>
                      ';
              }
              ?>
              <!-- <tfoot>
                <tr>
                  <td>Part No</td>
                  <td>Part Description</td>
                  <td>Site</td>
                  <td>Site Description</td>
                  <td>Unit Cost</td>
                  <td>Internal Customer No</td>
                  <td>UoM</td>
                  <td>Delivered Date</td>
                  <td>Issued Qty</td>
                  <td>Cost Center</td>
                  <td>Cost Center Description</td>
                  <td>MIN Reference No</td>
                  <td>Service No</td>
              </tr>
              </tfoot> -->
              <!-- <tbody>
       
              </tbody> -->
            </table>
          </div>
        </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © SLT 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
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
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>

    <<script>
    $(document).ready(function() {
      $('#itemData').DataTable();
    } );
    </script>
  </div>

</body>
</html>