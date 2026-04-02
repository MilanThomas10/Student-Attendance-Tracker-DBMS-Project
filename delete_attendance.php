<?php
include 'db.php';

$id = $_GET['id'];

$conn->query("DELETE FROM ATTENDANCE WHERE attendance_id = $id");

header("Location: view_attendance.php");
?>