<?php
$con = mysqli_connect("localhost", "root", "", "ma");

if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
	echo "Success to connect to MySQL...";
}

// create table

$sql = "CREATE table perkara (
	kodeperkara char(10),
	penggugat 	char(30),
	tergugat 	char(30),
	amarputusan varchar(30)
)";

if (mysqli_query($con, $sql)){
	echo "Table perkara created successfully";
} else {
	echo "Error creating database : " .  mysqli_error($con);
}
?>