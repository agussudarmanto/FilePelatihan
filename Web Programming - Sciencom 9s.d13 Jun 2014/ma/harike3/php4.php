<style>
* {font-family:verdana;}
td {border:1px solid green; cellspadding:0px;}
</style>

<?php
$nama 	= array("Agus Sudarmanto", "Rahma", "Rio Ismail", "Fiqih Hanif");
$satker = array("Biro Kesekretariatan Pimpinan", "Biro Keuangan", "Biro Kepegawaian", "Biro Perencanaan");
$arrlength = count($nama);
?>
<table>
	<?php 
	for ($x=0; $x<$arrlength; $x++) {
		$no = $x+1;
		if ($x%2==0) {
			echo "<tr bgcolor='green'>";
			echo "<td>$no</td>";
			echo "<td>{$nama[$x]}</td>";
			echo "<td>{$satker[$x]}</td>";
			echo "</tr>";
		} else {
			echo "<tr bgcolor='lightgreen'>";
			echo "<td>$no</td>";
			echo "<td>{$nama[$x]}</td>";
			echo "<td>{$satker[$x]}</td>";
			echo "</tr>";
		}
	}
	?>
</table>






