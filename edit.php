<?php
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $image_url = $_POST['image_url'];
    $title = $_POST['title'];
    $text = $_POST['text'];

    $sql = "UPDATE methodics SET image_url = ?, title = ?, text = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $image_url, $title, $text, $id);

    if ($stmt->execute()) {
        header("Location: crud.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM methodics WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $item = $result->fetch_assoc();
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item</title>
</head>
<body>
    <h2>Edit Item</h2>
    <form style="display: grid; grid-template-columns: 1fr, 1fr; width: 40rem" method="post" action="edit.php">
        <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
        Image URL: <input type="text" name="image_url" value="<?php echo $item['image_url']; ?>"><br>
        Title: <input type="text" name="title" value="<?php echo $item['title']; ?>"><br>
        Text: <textarea style="resize: none; height: 10rem;" name="text"><?php echo $item['text']; ?></textarea><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>