<!DOCTYPE html>
<html>
<head>
    <title>Satranç Oyunu - Bilgi Ekle</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Bilgi Ekle</h1>
        <form action="save_info.php" method="POST">
            <div class="form-group">
                <label for="info">Bilgi:</label>
                <input type="text" class="form-control" id="info" name="info" required>
            </div>
            <button type="submit" class="btn btn-primary">Kaydet</button>
        </form>
    </div>
</body>
</html>
