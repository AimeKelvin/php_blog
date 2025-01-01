<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/globals.css">
    <title>Home</title>
</head>
<body>

<header>
    <h1>Welcome to My Blog</h1>
</header>

<div class="container">
    <?php 
    include('connect.php');

    $query1 = "SELECT * FROM posts ORDER BY date DESC"; // Fetch blogs in reverse order
    $result = mysqli_query($conn, $query1);

    // Check if there are any posts
    if (mysqli_num_rows($result) > 0) {
        while ($data = mysqli_fetch_assoc($result)) {
            // Display each post
            ?>
            <div class="post">
                <!-- Blog Image -->
                
                    <img src="<?php echo $data['postImage']; ?>" alt="image" class="post-image">
               

                <!-- Blog Title -->
                <h3><?php echo $data['title']; ?></h3>

                <!-- Blog Date -->
                <p class="date"><?php echo $data['date']; ?></p>

                <!-- Blog Content -->
                <p><?php echo nl2br($data['content']); ?></p>
            </div>
            <?php
        }
    } else {
        echo "<p>No blog posts available.</p>";
    }
    ?>
</div>

<footer>
    <p>&copy; 2025 My Blog | All Rights Reserved</p>
</footer>

</body>
</html>
c