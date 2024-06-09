<?php
if (!isset($_SESSION['user_id'])) {
    error_log("Session not set, redirecting to login.");
    header('location: ' . BASEURL . '/?controller=LoginUser');
    exit();
}
?>
