<?php
$ip = $_SERVER["REMOTE_ADDR"];
include("db.php");
$pid= $_REQUEST["pid"] ?? 0;
if($con->query("SELECT * FROM likes where ip='$ip' and pid=$pid")->fetch_assoc()){
    $con->query("DELETE FROM likes WHERE  ip='$ip' and pid=$pid");
    echo "color:white";
}else{
    $con->query("INSERT INTO likes (pid, ip) VALUES ($pid, '$ip')");
    echo "color:red";
}
?>