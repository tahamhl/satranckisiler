<!DOCTYPE html>
<html>
<head>
    <title>Satranç Oyunu - Bilgi Düzenle</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Bilgi Düzenle</h1>
        <form action="update_info.php" method="POST">
            <div class="form-group">
                <label for="info">Bilgi:</label>
                <input type="text" class="form-control" id="info" name="info" required>
            </div>
            <button type="submit" class="btn btn-primary">Güncelle</button>
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


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];

    // Veritabanından belirli bir bilgiyi getir
    $query = "SELECT * FROM bilgiler WHERE id = '$id'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $info = $row['info'];

        // Bilgiyi formda göster
        echo '
        <!DOCTYPE html>
        <html>
        <head>
            <title>Satranç Oyunu - Bilgi Düzenle</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        </head>
        <body>
            <div class="container">
                <h1>Bilgi Düzenle</h1>
                <form action="update_info.php" method="POST">
                    <div class="form-group">
                        <label for="info">Bilgi:</label>
                        <input type="text" class="form-control" id="info" name="info" value="'.$info.'" required>
                    </div>
                    <input type="hidden" name="id" value="'.$id.'">
                    <button type="submit" class="btn btn-primary">Güncelle</button>
                </form>
            </div>
        </body>
        </html>
        ';
    } else {
        // Belirtilen bilgi bulunamadıysa hata mesajı göster veya yönlendir
        echo "Bilgi bulunamadı!";
    }
}
?>
