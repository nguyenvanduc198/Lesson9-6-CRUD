<?php

require "DBO.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password =$_POST['password'];
    $idUser = $_POST['idUser'];
    $update_at = date("Y-m-d H:i:s");
}
$sql = "UPDATE user SET username = ?,name = ?, email= ?, password = ?, updatedAt = ? WHERE id = ?";
$data = array($username, $name, $email, $password, $update_at, $idUser);
$idUser = executeQueryPrepare($sql, $data);

if(!$idUser) {
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 9-6 CodeStar</title>
    <link rel="stylesheet" href="learning.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div id="instruction">
        <h1>Update user thành công !!!</h1>
    </div>

    <div class="block">
        <div class="additional-text">
            <a href="listUser.php">Quay lại danh sách user</a>
        </div>
    </div>
</body>
</html>