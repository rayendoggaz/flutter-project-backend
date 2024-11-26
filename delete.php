<?php
$conn=mysqli_connect("localhost","root","","crudflutter");
$nisn=$_POST['nisn'];
$data=mysqli_query($conn,"delete from student where nisn='$nisn'");

if ($data) {
    echo json_encode(array('message'=>'data berhasil di tambahkan'));
} else {
    echo json_encode(array('message'=>'data gagal di tambahkan'));
}

?>