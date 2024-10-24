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
    <title>Lesson 9-6 CodeStar</title>
    <link rel="stylesheet" href="learning.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div id="instruction">
        <h1>
             <a href="addUser.php">Thêm mới user</a>
        </h1> 
    </div>

    <div class="block">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php 
                    foreach($listUsers as $user) {
                        $id = $user['id'];
                        $username = $user['username'];
                        $name = $user['name'];
                        $email = $user['email'];
                        echo "<tr>";
                        echo "<th scope='row'>$id</th>";
                        echo "<td>$name</td>";
                        echo "<td>$username</td>";
                        echo "<td>$email</td>";
                        echo "<td>
                        <a href='deleteUser.php?idUser=$id'>Xóa</a>
                        <a href='editUser.php?idUser=$id'>Sửa</a>
                        </td>";
                        echo "</tr>";
                    }
                ?>
        </tbody>
        </table>
    </div>
</body>
</html>