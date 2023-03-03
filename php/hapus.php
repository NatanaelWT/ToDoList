<?php
include "connect.php";
$input = $_GET['p'];
$sql = "DELETE FROM list WHERE id ='$input'";
$query = mysqli_query($conn, $sql);
header("location: ../");
?>