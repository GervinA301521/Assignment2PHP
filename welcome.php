<?php
session_start();
require 'database.php';

if (isset($_SESSION["user_id"])) {
    $mysqli = require 'database.php';

    $sql = "SELECT * FROM user WHERE id = {$_SESSION["user_id"]}";
    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        .content-container {
            margin-left: 20px;
        }
    </style>
</head>
<body>

    <?php require 'header.php'; ?>

    <div class="content-container">
        <h2>Welcome!</h2>

        <?php require 'display_data.php'; ?>

        <p>You can now add & delete users.</p>

        <a href="add.php">
            <button type="button">Add</button>
        </a>
       <br><br>
        <!-- Image upload form -->
        <form action="process-upload.php" method="post" enctype="multipart/form-data">
            <label for="image">Upload Image:</label>
            <input type="file" name="image" id="image" accept="image/*">
            <button type="submit" name="upload">Upload Image</button>
        </form>
        <br><br>

        <form action="delete.php" method="post">
            <!-- Display the list of user accounts -->
            <label for="deleteUser">Select user to delete:</label>
            <select name="deleteUser" id="deleteUser">
                <?php
                $sql = "SELECT id, name FROM user";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["id"] . "'>" . $row["name"] . "</option>";
                    }
                } else {
                    echo "<option>No users available</option>";
                }
                ?>
            </select>

            <button type="submit" name="delete">Delete Selected Account</button>
        </form>

        <br>

        <a href="logout.php">
            <button type="button">Log Out</button>
        </a>
    </div>

    <?php require 'footer.php'; ?>

</body>
</html>
