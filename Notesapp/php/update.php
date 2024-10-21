<?php
include 'db_connect.php';

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$code = $_POST['code'];
$tags = $_POST['tags'];

$sql = "UPDATE snippets SET title='$title', description='$description', code='$code', tags='$tags' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "Snippet updated successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
