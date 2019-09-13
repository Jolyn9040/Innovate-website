<?php
include 'database.php';

$id = $_POST["deleteview"];
$sql = "DELETE FROM tableit WHERE id = $id";
$result = mysqli_query($link, $sql);

header("Location: adminview.php");
?>