<?php
	include 'koneksi.php';
				$no = 1;
				if(isset($_POST['cari'])){
					//$data = mysqli_query($koneksi,"SELECT * FROM user where username='".$_POST['username']."'");
					$data = mysqli_query($koneksi,"SELECT * FROM user where username like'%".$_POST['username']."%'");
				}else{
				$data = mysqli_query($koneksi,"SELECT * FROM user");
				}
				?>
				<form method="POST">
				<table>
				<tr>
					<td><input type="text" name="username"></td>
					<td><input type="submit" name="cari"></td>
					</tr>
					</table>
<html>
		<head>
			<title>nur anisa.com</title>
		</head>
		<body>
			<h2>tabel user</h2>
			<br/>
			<a href="inputuser2.php">+ TAMBAH USER</a>
			<br/>
			<table border="1">
				<tr>
					<th>no</th>
					<th>nama</th>
					<th>password</th>
					<th>level</th>
					<th>status</th>
					<th>opsi</th>
				</tr>
				<?php 

				while($d= mysqli_fetch_array($data)){
					?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['username']; ?></td>
					<td><?php echo $d['password']; ?></td>
					<td><?php echo $d['level']; ?></td>
					<td><?php echo $d['status']; ?></td>
					<td>
						<a href="edit_user.php?id=<?php echo $d['id_user']; ?>">EDIT</a>
						<a href="hapus_user.php?id=<?php echo $d['id_user']; ?>">HAPUS</a>
					</td>
				</tr>
				<?php
				}
				?>
			</table>
		</body>
	</html>
	</form>