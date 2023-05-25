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
    $info = $_POST['info'];

    // Veritabanına bilgiyi kaydet
    $insertQuery = "INSERT INTO bilgiler (info) VALUES ('$info')";
    $result = mysqli_query($connection, $insertQuery);

    if ($result) {
        // Kaydetme işlemi başarılı ise ana oyun sayfasına yönlendir
        header("Location: game.php");
        exit();
    } else {
        // Kaydetme işlemi başarısız ise hata mesajı göster
        echo "Bilgi kaydedilemedi!";
    }
}
?>
