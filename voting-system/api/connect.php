<?php

$conn = new mysqli('localhost', 'root', '', 'voting')or die("connection failed!");

if($conn){
    echo "connected!";
}else{
    echo "Not connectd!";
}

?>