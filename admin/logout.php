<?php
setcookie("uname", "", time() - 3600);
header("location : /index.php");
?>