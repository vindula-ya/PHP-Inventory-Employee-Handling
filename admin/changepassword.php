<?php 

require_once 'core/init.php'; 

if(not_logged_in() === TRUE) {
	header('location: login.php');
}

if($_POST) {
	$currentpassword = $_POST['currentpassword'];
	$newpassword = $_POST['password'];
	$conformpassword = $_POST['conformpassword'];

	if($currentpassword == "") {
		echo "Current Password field is required <br />";
	}

	if($newpassword == "") {
		echo "New Password field is required <br />";
	}

	if($conformpassword == "") {
		echo "Conform Password field is required <br />";
	}

	if($currentpassword && $newpassword && $conformpassword) {
		if(passwordMatch($_SESSION['id'], $currentpassword) === TRUE) {

			if($newpassword != $conformpassword) {
				echo "New password does not match conform password <br />";
			} else {
				if(changePassword($_SESSION['id'], $newpassword) === TRUE) {
					echo "Successfully updated";
				} else {
					echo "Error while updating the information <br />";
				}
			}
			
		} else {
			echo "Current Password is incorrect <br />";
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
	<title>Change Password</title>
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

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
	<table>
		<tr>
			<th>
				Current Password
			</th>
			<td>
				<input type="password" name="currentpassword" autocomplete="off" placeholder="Current Password" />
			</td>
		</tr>
		<tr>
			<th>
				New Password
			</th>
			<td>
				<input type="password" name="password" autocomplete="off" placeholder="New Password" />
			</td>
		</tr>
		<tr>
			<th>
				Conform Password
			</th>
			<td>
				<input type="password" name="conformpassword" autocomplete="off" placeholder="Confrom Password" />
			</td>
		</tr>
		<tr>
			<td>
				<button type="submit">Change Password</button>
			</td>
			<td>
				<a href="dashboard.php"><button type="button">Back</button></a>
			</td>
		</tr>
	</table>
</form>

</body>
</html>