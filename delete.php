<?php
include_once 'db.php'; 
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = "DELETE FROM siswa WHERE id = '$id'";
	$success = mysqli_query($conn, $query);
	if ($success) {
		header('location: list.php');
	} else {
		die(mysqli_error());
	}
}
?>