<?php
session_start();
/*
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}*/

if (isset($_POST['create_post'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    include("connect.php");

    $stmt = $conn->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
    $stmt->bind_param("ss", $title, $content);
    $stmt->execute();
    $stmt->close();

    echo "<script>consloe.log(Příspěvek byl úspěšně vytvořen.);</script>";
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
        <h1>Vytvořit Příspěvek</h1>
        <form method="post" action="">
            <input type="text" name="title" placeholder="Název" required>
            <br><br>
            <textarea name="content" placeholder="Obsah" required></textarea>
            <br>
            <input type="submit" name="create_post" value="Vytvořit Příspěvek">
        </form>
        <br>
        <small><a href="view_posts.php">Zpět</a></small>
    </div>
</body>
</html>