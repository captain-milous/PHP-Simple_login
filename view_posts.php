<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

$mysqli = new mysqli("localhost", "root", "", "blog_db");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Získání všech příspěvků
$query = "SELECT posts.id, posts.title, posts.content, users.username FROM posts INNER JOIN users ON posts.user_id = users.id";
$result = $mysqli->query($query);

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Muj Blog</title>
    <link rel="stylesheet" href="style.css" type="text/css">

</head>
<body>

    <div id="prispevky">

        <h1>Všechny Příspěvky</h1>
        <a href="create_post.php">Přidat nový příspěvek</a>
        <form method="post" action="">
            <input type="submit" name="logout" value="Odhlásit">
        </form>
        <?php while ($row = $result->fetch_assoc()): ?>
            <div>
                <h2><?php echo $row['title']; ?></h2>
                <p><?php echo $row['content']; ?></p>
                <p>Autor: <?php echo $row['username']; ?></p>
            </div>
        <?php endwhile; ?>
        
    </div>

</body>
</html>