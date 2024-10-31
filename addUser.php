<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新しいユーザーを追加する</title>
    <link rel="stylesheet" href="learning.css">
    <script src="customize.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const phoneInput = document.getElementById('phonenum');

            phoneInput.addEventListener('input', function() {
                // Loại bỏ các ký tự không phải là số
                phoneInput.value = phoneInput.value.replace(/[^0-9]/g, '');

                // Giới hạn đầu vào tối đa 10 ký tự
                if (phoneInput.value.length > 10) {
                    phoneInput.value = phoneInput.value.slice(0, 10);
                }
            });
        });
    </script> -->
    <div id="instruction">
        <h1>新しいユーザーを追加する</h1>
    </div>

    <div class="block">
        <form action="addUserSuccess.php" method="post">
            <div class="title">お名前</div>
            <input type="text" name="name" id="name" required placeholder="Enter your display name...">
            <div class="title">ユーザー名</div>
            <input type="text" name="username" id="username" required placeholder="Enter your username...">
            <div class="title">電話番号</div>
            <input type="text" name="phonenum" pattern="[0-9]{10}" maxlength="10" id="phonenum" required placeholder="Enter your phone number...">
            <div class="title">メールアドレス</div>
            <input type="text" name="email" id="email" required placeholder="Enter your email...">
            <div class="title">住所</div>
            <input type="text" name="address" id="address" placeholder="Enter your address...">
            <div class="title">パスワード</div>
            <input type="password" name="password" id="password" placeholder="Enter your password...">
            <input type="submit" value="新規追加" class="submit-button">
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