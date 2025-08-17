<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>
<div class="container">
    <h2>All Students</h2>
    <?php
    $result = $conn->query("SELECT * FROM student");

    echo "<table>
    <tr>
    <th>ID</th><th>Name</th><th>Email</th><th>Phone</th>
    <th>Course</th><th>Attendance</th><th>Marks</th>
    <th>Total Fee</th><th>Paid</th><th>Remaining</th><th>Profile</th>
    </tr>";

    while ($row = $result->fetch_assoc()) {
        $remaining = $row['total_fee'] - $row['fee_paid'];

        echo "<tr>
        <td>".$row['id']."</td>
        <td>".$row['name']."</td>
        <td>".$row['email']."</td>
        <td>".$row['phone']."</td>
        <td>".$row['course']."</td>
        <td>".$row['attendance']."%</td>
        <td>".$row['marks']."</td>
        <td>₹".$row['total_fee']."</td>
        <td>₹".$row['fee_paid']."</td>
        <td>₹".$remaining."</td>
        <td><a href='profile.php?id=".$row['id']."'>View Profile</a></td>
        </tr>";
    }
    echo "</table>";
    ?>
</div>
</body>
</html>
