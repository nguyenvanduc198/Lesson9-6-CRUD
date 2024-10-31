<?php

require "DBO.php";
$idUser = isset($_GET['idUser']) ? $_GET['idUser'] : '';

if ($idUser) {
    $sql = "SELECT * FROM  user where id = ?";
    $user = getDataSecure($sql, array($idUser), false);
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
    <title>ユーザーの更新</title>
    <link rel="stylesheet" href="learning.css">
    <script src="customize.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div id="instruction">
        <h1>ユーザーの更新</h1>
    </div>

    <div class="block">
        <form action="updateUserSuccess.php" method="post">
            <div class="title">レコード id</div>
            <input type="text" name="idUser" readonly value="<?= $user['id'] ?>" id="idUser">
            <div class="title">お名前</div>
            <input type="text" name="name" value="<?= $user['name'] ?>" id="name" required placeholder="Enter your display name...">
            <div class="title">ユーザー名</div>
            <input type="text" name="username" id="username" value="<?= $user['username'] ?>" required placeholder="Enter your username...">
            <div class="title">電話番号</div>
            <input type="text" name="phonenum" pattern="[0-9]{10}" maxlength="10" id="phonenum" required placeholder="Enter your phone number...">
            <div class="title">メールアドレス</div>
            <input type="email" name="email" id="email" value="<?= $user['email'] ?>" required placeholder="Enter your email...">
            <div class="title">住所</div>
            <input type="text" name="address" id="email" value="<?= $user['address'] ?>" required placeholder="Enter your address">
            <div class="title">パスワード</div>
            <input type="password" name="password" value="<?= $user['password'] ?>" id="password" placeholder="Enter your password...">
            <input type="submit" name="submit" value="アップデート" class="submit-button">
        </form>

        <div class="additional-text">
            <p>
                <a href="listUser.php">
                    一覧に戻る
                </a>
            </p>
        </div>
    </div>
</body>

</html>