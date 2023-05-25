
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

    // Kullanıcının giriş bilgilerini doğrula
    $query = "SELECT * FROM kullanicilar WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
        // Doğrulama başarılı ise oturumu başlat ve ana oyun sayfasına yönlendir
        $_SESSION['username'] = $username;
        header("Location: game.php");
        exit();
    } else {
        // Doğrulama başarısız ise hata mesajı göster
        echo "Kullanıcı adı veya şifre hatalı!";
    }
}
?>

