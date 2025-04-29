<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
$movie = $conn->query("SELECT * FROM movies WHERE id=$id")->fetch_assoc();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $year = $_POST['release_year'];
    $desc = $_POST['description'];
    $image = $_POST['image_url'];
    $conn->query("UPDATE movies SET title='$title', genre='$genre', release_year='$year', description='$desc', image_url='$image' WHERE id=$id");
    header("Location: index.php");
}
?>
<form method="POST">
    <input name="title" value="<?= $movie['title'] ?>"><br>
    <input name="genre" value="<?= $movie['genre'] ?>"><br>
    <input name="release_year" value="<?= $movie['release_year'] ?>"><br>
    <textarea name="description"><?= $movie['description'] ?></textarea><br>
    <input name="image_url" value="<?= $movie['image_url'] ?>"><br>
    <button type="submit">Update</button>
</form>