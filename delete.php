<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['delete'])) {
    // Assuming you have a valid database connection established
    $conn = new mysqli('localhost', 'root', '', 'login_db');

    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    // Get the user ID to delete
    $user_id_to_delete = $_POST['deleteUser'];

    // SQL query to delete the selected user record
    $sql = "DELETE FROM user WHERE id = $user_id_to_delete";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require 'header.php'; ?>
</head>
<body>
    <br> <a href="welcome.php"><button>Return to Account</button></a>

    <?php 'footer.php'; ?>
</body>
</html>
