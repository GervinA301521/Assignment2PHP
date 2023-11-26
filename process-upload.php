<?php
session_start();
require 'database.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['upload'])) {
    // database connection established
    $mysqli = require 'database.php';

    // Get the user ID to associate the image
    $user_id = $_SESSION['user_id'];

    // Process the uploaded image
    $target_dir = "/Applications/XAMPP/xamppfiles/htdocs/SEM2/Assignment2/uploads/";

    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        // Allow only certain file formats
        $allowed_extensions = array("jpg", "jpeg", "png", "gif");
        if (!in_array($imageFileType, $allowed_extensions)) {
            echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, the file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["image"]["size"] > 10485760) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Upload the image if all checks pass
        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                // Save the image path in the database
                $image_path = $target_file;
                $update_sql = "UPDATE user SET image_path = '$image_path' WHERE id = $user_id";
                $mysqli->query($update_sql);

                echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.". $_FILES["image"]["error"];
            }
        }
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
?>
