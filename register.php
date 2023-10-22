<?php
    include("connect.php");
    if(isset($_POST["submit"])) {
        if($_POST['pass'] == $_POST['pass2']) {
            echo '<script> document.getElementById("msg").innerHTML = "Registrace zatím nefunguje";</script>';
            header("Location: welcome.php");
        } else {
            echo '<script>
                window.location.href = "registration.php";
                alert("Hesla se neshodují.");
            </script>';
        }
    }
?>