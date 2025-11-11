<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GET Variable</title>
</head>
<body>
    <h1>Predefine Variable $_GET</h1>
    <?php
    if(isset($_GET['nama'])) {
        echo 'Selamat Datang ' . $_GET['nama'];
    } else {
        echo 'Silakan tambahkan parameter nama di URL, contoh: ?nama=Agung';
    }
    ?>
</body>
</html>