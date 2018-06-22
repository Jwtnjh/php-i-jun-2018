<?php
$conn = mysqli_connect('127.0.0.1', 'vagrant', 'vagrant', 'course');

// Gets a connection to the database
//$sql = "SELECT id, CONCAT(firstname, ' ', lastname) AS customer_name FROM
//        customers ORDER BY firstname";
$sql = 'SELECT * FROM customers';
$result = mysqli_query($conn, $sql);
var_dump($result);

// Queries the database with the specified query
while ($row = mysqli_fetch_assoc($result)) {
	var_dump($row);
}

// Fetches a row a data based on the query
mysqli_close($conn);
