<?php
session_start();
session_unset();
session_destroy();

header('Location: http://localhost/000/techfest/event_heads/login.php');
?>