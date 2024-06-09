<?php
session_destroy();
header('Location: ' . BASEURL . '/?controller=LoginAdmin'); 
exit();
?>
