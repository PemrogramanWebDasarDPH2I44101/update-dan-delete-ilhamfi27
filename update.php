<?php
include_once 'db.php';

if (isset($_POST['submit'])){
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$tgl_lahir =$_POST['tgl_lahir'];
	$id = $_POST['id'];

	$query = "UPDATE siswa SET nim='$nim',nama='$nama',tgl_lahir='$tgl_lahir' WHERE id='$id'";
	$query_success = mysqli_query($conn,$query);
	if ($query_success) {
		header("location: list.php");
	}else{
		echo mysql_error($conn);
		echo "<a href='edit.php'>Kembali</a>";
	}
}

  ?>