<?php
    include("connect.php");
    if(isset($_POST["submit"])) {
        if($_POST['pass'] == $_POST['pass2']) {
            echo '<script> 
                window.location.href = "index.php";
                alert("Registrace zatím nefunguje xD. Prosím použijte stránku pro přihlášení.");
            </script>';
        } else {
            echo '<script>
                window.location.href = "registration.php";
                alert("Hesla se neshodují.");
            </script>';
        }
    }
?>