<!DOCTYPE html>
<html>
<head>
    <title>Satranç Oyunu - Oyun Sayfası</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Oyun Sayfası</h1>
        <a href="add_info.php" class="btn btn-primary">Bilgi Ekle</a>
        <h2>Girilen Bilgiler</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Bilgi</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <!-- Burada veritabanından çekilen bilgileri döngü ile listeleyebilirsiniz -->
                <tr>
                    <td>1</td>
                    <td>Şah'ı güvenli pozisyona sokamazsan oyun biter. (ŞAHMAT)</td>
                    <td>
                        <a href="edit_info.php?id=1" class="btn btn-sm btn-primary">Düzenle</a>
                        <a href="delete_info.php?id=1" class="btn btn-sm btn-danger">Sil</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Atlar L şeklinde hareket eder. </td>
                    <td>
                        <a href="edit_info.php?id=2" class="btn btn-sm btn-primary">Düzenle</a>
                        <a href="delete_info.php?id=2" class="btn btn-sm btn-danger">Sil</a>
                    </td>
                </tr>
                <!-- Liste burada sonlanır -->
            </tbody>
        </table>
    </div>
</body>
</html>
