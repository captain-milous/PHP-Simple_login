<?php
    include("connect.php");

    $check_stmt = $mysqli->prepare("SELECT id FROM users WHERE username = ?");
    $check_stmt->bind_param("s", $username);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        echo "<script>
            window.location.href = "registration.php";
            alert(Uživatelské jméno již existuje. Zvolte prosím jiné.);
        </script>";
    } else {
        if(isset($_POST["submit"])) {
            if($_POST['pass'] == $_POST['pass2']) {
                
                $stmt = $mysqli->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
                $stmt->bind_param("ss", $username, $password);
                $stmt->execute();
                $stmt->close();
                echo '<script> 
                    window.location.href = "index.php";
                    alert("Registrace byla úspěšná. Prosím přihlašte se.");
                </script>';
            } else {
                echo '<script>
                    window.location.href = "registration.php";
                    alert("Hesla se neshodují.");
                </script>';
            }
        }
    }
?>