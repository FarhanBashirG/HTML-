<?php

try {
    //code...
    $conn = new mysqli('localhost', 'root', '', 'lms_database');

    $conn->query("SELECT * FROM `users` WHERE 1");

    echo '<pre>';
    print_r($conn);

    if(isset($_POST['username'])){
        $user = $_POST['username'];
        $conn->query("INSERT INTO `users`(`username`, `password`) VALUES ('$user','123')");
    }
    

} catch (\Throwable $th) {
    echo $th->getMessage();
}
?>

<form action="" method="post">
    <input type="text" name="username">
    <br>
    <input type="submit">
</form>