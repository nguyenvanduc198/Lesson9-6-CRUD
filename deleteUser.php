<?php

require "DBO.php";

$idUser = isset($_GET['idUser']) ? $_GET['idUser'] : '';

if ($idUser) {
    $sql = "DELETE FROM user WHERE id = ?";
    $result = executeQueryPrepare($sql, array($idUser));
} else {
    header('Location: listUser.php');
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
        <h1>Xóa user thành công !!!</h1>
    </div>

    <div class="block">
        
        <div class="additional-text">
            <a href="listUser.php">Quay lại danh sách user</a>
        </div>
    </div>
</body>
</html>