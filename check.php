<?php

require_once 'admin\core\conn.php';
$employee = $_POST['employee'];

//$formatedSearchQuery = "%" . $employee . "%";

$q_employee = $conn->query("SELECT * FROM `items` WHERE `WOService_NoProject_NoVehicle` = '$employee'") or die(mysqli_error($conn));

//print_r("SELECT * FROM `items` WHERE `WOService_NoProject_NoVehicle` = $employee");

$v_employee = $q_employee->num_rows;
if($v_employee > 0)
{
    echo 'Success';
}
else
{
    echo 'Error';
}

?>