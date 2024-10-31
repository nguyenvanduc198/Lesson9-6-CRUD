<?php

require "DBO.php";

$username = isset($_REQUEST['username']) ? $_REQUEST['username'] : 'N/A';
$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : 'N/A';
$phonenum = isset($_REQUEST['phonenum']) ? $_REQUEST['phonenum'] : 'N/A';
$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : 'N/A';
$address = isset($_REQUEST['address']) ? $_REQUEST['address'] : 'N/A';
$password = isset($_REQUEST['password']) ? md5($_REQUEST['password']) : '';
$create_at = date("Y-m-d H:i:s");

$sql = "INSERT INTO User (username, name, phonenum, email, address, password, createdAt) VALUES (? ,? , ? , ? , ? , ? , ?)";
$data = array($username, $name, $phonenum, $email, $address, $password, $create_at);
$idUser = executeQueryPrepare($sql, $data);

if (!$idUser) {
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
        <h1>Thêm user thành công !!!</h1>
    </div>

    <div class="block">

        <div class="additional-text">
            <a href="listUser.php">Quay lại danh sách user</a>
        </div>
    </div>
</body>

</html>