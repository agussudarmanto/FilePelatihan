<?php
$con = mysqli_connect("localhost", "root", "", "ma");

if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
	echo "Success to connect to MySQL...";
}

// create table
$kodeperkara= $_POST['kodeperkara'];
$nama		= $_POST['nama'];
$majelis		= $_POST['majelis'];

$sql = "INSERT INTO hakim (kodeperkara, nama, majelis) VALUES ('$kodeperkara', '$nama', '$majelis')";

if (mysqli_query($con, $sql)){
	echo "Data hakim inserted successfully";
} else {
	echo "Error inserting database : " .  mysqli_error($con);
}
?>