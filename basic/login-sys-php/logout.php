<?php
session_start();

// Remove all session variables
session_unset();

// Destroy the session
session_destroy();

// Optionally, clear the theme cookie by setting expiry in the past
setcookie('theme', '', time() - 3600);

header('Location: login.php');
exit;
