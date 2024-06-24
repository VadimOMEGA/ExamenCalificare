<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
</head>
<body>

    <?php 
        include('connection.php');
        // SQL query to select all data from the table
        $sql = "SELECT * FROM methodics";
        $result = $conn->query($sql);

        echo <<<TXT
            <table style="width: 80rem;">
                <tr>
                    <th style="border: 1px solid black; padding: 1rem;">ID</th>
                    <th style="border: 1px solid black; padding: 1rem;">image_url</th>
                    <th style="border: 1px solid black; padding: 1rem;">title</th>
                    <th style="border: 1px solid black; padding: 1rem;">text</th>
                    <th style="border: 1px solid black; padding: 1rem;">Acțiune</th>
                </tr>
        TXT;

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo <<<TXT

                    <tr>
                        <td style="border: 1px solid black; padding: 1rem;">{$row['id']}</td>
                        <td style="border: 1px solid black; padding: 1rem;">{$row['image_url']}</td>
                        <td style="border: 1px solid black; padding: 1rem;">{$row['title']}</td>
                        <td style="border: 1px solid black; padding: 1rem;">{$row['text']}</td>
                        <td style="border: 1px solid black; padding: 1rem;">
                            <a style="color: black;" href="edit.php?id={$row['id']}">Edit</a>
                            <a style="color: black;" href="delete.php?id={$row['id']}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                        </td>
                    </tr>

                TXT;
            }
        } else {
            echo "0 results";
        }

        echo "</table>";
        echo "<div style='margin-top: 2rem;'><a style='color: black;' href='create.php'>Adăugare înregistrare</a></div>";
        echo "<div style='margin-top: 2rem;'><a style='color: black;' href='index.php'>Acasă</a></div>";

        $conn->close();
    ?>

</body>
</html>