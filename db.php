<?php
$con= new mysqli('localhost','root','','shashikant');  //modify in index.php line no 275
if(!$con){
    die("error ".$con->error);
}