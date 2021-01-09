<?php
    session_start();
    session_destroy();
    session_start();
    $_SESSION['temp'] = FALSE;
    header("location:./index.php");
?>