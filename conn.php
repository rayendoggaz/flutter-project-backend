<?php
$conn=mysqli_connect("localhost","root","","crudflutter");
$query=mysqli_query($conn,"SELECT * FROM student");
$data=mysqli_fetch_all($query,MYSQLI_ASSOC);

echo json_encode($data);
?>