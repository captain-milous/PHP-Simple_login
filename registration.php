<?php
 include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Simple Registration</title>
    <link rel="stylesheet" href="style.css" type="text/css">

</head>
<body>

    <div id="form">
        <h1>Registrace</h1>
        <form name="form" action="register.php" method="POST">
            <label>Email: </label>
            <input type="email" id="user" name="user">
            <br><br>
            <label>Heslo: </label>
            <input type="password" id="pass" name="pass">
            <br><br>
            <label>Znovu: </label>
            <input type="password" id="pass2" name="pass2">
            <br><br>
            <input type="submit" id="btn" value="Registrovat se" name="submit">
        </form>
        <br>
        <small><a href="index.php">Zpět na přihlášení.</a></small>
    </div>

</body>
</html>