<?php 
include_once 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Mahasiswa</title>
</head>
<body>
	<table>
		<form action="update.php" method="POST">
			<?php
			$id = $_GET['id'];
			$query ="SELECT * FROM siswa WHERE id = '$id'";
			$result = mysqli_query($conn,$query);
			while($data = mysqli_fetch_assoc($result)){
			?>
			<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
			<tr>
				<td>Nama</td>
				<td> 
					<input type="text" name="nama" value="<?php echo $data['nama']; ?>" placeholder="Nama">
				</td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>
					<input type="text" name="nim" value="<?php echo $data['nim']; ?>" placeholder="NIM">
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>
					<input type="date" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Update Data">
				</td>
			</tr>
			<?php 
			} 
			?>
		</form>
	</table>
</body>
</html>