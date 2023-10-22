<?php
 include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Simple Login</title>
    <link rel="stylesheet" href="style.css" type="text/css">

</head>
<body>

    <div id="form">
        <h1>Přihlášení</h1>
        <br>
        <form name="form" action="login.php" method="POST">
            <label>Email: </label>
            <input type="email" id="user" name="user">
            <br><br>
            <label>Heslo: </label>
            <input type="password" id="pass" name="pass">
            <br><br>
            <input type="submit" id="btn" value="Přihlásit se" name="submit">
        </form>
        <br><br>
        <small>Nemáte účet? <a href="registration.php">Registrujte se</a></small>
    </div>

</body>
</html>