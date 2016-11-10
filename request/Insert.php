<?php
require 'Config.php';

$requester_name = $_POST['requester_name'];
$requester_sector = $_POST['requester_sector'];
$requester_phone = $_POST['requester_phone'];
$service_running = $_POST['service_running'];
$diagnostic = $_POST['diagnostic'];
$run_service = $_POST['run_service'];
$run_received = $_POST['run_received'];

// Montamos a consulta SQL
$sql = "INSERT INTO `request` (`requester_name`, `requester_sector`, `requester_phone`, `service_running, `diagnostic`, `run_service`, `run_received` ) VALUES ('".$requester_name."', '".$requester_sector."', '".$requester_phone."', '".$service_running."', '".$diagnostic."', '".$run_service."', '".$run_received."')";

if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>

