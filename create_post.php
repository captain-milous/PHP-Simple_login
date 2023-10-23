<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

if (isset($_POST['create_post'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $user_id = $_SESSION['user_id'];

    $mysqli = new mysqli("localhost", "root", "", "blog_db");

    $stmt = $mysqli->prepare("INSERT INTO posts (title, content, user_id) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $title, $content, $user_id);
    $stmt->execute();
    $stmt->close();

    echo "Příspěvek byl úspěšně vytvořen.";
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
    <h1>Vytvořit Příspěvek</h1>
    <form method="post" action="">
        <input type="text" name="title" placeholder="Název" required>
        <textarea name="content" placeholder="Obsah" required></textarea>
        <input type="submit" name="create_post" value="Vytvořit Příspěvek">
    </form>
</body>
</html>