<?php


try {
    $conn = new mysqli('localhost', 'root', '', 'ali_db');

    if (isset($_POST['username'])) {

        $user = $_POST['username'];
        $conn->query("INSERT INTO `user`(`username`, `password`) VALUES ('$user','123')");
    }
} catch (\Throwable $th) {
    echo $th->getMessage();
}
?>

<form action="" method="post">
    <input type="text" name="username">
    <br>
    <button>submit</button>
</form>