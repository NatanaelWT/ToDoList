<?php
include "connect.php";
$input = $_POST['input2'];
$input2 = $_POST['input3'];
$sql = "UPDATE list SET todo = '$input' WHERE id = '$input2';";
$query = mysqli_query($conn, $sql);
header("location: ../");
?>