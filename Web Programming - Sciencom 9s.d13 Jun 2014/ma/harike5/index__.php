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
									<td>&#164;</td><td>Jawaban</td>
								</tr>
								<tr>
									<td>&#164;</td><td><a href="index3.php">Soal 1</a></td>
								</tr>
								<tr>
									<td>&#164;</td><td><a href="index.php">Soal 5</a></td>
								</tr>
								<tr>
									<td>&#164;</td><td><a href="index2.php">Soal 7</a></td>
								</tr>
								<tr>
									<td>&#164;</td><td><a href="index4.php">Soal 8</a></td>
								</tr>
							</table>
						</td>
						
						<!-- Aplikasi kita -->
						<td valign="top" style="padding:20px;">

						
						
						
	<table style="width:50%;" align="center">
		<?php for ($i=1; $i<=10; $i++) { ?>
			<tr bgcolor="<?php if ($i%2==0) echo "yellow"; else echo "orange";?>"><td><?php echo $i;?></td></tr>
		<?php } ?>
	</table>
						
						
						
						
						
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