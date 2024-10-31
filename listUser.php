<?php

require "DBO.php";
$sql = "SELECT * FROM  user";
$listUsers = getData($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー一覧</title>
    <link rel="stylesheet" href="learning.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div id="instruction">
        <h1>ユーザー一覧</h1>
    </div>

    <div class="block">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">レコード id</th>
                    <th scope="col">お名前</th>
                    <th scope="col">ユーザー名</th>
                    <th scope="col">電話番号</th>
                    <th scope="col">メールアドレス</th>
                    <th scope="col">住所</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    foreach ($listUsers as $user) {
                        $id = $user['id'];
                        $username = $user['username'];
                        $name = $user['name'];
                        $phonenumber = $user['phonenum'];
                        $email = $user['email'];
                        $useraddress = $user['address'];
                        echo "<tr>";
                        echo "<th scope='row'>$id</th>";
                        echo "<td>$name</td>";
                        echo "<td>$username</td>";
                        echo "<td>$phonenumber</td>";
                        echo "<td>$email</td>";
                        echo "<td>$useraddress</td>";
                        echo "<td>
                        <a href='deleteUser.php?idUser=$id'>削除する</a>
                        <a href='editUser.php?idUser=$id'>編集する</a>
                        </td>";
                        echo "</tr>";
                    }
                    ?>
            </tbody>
        </table>
    </div>
    <div id="instruction">
        <h1>
            <a href="addUser.php">新しいユーザーを追加する</a>
        </h1>
    </div>
</body>

</html>