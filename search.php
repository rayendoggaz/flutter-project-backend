<?php
$conn = mysqli_connect("localhost", "root", "", "crudflutter");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $search = isset($_GET['query']) ? $_GET['query'] : '';

    $query = "SELECT * FROM student WHERE 
              name LIKE ? OR 
              address LIKE ? OR 
              nisn LIKE ? OR 
              gender LIKE ? OR
              location LIKE ?";
    $stmt = $conn->prepare($query);
    $likeSearch = "%$search%";
    $stmt->bind_param("sssss", $likeSearch, $likeSearch, $likeSearch, $likeSearch, $likeSearch);
    $stmt->execute();

    $result = $stmt->get_result();
    $data = array();

    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    echo json_encode($data);
}
?>
