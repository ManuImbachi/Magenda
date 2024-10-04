<?php
session_start();
session_destroy();
header("Location: /MAGENDA_1/index.php");
exit();
?>