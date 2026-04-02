<?php
include 'db.php';

$result = $conn->query("
SELECT a.attendance_id, a.student_id, s.name, c.course_name, a.date, a.status
FROM ATTENDANCE a
JOIN STUDENT s ON a.student_id = s.student_id
JOIN COURSE c ON a.course_id = c.course_id
");

echo "<style>
body { font-family: Arial; background:#f4f6f8; }
.container { width:70%; margin:30px auto; background:white; padding:20px; border-radius:10px; box-shadow:0 0 10px rgba(0,0,0,0.1);}
table { width:100%; border-collapse: collapse; }
th, td { padding:10px; text-align:center; border-bottom:1px solid #ddd; }
th { background:#007bff; color:white; }
a.delete { color:red; text-decoration:none; font-weight:bold; }
</style>";

echo "<div class='container'>";
echo "<h2>Attendance Records</h2>";

echo "<table>
<tr>
<th>Student ID</th>
<th>Name</th>
<th>Course</th>
<th>Date</th>
<th>Status</th>
<th>Action</th>
</tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>".$row['student_id']."</td>
    <td>".$row['name']."</td>
    <td>".$row['course_name']."</td>
    <td>".$row['date']."</td>
    <td>".$row['status']."</td>
    <td>
        <a class='delete' href='delete_attendance.php?id=".$row['attendance_id']."' 
        onclick=\"return confirm('Are you sure you want to delete?')\">
        Delete
        </a>
    </td>
    </tr>";
}

echo "</table>";
echo "</div>";
?>