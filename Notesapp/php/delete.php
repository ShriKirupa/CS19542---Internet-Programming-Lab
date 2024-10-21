<?php
include 'db_connect.php';

$id = $_POST['id'];

$sql = "DELETE FROM snippets WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "Snippet deleted successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
