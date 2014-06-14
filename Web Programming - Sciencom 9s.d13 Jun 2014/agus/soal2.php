<html>
<head>
	<style>
	table, td { border:1px solid black; }
	</style>
</head>
<body>
	<table style="width:50%;" align="center">
		<?php for ($i=1; $i<=10; $i++) { ?>
			<tr bgcolor="<?php if ($i%2==0) echo "yellow"; else echo "orange";?>"><td><?php echo $i;?></td></tr>
		<?php } ?>
	</table>
</body>
</html>