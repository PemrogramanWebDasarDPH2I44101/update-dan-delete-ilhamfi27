<?php 
include_once 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>List Data Siswa</title>
</head>
<body>
	<?php 
	$query ="SELECT * FROM siswa";
	$result = mysqli_query($conn,$query);
	if (mysqli_num_rows($result)>0) {
	?>
	<table>
		<thead>
			<th>Nama</th>
			<th>NIM</th>
			<th>Tanggal Lahir</th>
			<th>Aksi</th>
		</thead>
		<tbody>
		<?php 
		while ($data =mysqli_fetch_assoc($result)){
		 ?>
		 	<tr>
		 		<td><?php echo $data['nama'];  ?></td>
		 		<td><?php echo $data['nim'];  ?></td>
		 		<td><?php echo $data['tgl_lahir'];  ?></td>
		 		<td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> | <a href="delete.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a></td>
		 	</tr>
		 	<?php
	 		}
 		?>
		 </tbody>
	</table>
	<?php 
 	}else{
 		echo "Tidak Ada Data!";
 	}
	?>
	<br>
	<a href="form.php">Tambah Data</a>
</body>
</html>