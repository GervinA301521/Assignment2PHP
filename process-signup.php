<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require 'database.php';

    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];
    $password_confirmation = $_POST["password_confirmation"];

    // Validation
    if (empty($name) || !filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($password) < 8
        || !preg_match("/[a-z]/i", $password) || !preg_match("/[0-9]/", $password)
        || $password !== $password_confirmation) {
        die("Invalid data submitted.");
    }

    // Hash the password
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Check if the email is already taken
    $stmt = $mysqli->prepare("SELECT id FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        die("Email already taken.");
    }

    $stmt->close();

    // Insert the user into the database
    $stmt = $mysqli->prepare("INSERT INTO user (name, email, mobile, gender, password_hash)
                              VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $mobile, $gender, $password_hash);

    if ($stmt->execute()) {
        header("Location: signup-success.html");
        exit;
    } else {
        die("Error: " . $stmt->error);
    }

    $stmt->close();
}

// Redirect if accessed directly
header("Location: signup.html");
exit;
