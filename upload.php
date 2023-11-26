<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['upload'])) {
    // Define the target directory for uploads
    $targetDir = "SEM2/Assignment2/uploads/";

    // Ensure the directory exists
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0755, true);
    }

    // Generate a unique filename
    $fileName = uniqid() . '_' . basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;

    // Check if the file is an image
    $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
    $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($imageFileType, $allowedTypes)) {
        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
            echo "File uploaded successfully.";
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
    }
} else {
    header("Location: welcome.php");
    exit;
}
?>
