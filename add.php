<?php include 'db.php'; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $year = $_POST['release_year'];
    $desc = $_POST['description'];
    $image = $_POST['image_url'];
    $conn->query("INSERT INTO movies (title, genre, release_year, description, image_url)
                  VALUES ('$title', '$genre', '$year', '$desc', '$image')");
    header("Location: index.php");
}
?>
<form method="POST">
    <input name="title" placeholder="Title" required><br>
    <input name="genre" placeholder="Genre"><br>
    <input name="release_year" placeholder="Year"><br>
    <textarea name="description" placeholder="Description"></textarea><br>
    <input name="image_url" placeholder="Image URL"><br>
    <button type="submit">Add Movie</button>
</form>