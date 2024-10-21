<?php
// Include your database connection file
include 'db_connect.php';

// Query to fetch notes from the database
$sql = "SELECT * FROM notes";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Saver App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Your Saved Notes</h1>

    <!-- Add button to create a new note -->
    <a href="add.html" class="add-note-button">Add New Note</a>

    <!-- Notes display section -->
    <div class="notes-container">
        <?php
        // Check if there are any notes in the database
        if ($result->num_rows > 0) {
            // Loop through the notes and display them
            while ($row = $result->fetch_assoc()) {
                echo "<div class='note'>";
                echo "<h2>" . $row['title'] . "</h2>"; // Title
                echo "<pre>" . $row['code'] . "</pre>"; // Code
                echo "<p><strong>Tags:</strong> " . $row['tags'] . "</p>"; // Tags
                echo "<a href='edit.php?id=" . $row['id'] . "' class='btn'>Edit</a>";
                echo "<a href='delete.php?id=" . $row['id'] . "' class='btn'>Delete</a>";
                echo "<a href='star.php?id=" . $row['id'] . "' class='btn'>Star</a>";
                echo "</div>";
            }
        } else {
            echo "<p>No notes available. Please add a note!</p>";
        }
        ?>
    </div>
</body>
</html>
