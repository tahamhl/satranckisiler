<!DOCTYPE html>
<html>
<head>
    <title>Satranç Oyunu - Kayıt Ol</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Kayıt Ol</h1>
        <form action="register.php" method="POST">
            <div class="form-group">
                <label for="username">Kullanıcı Adı:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Şifre:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Kayıt Ol</button>
        </form>
    </div>
</body>
</html>


<?php
$servername = "localhost"; // Sunucu adı
$username = "root"; // Veritabanı kullanıcı adı
$password = ""; // Veritabanı şifre
$dbname = "satranckisiler"; // Veritabanı adı

// Veritabanı bağlantısını oluştur
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if (!$connection) {
    die("Veritabanı bağlantısı başarısız: " . mysqli_connect_error());
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kullanıcı adının veya şifrenin geçerli olup olmadığını kontrol et
    $query = "SELECT * FROM kullanicilar WHERE username = '$username'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 0) {
        // Kullanıcı adı geçerli ise kullanıcıyı kaydet ve oturum sayfasına yönlendir
        $insertQuery = "INSERT INTO kullanicilar (username, password) VALUES ('$username', '$password')";
        mysqli_query($connection, $insertQuery);

        // Oturumu başlat
        $_SESSION['username'] = $username;

        header("Location: game.php");
        exit();
    } else {
        // Kullanıcı adı geçerli değilse hata mesajı göster
        echo "Bu kullanıcı adı zaten kullanılıyor!";
    }
}
?>

