<html>
<head>
	<title>Data Perkara</title>
	<style>
	body {background-color:lightgray; font-family:verdana;}
	tr th {background-color:darkgray;}
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

	
<?php
	
	// Connect to database
	$con = mysqli_connect("localhost", "root", "", "agus");
	if (mysqli_connect_errno()) { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
	
	// Select Data Row
	$sql = "SELECT * FROM perkara";
	$result = mysqli_query($con, $sql);
	$i = 1;
	?>
	<b>Soal 8</b>
	<hr>
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
		<tr bgcolor="<?php if ($i%2==0) echo "lightgreen"; else echo "white";?>">
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
		mysql_close();?>
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