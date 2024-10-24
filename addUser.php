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
        <h1>Thêm mới user</h1>
    </div>

    <div class="block">
        <form action="addUserSuccess.php" method="post">
            <div class="title">Name</div>
            <input type="text" name="name" id="name" required placeholder="Enter your display name...">
            <div class="title">Username</div>
            <input type="text" name="username" id="username" required placeholder="Enter your username...">
            <div class="title">Email address</div>
            <input type="email" name="email" id="email" required placeholder="Enter your email...">
            <div class="title">Password</div>
            <input type="password" name="password" id="password" placeholder="Enter your password...">
            <input type="submit" value="Thêm mới" class="submit-button">
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