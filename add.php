<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];
    $attendance = $_POST['attendance'];
    $marks = $_POST['marks'];
    $fee_paid = $_POST['fee_paid'];
    $total_fee = $_POST['total_fee'];
    

    $sql = "INSERT INTO student (name, email, phone, course, attendance, marks, fee_paid, total_fee)
            VALUES ('$name', '$email', '$phone', '$course', '$attendance', '$marks', '$fee_paid', '$total_fee')";

    if ($conn->query($sql) === TRUE) {
        echo "Student added successfully! <a href='view_students.php'>View All</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
