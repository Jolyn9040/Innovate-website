<?php
include 'database.php';

$id = $_POST["delete"];
$sql = "DELETE FROM tablecourse WHERE courseid = $id";
$result = mysqli_query($link, $sql);

header("Location: addindex.php");
?>