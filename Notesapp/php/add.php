<?php
include 'db_connect.php';

$title = $_POST['title'];
$description = $_POST['description'];
$code = $_POST['code'];
$tags = $_POST['tags'];

$sql = "INSERT INTO snippets (title, description, code, tags) VALUES ('$title', '$description', '$code', '$tags')";
if ($conn->query($sql) === TRUE) {
    echo "New code snippet added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("Location: views/index.html"); // Ensure index.html displays the notes
    exit();

$conn->close();
?>
