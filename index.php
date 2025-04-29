<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Netflix Clone</title>
    <style>
        body { font-family: Arial; background: #141414; color: #fff; }
        .container { display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 20px; padding: 20px; }
        .card { background: #222; padding: 15px; border-radius: 10px; }
        .card img { width: 100%; height: 250px; object-fit: cover; border-radius: 5px; }
        .actions a { color: #fff; margin: 0 5px; text-decoration: none; }
        .add { margin: 20px; display: inline-block; background: red; padding: 10px 20px; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <h1 style="padding: 20px;">Netflix Clone</h1>
    <a class="add" href="add.php">+ Add Movie</a>
    <div class="container">
        <?php
        $result = $conn->query("SELECT * FROM movies");
        while($row = $result->fetch_assoc()) {
            echo "<div class='card'>
                    <img src='{$row['image_url']}' />
                    <h3>{$row['title']} ({$row['release_year']})</h3>
                    <p>{$row['genre']}</p>
                    <div class='actions'>
                        <a href='update.php?id={$row['id']}'>Edit</a>
                        <a href='delete.php?id={$row['id']}'>Delete</a>
                    </div>
                  </div>";
        }
        ?>
    </div>
</body>
</html>