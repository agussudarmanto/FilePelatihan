<?php
$con = mysqli_connect("localhost", "root", "", "ma");

if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
	echo "Success to connect to MySQL...";
}

// create database

$sql = "CREATE DATABASE datateman";

if (mysqli_query($con, $sql)){
	echo "Database datateman created successfully";
} else {
	echo "Error createing database : " .  mysqli_error($con);
}