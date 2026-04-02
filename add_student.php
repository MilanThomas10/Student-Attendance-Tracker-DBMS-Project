<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$dept = $_POST['dept'];
$sem = $_POST['sem'];

$conn->query("INSERT INTO STUDENT VALUES ($id, '$name', '$dept', $sem)");

echo "Student added!";
?>