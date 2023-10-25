<?php
    include("connect.php");
    if(isset($_POST["submit"])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "select * from users where email = '$username' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1) {
            /*echo '<script>
                window.location.href = "view_posts.php";
                alert("Úspěšne přihlášen!");
            </script>';*/
            header("Location: view_posts.php");
        } else {
            
            echo '<script>
                window.location.href = "index.php";
                alert("Špatné přihlašovací údaje.");
            </script>';
        }
    }
?>