<?php
session_destroy();
header('location:index.php');
ob_end_flush();

?>