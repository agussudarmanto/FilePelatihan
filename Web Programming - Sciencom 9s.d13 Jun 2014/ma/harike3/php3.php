<?php
$cars = array("volvo", "BMW", "Toyota", "Ferrari", "Mascheratti", "Bugatti");
$arrlength = count($cars);

for ($x=0; $x<$arrlength; $x++) {
	echo $cars[$x];
	echo "<br>";
}
?>
<br><br><br>

<style>
* {font-family:verdana;}
td {border:1px solid green; cellspadding:0px;}
</style>
<table>
	<?php 
	for ($x=0; $x<$arrlength; $x++) {
		$no = $x+1;
		if ($x%2==0) {
			echo "<tr bgcolor='green'>";
			echo "<td>$no</td>";
			echo "<td>{$cars[$x]}</td>";
			echo "</tr>";
		} else {
			echo "<tr bgcolor='lightgreen'>";
			echo "<td>$no</td>";
			echo "<td>{$cars[$x]}</td>";
			echo "</tr>";
		}
	}
	?>
</table>