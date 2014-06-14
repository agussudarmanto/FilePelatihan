<html>
	<head>
		<style>
			body { background-color:lightgray; font-family:verdana;} 
		</style>
	</head>
	<body>
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
	</body>
</html>