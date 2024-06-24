<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <script src="script.js?v=<?php echo time(); ?>" defer></script>
</head>
<body>

    <a href="crud.php">
        <div class="crud-btn"><span>CRUD</span></div>
    </a>

    <header>
        <nav>
            
        </nav>
    </header>

    <section id="section_id">
        <!-- <h1>Section Title</h1> -->

        <div class="carousel" id="carousel">
            <div class="carousel-container" id="carouselContainer">
                <?php
                    // include('connection.php');
                    // // SQL query to select all data from the table
                    // $sql = "SELECT * FROM methodics";
                    // $result = $conn->query($sql);

                    // if ($result->num_rows > 0) {
                    //     // Output data of each row
                    //     while($row = $result->fetch_assoc()) {
                    //         echo <<<TXT

                    //             <div class="carousel-item">
                    //                 <img src="{$row['image_url']}" alt="image" />
                    //                 <div class="carousel-item-text">
                    //                     <p class="carousel-item-title">{$row['title']}</p>
                    //                     <p class="carousel-item-description">{$row['text']}</p>
                    //                 </div>
                    //             </div>

                    //         TXT;
                    //     }
                    // } else {
                    //     echo "0 results";
                    // }

                    // $conn->close()
                ?>
            </div>
        </div>

        <div class="carousel-btns">
            <button id="leftArr">
                <img src="images/left-arrow.svg" alt="left-arr">
            </button>
            <button id="rightArr">
                <img style="rotate: 180deg" src="images/left-arrow.svg" alt="right-arr">
            </button>
        </div>
    </section>

    <section id="examples">
        
    </section>
</body>
</html>