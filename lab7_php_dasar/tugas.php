<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input Data Diri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: inline-block;
            width: 150px;
        }
        input[type="text"], input[type="date"], select {
            padding: 5px;
            width: 200px;
        }
        input[type="submit"] {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .output {
            margin-top: 20px;
            padding: 20px;
            background-color: #f0f0f0;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h2>Form Input Data Diri</h2>
    <form method="post">
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" required>
        </div>
        <div class="form-group">
            <label>Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" required>
        </div>
        <div class="form-group">
            <label>Pekerjaan:</label>
            <select name="pekerjaan" required>
                <option value="">-- Pilih Pekerjaan --</option>
                <option value="Freelance">Freelance</option>
                <option value="Budak Korporat">Budak Korporat</option>
                <option value="Barista">Barista</option>
                <option value="Pengangguran">Pengangguran</option>
            </select>
        </div>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $pekerjaan = $_POST['pekerjaan'];
        
        // Menghitung umur
        $tanggal_lahir_obj = new DateTime($tanggal_lahir);
        $sekarang = new DateTime();
        $umur = $sekarang->diff($tanggal_lahir_obj)->y;
        
        // Menentukan gaji berdasarkan pekerjaan
        $gaji = 0;
        switch($pekerjaan) {
            case "Freelance":
                $gaji = 15000000;
                break;
            case "Budak Korporat":
                $gaji = 4000000;
                break;
            case "Barista":
                $gaji = 3500000;
                break;
            case "Pengangguran":
                $gaji = 0;
                break;
        }
        
        echo "<div class='output'>";
        echo "<h3>Output Data:</h3>";
        echo "Nama: <strong>$nama</strong><br>";
        echo "Tanggal Lahir: <strong>$tanggal_lahir</strong><br>";
        echo "Umur: <strong>$umur tahun</strong><br>";
        echo "Pekerjaan: <strong>$pekerjaan</strong><br>";
        echo "Gaji: <strong>Rp " . number_format($gaji, 0, ',', '.') . "</strong><br>";
        echo "</div>";
    }
    ?>
</body>
</html>