<?php
$con = mysqli_connect("localhost", "root", "", "ma");

if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
	echo "Success to connect to MySQL...";
}

// create table
$kodeperkara= $_POST['kodeperkara'];
$penggugat	= $_POST['penggugat'];
$tergugat	= $_POST['tergugat'];
$amarputusan= $_POST['amarputusan'];

$sql = "INSERT INTO perkara (kodeperkara, penggugat, tergugat, amarputusan)
VALUES ('$kodeperkara', '$penggugat', '$tergugat', '$amarputusan')";

if (mysqli_query($con, $sql)){
	echo "Data perkara inserted successfully";
} else {
	echo "Error inserting database : " .  mysqli_error($con);
}
?>