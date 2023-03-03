<?php
include "connect.php";
$input = $_POST['input'];
$sql = "INSERT INTO list VALUES('','$input')";
$query = mysqli_query($conn, $sql);
header("location: ../");
?>