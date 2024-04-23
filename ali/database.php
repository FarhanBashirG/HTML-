<?php

$yourname = $_POST['yourname'];
$youremail = $_POST['youremail'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$conn = new mysqli('localhost', 'root', '', 'alley_db');
if ($conn->connect_error) {
    die('Connection Failed :' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into users(yourname,youremail,password,cpassword) values(?,?,?,?)");
    $stmt->bind_param("ssss", $yourname, $youremail, $password, $cpassword);
    $stmt->execute();
    echo "registration successfully ...";
    $stmt->close();
    $conn->close();

}
?>