<!DOCTYPE html>
<html lang = "eng">
	<head>
		<meta charset = "utf-8" />
		<title>SLT Inventory System 2.0</title>
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css"/>
	</head>
	<body class = "alert-info">
	<!-- <nav class="navbar navbar-light bg-light">
	<a class="navbar-brand" href="#">
	  <img src="images/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
	  SLT Inventory 2.0
	</a>
  	</nav> -->
	<nav class = "navbar navbar-dark bg-primary">
			<div class = "container-fluid">
				<div class = "navbar-header">
				</br>
					<img class="box-shadow" src = "images/logo.png" width = "150px" height = "120px"/>
					<!-- <p class = "navbar-text pull-right"><font size="6" color="white">SLT Inventory System 2.0</font></p> -->
					<div style="position: fixed; top: 30px; right: 0px; width: 130px; height: 150px;">
					<a href="admin/login.php"><button type="button" class="btn btn-light">Login</button></a>
					<!-- <a href="admin/register.php"><button type="button" class="btn btn-primary">Register</button></a> -->
					</div>
				</div>
			</div></br>
		</nav>
		<div class = "container-fluid">
        <style>
           .navbar {
    		-webkit-box-shadow: 0 8px 6px -6px #999;
    		-moz-box-shadow: 0 8px 6px -6px #999;
    		box-shadow: 0 8px 6px -6px #999;
			}
        </style>
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<div class = "col-lg-12 well">
				<h2>Inventory Items Search</h2>
				<br />
				<div id = "result"></div>
				<br />
				<br />
				<form id="form" enctype = "multipart/form-data">
					<div class = "form-group">
						<label>Employee Service No:</label>
						<input type = "text" name="employee" id = "employee" class = "form-control" required = "required"/>
						<br />
						<br />
						<div id = "error"></div>
						<br />
						<button type = "button" id = "login" class = "btn btn-primary btn-lg btn-block"><span class = "glyphicon glyphicon-login"></span>Search</button>
					</div>
				</form>
			</div>
		</div>
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
</html>