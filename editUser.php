<?php 

require "DBO.php";
$idUser = isset($_GET['idUser']) ? $_GET['idUser'] : '';

if($idUser) {
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
    <title>Lesson 9-6 CodeStar</title>
    <link rel="stylesheet" href="learning.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div id="instruction">
        <h1>Update user</h1>
    </div>

    <div class="block">
        <form action="updateUserSuccess.php" method="post">
            <div class="title">Mã id</div>
            <input type="text" name="idUser" readonly value="<?= $user['id'] ?>" id="idUser">
            <div class="title">Name</div>
            <input type="text" name="name" value="<?= $user['name'] ?>" id="name" required placeholder="Enter your display name...">
            <div class="title">Username</div>
            <input type="text" name="username" id="username" value="<?= $user['username'] ?>" required placeholder="Enter your username...">
            <div class="title">Email address</div>
            <input type="email" name="email" id="email" value="<?= $user['email'] ?>" required placeholder="Enter your email...">
            <div class="title">Password</div>
            <input type="password" name="password" value="<?= $user['password'] ?>" id="password" placeholder="Enter your password...">
            <input type="submit" name="submit" value="Update" class="submit-button">
        </form>
        
        <div class="additional-text">
            <p>
                <a href="listUser.php">
                    Quay lại danh sách
                </a>
            </p>
        </div>
    </div>
</body>
</html>