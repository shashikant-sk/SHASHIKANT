<?php
include("db.php");
$pid= $_REQUEST["pid"] ?? 0;
echo $con->query("SELECT * FROM likes where pid=$pid")->num_rows;
?>