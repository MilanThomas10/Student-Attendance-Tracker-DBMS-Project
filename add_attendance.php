<?php
include 'db.php';

$sid = $_POST['sid'];
$cid = $_POST['cid'];
$date = $_POST['date'];
$status = $_POST['status'];

$conn->query("INSERT INTO ATTENDANCE (student_id, course_id, date, status)
VALUES ($sid, $cid, '$date', '$status')");

echo "Attendance recorded!";
?>