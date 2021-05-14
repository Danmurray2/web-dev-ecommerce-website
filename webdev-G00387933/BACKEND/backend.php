<?php
//Step 1:  Create a database connection
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "g00387933";
$connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

//Test if connection occoured
if (mysqli_connect_errno()) {
	die("DB connection failed: " .
		mysqli_connect_error() .
		" (" . mysqli_connect_errno() . ")");
}

if (!$connection) {
	die('Could not connect: ' . mysqli_error($con));
}
//assigning the query result to new variable
$result = mysqli_query($connection, "SELECT * FROM ITEMS");

//new array
$data = array();

//dynamically pushes data returned to the array
while ($row = mysqli_fetch_object($result)) {
	array_push($data, $row);
}
