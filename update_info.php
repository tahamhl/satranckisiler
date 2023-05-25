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
    $kullanicilar = $_POST['id'];
    $info = $_POST['info'];

    // Veritabanında belirli bir bilgiyi güncelle
    $updateQuery = "UPDATE bilgiler SET info = '$info' WHERE id = '$id'";
    $result = mysqli_query($connection, $updateQuery);

    if ($result) {
        // Güncelleme işlemi başarılı ise ana oyun sayfasına yönlendir
        header("Location: game.php");
        exit();
    } else {
        // Güncelleme işlemi başarısız ise hata mesajı göster
        echo "Bilgi güncellenemedi!";
    }
}
?>
