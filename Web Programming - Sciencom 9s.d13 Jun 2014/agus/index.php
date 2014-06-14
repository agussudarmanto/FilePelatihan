<html>
<head>
	<title>Data Perkara</title>
	<style>
	body {background-color:lightgray; font-family:verdana;}
	</style>
</head>
<body>
	<table width=800 align="center">
		<!-- Header -->
		<tr height=130>
			<td background="../img/header2.png">
				<h1 style="margin-left:20px; color:white;">
					<img src="../img/logo.png" align="middle">ARP<br><span style="font-size:12pt;">Aplikasi Registrasi Perkara</span>
				</h1>
				
			</td>
		</tr>
		
		<!-- Menu -->
		<tr height=20 style="background-color:#333333;">
			<td>
				<table style="font-size:9pt; color:#ACACAC;">
					<tr>
						<td>Home</td>
						<td>| Kegiatan</td>
						<td>| Perencanaan</td>
						<td>| Laporan</td>
						<td>| Buku Tamu</td>
					</tr>
				</table>
			</td>
		</tr>
		
		<!-- Isi -->
		<tr height=450 valign="top">
			<td style="padding:0px;">
				<!-- Table dalam table -->
				<table width="100%">
					<tr>
						<!-- Menu Kiri -->
						<td width=200 valign="top" style="background-color:#FFB900; padding:0px;">
							<table width=150 width="100%" valign="top">
								<tr>
									<td colspan=2>Jawaban</td>
								</tr>
								<tr>
									<td>&#164;</td><td><a href="soal2.php" target="_blank">Soal 2</a></td>
								</tr>
								<tr>
									<td>&#164;</td><td><a href="index.php">Soal 5 & 7</a></td>
								</tr>
								<tr>
									<td>&#164;</td><td><a href="index2.php">Soal 8</a></td>
								</tr>
							</table>
						</td>
						
						<!-- Aplikasi kita -->
						<td valign="top" style="padding:20px;">
<!-- form -->
							
							
							
							
							
							
							
							
						
	<b>Soal 5 s.d 7</b>
	<hr>
	<h2>Formulir Regitrasi Perkara</h2>
	<hr>
	<table style="font-size:10px;">
		<form action="?" method="POST">
			<tr><td>Nomor Perkara</td><td>:</td><td><input type="text" name="nomorperkara"></td></tr>
			<tr><td>Tanggal Daftar</td><td>:</td><td><input type="text" name="tgldaftar" value="<?php echo date('Y-m-d');?>"> (yyyy-mm-dd)</td></tr>
			<tr><td>Jenis Perkara</td><td>:</td><td><input type="text" name="jenisperkara"></td></tr>
			<tr><td>Prodeo</td><td>:</td><td><input type="radio" name="prodeo" value="Y">Ya / <input type="radio" name="prodeo" value="T" checked>Tidak</td></tr>
			<tr><td>Tanggal PMH</td><td>:</td><td><input type="text" name="tglpmh" value="<?php echo date('Y-m-d');?>"> (yyyy-mm-dd)</td></tr>
			<tr><td>Tanggal PHS</td><td>:</td><td><input type="text" name="tglphs" value="<?php echo date('Y-m-d');?>"> (yyyy-mm-dd)</td></tr>
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
	
	// Connect to database
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
	<br><br><br><hr>
	<h2 align="center">Daftar Perkara Pada Mahkamah Agung RI</h2>
	<hr>
	<table style="font-size:10px;">
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
			<td nowrap><?php echo $row['nomorperkara'];?></td>
			<td><?php echo date_format(date_create($row['tgldaftar']),'d-m-Y');?></td>
			<td><?php echo $row['namapenggugat'];?></td>
			<td><?php echo $row['alamatpenggugat'];?></td>
			<td><?php echo $row['namatergugat'];?></td>
			<td><?php echo $row['alamattergugat'];?></td>
			<td><?php echo $row['jenisperkara'];?></td>
			<td><?php if ($row['prodeo']=="Y") echo "Ya"; else echo "Tidak";?></td>
			<td><?php echo date_format(date_create($row['tglpmh']),'d-m-Y');?></td>
			<td><?php echo date_format(date_create($row['tglphs']),'d-m-Y');?></td>
		</tr>
		<?php } 
		mysql_close();
		?>
	</table>
							
							
							
							
							
							
							
							
							
							
							
							
							
							
<!-- /form -->
						</td>
					</tr>
				</table>
			</td>
		</tr>
		
		<!-- Footer -->
		<tr height=30 style="background-color:#333333">
			<td style="font-size:7pt; color:#ACACAC; text-align:center; text-shadow: 1px 1px #ABABAB;">
				Jalan Medan Merdeka Utara Nomor 9-13, Jakarta 10110. Telepon (021) 3843348, 3810350, 3457661
			</td>
		</tr>
	</table>
</body>
</html>