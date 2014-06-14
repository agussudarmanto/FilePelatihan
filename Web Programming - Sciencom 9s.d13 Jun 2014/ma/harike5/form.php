<html>
<head>
	<style>
		* {font-family:verdana;}
	</style>
</head>
<body>
	<h1>Database Perkara</h1>
	<h2>Input data perkara</h2>
	<table>
		<form action="?" method="POST">
			<tr><td>Nomor Perkara</td><td>:</td><td><input type="text" name="nomorperkara"></td></tr>
			<tr><td>Tanggal Daftar</td><td>:</td><td><input type="text" name="tgldaftar"> (yyyy-mm-dd)</td></tr>
			<tr><td>Jenis Perkara</td><td>:</td><td><input type="text" name="jenisperkara"></td></tr>
			<tr><td>Prodeo</td><td>:</td><td><input type="radio" name="prodeo" value="Y">Ya / <input type="radio" name="prodeo" value="T" checked>Tidak</td></tr>
			<tr><td>Tanggal PMH</td><td>:</td><td><input type="text" name="tglpmh"> (yyyy-mm-dd)</td></tr>
			<tr><td>Tanggal PHS</td><td>:</td><td><input type="text" name="tglphs"> (yyyy-mm-dd)</td></tr>
			<tr><td>Nama Penggugat</td><td>:</td><td><input type="text" name="namapenggugat"></td></tr>
			<tr><td>Alamat Penggugat</td><td>:</td><td><textarea name="alamatpenggugat"></textarea></td></tr>
			<tr><td>Nama Tergugat</td><td>:</td><td><input type="text" name="namatergugat"></td></tr>
			<tr><td>Alamat Tergugat</td><td>:</td><td><textarea name="alamattergugat"></textarea></td></tr>
			<tr><td colspan=3 align="right"><input type="submit" value="SIMPAN" name="simpandata"></td></tr>
		</form>
	</table>
	
	
<?php
	function filterparam($str)
	{
		GLOBAL $con;
		$str = mysqli_real_escape_string($con, $str);
		
		return $str;
	}
	
	$con = mysqli_connect("localhost", "root", "", "agus");
	if (mysqli_connect_errno()) { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
	
	if ( !empty($_POST['simpandata']) && !empty($_POST['nomorperkara']) ) {
	
		// Filtering param strings
		$nomorperkara 	= filterparam($_POST['nomorperkara']);
		$tgldaftar 		= filterparam($_POST['tgldaftar']);
		$jenisperkara 	= filterparam($_POST['jenisperkara']);
		$prodeo 		= filterparam($_POST['prodeo']);
		$tglpmh 		= filterparam($_POST['tglpmh']);
		$tglphs 		= filterparam($_POST['tglphs']);
		$namapenggugat 	= filterparam($_POST['namapenggugat']);
		$alamatpenggugat = filterparam($_POST['alamatpenggugat']);
		$namatergugat 	= filterparam($_POST['namatergugat']);
		$alamattergugat = filterparam($_POST['alamattergugat']);

		$sql = "INSERT INTO perkara (
				nomorperkara,
				tgldaftar,
				jenisperkara,
				prodeo,
				tglpmh,
				tglphs,
				namapenggugat,
				alamatpenggugat,
				namatergugat,
				alamattergugat
			) VALUES (
				'$nomorperkara',
				'$tgldaftar',
				'$jenisperkara',
				'$prodeo',
				'$tglpmh',
				'$tglphs',
				'$namapenggugat',
				'$alamatpenggugat',
				'$namatergugat',
				'$alamattergugat'
			)";
		
		$result = mysqli_query($con, $sql);
		
		if (mysqli_affected_rows($con)) {
			echo "<script>alert('Simpan data berhasil..')</script>";
		} else {
			echo "<script>alert('Simpan data gagal..')</script>";
		}
	}
	
	
	
	
	
	
	
	// Select Data Row
	$sql = "SELECT * FROM perkara";
	$result = mysqli_query($con, $sql);
	$i = 1;
	?>

	<h2>Input data perkara</h2>
	<table>
		<tr>
			<th>No</th>
			<th>Nomor Perkara</th>
			<th>Tanggal Daftar</th>
			<th>Nama Penggugat</th>
			<th>Alamat Penggugat</th>
			<th>Nama Tergugat</th>
			<th>Alamat Tergugat</th>
			<th>Jenis Perkara</th>
			<th>Prodeo</th>
			<th>Tanggal PMH</th>
			<th>Tanggal PHS</th>
		</tr>
		<?php while ($row = mysqli_fetch_array($result)) { ?>
		<tr>
			<td><?php echo $i++;?>.</td>
			<td><?php echo $row['nomorperkara'];?></td>
			<td><?php echo $row['tgldaftar'];?></td>
			<td><?php echo $row['namapenggugat'];?></td>
			<td><?php echo $row['alamatpenggugat'];?></td>
			<td><?php echo $row['namatergugat'];?></td>
			<td><?php echo $row['alamattergugat'];?></td>
			<td><?php echo $row['jenisperkara'];?></td>
			<td><?php if ($row['prodeo']=="Y") echo "Ya"; else echo "Tidak";?></td>
			<td><?php echo $row['tglpmh'];?></td>
			<td><?php echo $row['tglphs'];?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
