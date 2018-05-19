<?php

    require_once 'admin/core/conn.php';
    $employee = $_POST['employee'];
    $q_employee = $conn->query("SELECT * FROM `items` WHERE `WOService_NoProject_NoVehicle` = '$employee'") or die(mysqli_error());
    //$f_employee = $q_employee->fetch_array();
    
    echo '<div class="table-responsive">';

    echo "<table border='1' class='table'>
    <tr>
    <th>Part No</th>
    <th>Part Description</th>
    <th>Site</th>
    <th>Site Description</th>
    <th>Unit Cost</th>
    <th>Internal Customer No</th>
    <th>UoM</th>
    <th>Delivery Date</th>
    <th>Issued Qty</th>
    <th>Cost Center</th>
    <th>Cost Center Description</th>
    <th>MIN Reference No</th>
    <th>Service No</th>
    </tr>";
    
    
    while ($row = $q_employee->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Part_No"] . "</td>";
        echo "<td>" . $row["Part_Description"] . "</td>";
        echo "<td>" . $row["Site"] . "</td>";
        echo "<td>" . $row["Site_Description"] . "</td>";
        echo "<td>" . $row["Unit_Cost"] . "</td>";
        echo "<td>" . $row["Internal_Customer_No"] . "</td>";
        echo "<td>" . $row["UoM"] . "</td>";
        echo "<td>" . $row["Delivery_Date"] . "</td>";
        echo "<td>" . $row["Issued_Qty"] . "</td>";
        echo "<td>" . $row["Cost_Center"] . "</td>";
        echo "<td>" . $row["Cost_Center_Description"] . "</td>";
        echo "<td>" . $row["MIN_Reference_No"] . "</td>";
        echo "<td>" . $row["WOService_NoProject_NoVehicle"] . "</td>";
        echo "</tr>";
    }
    echo "</table></div>";
    
    //mysql_free_result($f_employee);
?>

