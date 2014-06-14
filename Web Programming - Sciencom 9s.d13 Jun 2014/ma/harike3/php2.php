<html>
<body>
	<table border=1>
	<?php 
		$jmlbaris = 3;
		$jmlkolom = 3;
		for ($x=1; $x<=$jmlbaris; $x++) { ?>
		<tr>
			<?php for ($y=1; $y<=$jmlkolom; $y++) { ?>
			<td>a</td>
			<?php } ?>
		</tr>
	<?php } ?>
	</table>
	<br><br>
	<table border=1>
	<?php 
		$jmlbaris = 10;
		$jmlkolom = 3;
		$warnaGenap 	= "red";
		$warnaGanjil 	= "yellow";
		for ($x=1; $x<=$jmlbaris; $x++) {
			if ($x%2==0) {
				echo "<tr bgcolor='{$warnaGenap}'>";
				for ($y=1; $y<=$jmlkolom; $y++) {
					echo "<td>$x.$y</td>";
				}
				echo "</tr>";
			} else {
				echo "<tr bgcolor='{$warnaGanjil}'>";
				for ($y=1; $y<=$jmlkolom; $y++) {
					echo "<td>$x.$y</td>";
				}
				echo "</tr>";
			}
		}
	?>
	</table>
</body>
</html>