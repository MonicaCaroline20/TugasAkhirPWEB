<?php
if (!isset($_SESSION['admin_id'])) {
    error_log("Session not set, redirecting to login.");
    header('location: ' . BASEURL . '/?controller=LoginAdmin');
    exit();
}
?>
