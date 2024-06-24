<?php
require_once 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $image_url = $_POST['image_url'];
    $title = $_POST['title'];
    $text = $_POST['text'];

    $sql = "INSERT INTO methodics (image_url, title, text) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $image_url, $title, $text);

    if ($stmt->execute()) {
        header("Location: crud.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Item</title>
</head>
<body>
    <h2>Create New Item</h2>
    <form style="display: grid; grid-template-columns: 1fr, 1fr; width: 40rem" method="post" action="create.php">
        Image URL: <input type="text" name="image_url" required><br>
        Title: <input type="text" name="title" required><br>
        Text: <textarea name="text" required></textarea><br>
        <input type="submit" value="Create">
    </form>
</body>
</html>