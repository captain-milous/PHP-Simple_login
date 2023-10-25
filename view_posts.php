<?php
session_start();
/*
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}*/

include("connect.php");

// Získání všech příspěvků
$query = "SELECT posts.id, posts.title, posts.content FROM posts";
$result = $conn->query($query);

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

    <div id="form">

        <h1>Všechny Příspěvky</h1>
        <button>
            <a href="create_post.php">Nový příspěvek</a>
        </button>
        <form method="post" action="">
            <input type="submit" name="logout" value="Odhlásit">
        </form>
        <?php while ($row = $result->fetch_assoc()): ?>
            <div>
                <h2><?php echo $row['title']; ?></h2>
                <p><?php echo $row['content']; ?></p>
            </div>
        <?php endwhile; ?>
        
    </div>

</body>
</html>