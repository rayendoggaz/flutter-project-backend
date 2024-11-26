<?php
$conn = mysqli_connect("localhost", "root", "", "crudflutter");

// Retrieve POST data
$nisn = $_POST['nisn'];
$name = $_POST['name'];
$address = $_POST['address'];
$gender = $_POST['gender']; // Add gender field
$location = $_POST['location']; // Add location field

// Insert query
$data = mysqli_query($conn, "INSERT INTO student (nisn, name, address, gender, location) 
VALUES ('$nisn', '$name', '$address', '$gender', '$location')");

if ($data) {
    echo json_encode(array('message' => 'Data successfully added'));
} else {
    echo json_encode(array('message' => 'Failed to add data'));
}
?>
