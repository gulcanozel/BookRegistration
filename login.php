<!DOCTYPE html>
<html>
<head>
    <title>Login Sayfası</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">

    <div class="content">
        <form action="login_process.php" method="post">
            <h2>Giriş Yap</h2>
            <label for="username">Kullanıcı Adı:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Şifre:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Giriş">
        </form>
    </div>
</div>

</body>
</html>
