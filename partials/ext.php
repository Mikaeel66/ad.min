



<?php

header("Access-Control-Allow-Origin: *");

$servername = "remotemysql.com";
$username = "4pkYNOCj4N";
$password = "mN1u3cQVv4";
$dbname = "4pkYNOCj4N";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT * FROM test";
$result = $conn->query($sql);

$response = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc())
		$response[] = $row;
} else {
    echo "0 results";
}

echo json_encode($response);




$conn->close();

 ?>
