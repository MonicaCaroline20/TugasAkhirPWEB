<?php
session_destroy();
header('Location: ' . BASEURL . '/?controller=LoginUser'); 
exit();
?>
