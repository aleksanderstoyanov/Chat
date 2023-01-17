<?php 
    session_start();
    session_destroy();
    header("Location: /Chat/index.php");
?>