<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Profile</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>
<div class="container profile">
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM student WHERE id=$id");

    if ($row = $result->fetch_assoc()) {
        $remaining = $row['total_fee'] - $row['fee_paid'];

        echo "<h2>Student Profile</h2>";
        echo "<p><strong>Name:</strong> " . $row['name'] . "</p>";
        echo "<p><strong>Email:</strong> " . $row['email'] . "</p>";
        echo "<p><strong>Phone:</strong> " . $row['phone'] . "</p>";
        echo "<p><strong>Course:</strong> " . $row['course'] . "</p>";
        echo "<p><strong>Attendance:</strong> " . $row['attendance'] . "%</p>";
        echo "<p><strong>Marks:</strong> " . $row['marks'] . "</p>";
        echo "<p><strong>Total Fees:</strong> ₹" . $row['total_fee'] . "</p>";
        echo "<p><strong>Fees Paid:</strong> ₹" . $row['fee_paid'] . "</p>";
        echo "<p><strong>Remaining Fees:</strong> ₹" . $remaining . "</p>";
        echo "<br><a href='view.php'>⬅ Back to All Students</a>";
    } else {
        echo "Student not found!";
    }
} else {
    echo "No student selected!";
}
?>
</div>
</body>
</html>
