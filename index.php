<!DOCTYPE html>
<html>
<head>
    <title>Satranç Oyunu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Satranç Oyunu</h1>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="username">Kullanıcı Adı:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Şifre:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Giriş</button>
            <a href="register.php" class="btn btn-link">Kayıt Ol</a>
        </form>
    </div>
</body>
</html>
