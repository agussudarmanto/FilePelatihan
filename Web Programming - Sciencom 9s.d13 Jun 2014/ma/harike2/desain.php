<html>
<head>
	<title>App Template</title>
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
					<img src="../img/logo.png" align="middle">BUA<br><span style="font-size:12pt;">Badan Urusan Administrasi</span>			
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
							<table width="100%" valign="top">
								<tr>
									<td>&#164;</td><td><a href="">Biro Perencanaan</a></td>
								</tr>
								<tr>
									<td>&#164;</td><td><a href="">Biro Kepegawaian</a></td>
								</tr>
								<tr>
									<td>&#164;</td><td><a href="">Biro Keuangan</a></td>
								</tr>
								<tr>
									<td>&#164;</td><td><a href="">Biro Perlengkapan</a></td>
								</tr>
								<tr>
									<td>&#164;</td><td><a href="">Biro Hukum dan Humas</a></td>
								</tr>
								<tr>
									<td>&#164;</td><td><a href="">Biro Kesekretariatan Pimpinan</a></td>
								</tr>
								<tr>
									<td>&#164;</td><td><a href="">Biro Umum</a></td>
								</tr>
							</table>
						</td>
						
						<!-- Aplikasi kita -->
						<td valign="top" style="padding:20px;">
							<!-- form -->
									<h3>Form Registrasi</h3><hr>
									<form action="">
										<table>
											<tr>
												<td>Nama</td>
												<td>:</td>
												<td><input type="text" name="txtNama"></td>
											</tr>
											<tr>
												<td>Alamat</td>
												<td>:</td>
												<td><input type="text" name="txtAlamat"></td>
											</tr>
											<tr>
												<td>Tempat/Tanggal lahir</td>
												<td>:</td>
												<td>
													<input type="text" name="txtTempat"> /
													<input type="text" name="txtTgllahir">
												</td>
											</tr>
											<tr valign="top">
												<td>Golongan Darah</td>
												<td>:</td>
												<td>
													<input type="radio" name="rbGoldar" value="1"> A<br>
													<input type="radio" name="rbGoldar" value="1"> B<br>
													<input type="radio" name="rbGoldar" value="1"> AB<br>
													<input type="radio" name="rbGoldar" value="1"> O<br>
												</td>
											</tr>
											<tr valign="top">
												<td>Status Pernikahan</td>
												<td>:</td>
												<td>
													<input type="radio" name="rbNikah" value="1"> Tidak menikah<br>
													<input type="radio" name="rbNikah" value="2"> Menikah<br>
													<input type="radio" name="rbNikah" value="3"> Janda/Duda<br>
												</td>
											</tr>
											<tr>
												<td>Nomor HP</td>
												<td>:</td>
												<td><input type="text" name="txtHp"></td>
											</tr>
											<tr>
												<td colspan=3 align="right">
													<input type="submit" value="Kirim">
													<input type="reset" value="Hapus">
												</td>
											</tr>
										</table>
									</form>
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