<?php
$conn = mysqli_connect("localhost", "root", "", "crudflutter");

// Retrieve POST data
$id = $_POST['id'];
$nisn = $_POST['nisn'];
$name = $_POST['name'];
$address = $_POST['address'];
$gender = $_POST['gender']; // Add gender field
$location = $_POST['location']; // Add location field

// Update query
$data = mysqli_query($conn, "UPDATE student 
SET nisn = '$nisn', name = '$name', address = '$address', gender = '$gender', location = '$location' 
WHERE id = '$id'");

if ($data) {
    echo json_encode(array('message' => 'Data successfully updated'));
} else {
    echo json_encode(array('message' => 'Failed to update data'));
}
?>
