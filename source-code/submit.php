<?php

include 'db_connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$course = $_POST['course'];

$sql = "INSERT INTO students
(name,email,contact,course)
VALUES
('$name','$email','$contact','$course')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Student Registered Successfully!</h2>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>
