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


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];

    // Veritabanından belirli bir bilgiyi sil
    $deleteQuery = "DELETE FROM bilgiler WHERE id = '$id'";
    $result = mysqli_query($connection, $deleteQuery);

    if ($result) {
        // Silme işlemi başarılı ise ana oyun sayfasına yönlendir
        header("Location: game.php");
        exit();
    } else {
        // Silme işlemi başarısız ise hata mesajı göster
        echo "Bilgi silinemedi!";
    }
}
?>
