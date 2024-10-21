<?php
include 'db_connect.php';

$keyword = $_POST['keyword'];
$sql = "SELECT * FROM snippets WHERE title LIKE '%$keyword%' OR tags LIKE '%$keyword%'";

$result = $conn->query($sql);

$snippets = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $snippets[] = $row;
    }
}

echo json_encode($snippets);

$conn->close();
?>
