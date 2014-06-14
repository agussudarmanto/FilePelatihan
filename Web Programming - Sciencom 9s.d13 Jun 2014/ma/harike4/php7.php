<?php
$con = mysql_connect("localhost", "root", "", "ma");
mysql_select_db("ma");

if (mysql_errno()) {
	echo "Failed to connect to MySQL: " . mysql_error();
} else {
	echo "Success to connect to MySQL...";
}

echo "<br>";
echo "<br>";


$sql = "SELECT * FROM perkara WHERE kodeperkara='0002'";

$result = mysql_query($sql) or die(mysql_error());

while ($row = mysql_fetch_array($result)) {
	echo $row['kodeperkara'] . " " . $row['penggugat'] . " " . $row['tergugat'];
	echo "<br>";
}

mysql_close($con);
?>