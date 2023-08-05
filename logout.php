<?php
    session_start();
    unset($_SESSION["userid"]);
    echo("<script>
        alert('Logout complete');
        location.href= 'index.php';
        </script>
    ");
?>