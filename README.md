# Praktikum 7: PHP Dasar

Repository ini berisi hasil praktikum pemrograman web dengan PHP Dasar

## Informasi
- **Nama**: Abdi Putra Perdana
- **NIM**: 312410426
- **Kelas**: TI 24 A3
- **Mata Kuliah**: Pemrograman Web

## Tujuan Praktikum
1. Memahami konsep dasar Server Side Scripting
2. Memahami dasar Pemrograman PHP
3. Memahami Variable dan Tipe Data pada PHP
4. Memahami konsep Struktur Kondisi dan Perulangan
5. Membuat program PHP sederhana

## Persiapan
### Install XAMPP
1. Download XAMPP dari https://www.apachefriends.org/download.html
2. Install XAMPP di komputer
3. Jalankan Apache dari XAMPP Control Panel

### Membuat Folder Praktikum
1. Buka folder `htdocs` di direktori XAMPP (misalnya: `C:\xampp\htdocs\`)
2. Buat folder baru dengan nama `lab7_php_dasar`

---

## Langkah Praktikum

### 1. PHP Dasar
**File**: `php_dasar.php`

Program sederhana untuk menampilkan "Hello World" menggunakan PHP.

```php
<?php
echo "Hello World";
?>
```

**Screenshot:**
<img width="1919" height="1007" alt="image" src="https://github.com/user-attachments/assets/0b691b0b-1f2c-4c27-84a2-11bfa75bd912" />


**Cara Akses:**
```
http://localhost/lab7_php_dasar/php_dasar.php
```

**Penjelasan:**
- Tag `<?php ?>` digunakan untuk menulis kode PHP
- Fungsi `echo` digunakan untuk menampilkan output ke browser

---

### 2. Variable PHP
**File**: `latihan1.php`

Program untuk mendeklarasikan dan menampilkan variable.

```php
<h1>Variable PHP</h1>
    <?php
    $nim = "312410426";
    $nama = 'Abdi Putra Perdana';
    echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama";
    ?>
```

**Screenshot:**
<img width="1919" height="1002" alt="image" src="https://github.com/user-attachments/assets/9488b050-394b-49dc-959a-95d9fbf5c5cd" />


**Penjelasan:**
- Variable di PHP diawali dengan tanda `$`
- String dapat menggunakan tanda kutip satu (`'`) atau dua (`"`)
- Operator `.` digunakan untuk konkatenasi string
- Tag `<br>` untuk membuat baris baru

---

### 3. Predefine Variable $_GET
**File**: `latihan2.php`

Program untuk mengambil data dari URL menggunakan method GET.

```php
<?php
echo 'Selamat Datang ' . $_GET['nama'];
?>
```

**Screenshot:**
<img width="1914" height="1009" alt="image" src="https://github.com/user-attachments/assets/bd32718f-d218-4eef-8715-987483139922" />


**Cara Akses:**
```
http://localhost/lab7_php_dasar/latihan2.php?nama=Agung
```

**Penjelasan:**
- `$_GET` adalah variabel superglobal untuk mengambil data dari URL
- Parameter dikirim melalui URL dengan format `?key=value`
- Data yang dikirim akan ditampilkan di halaman

---

### 4. Form Input
**File**: `latihan3.php`

Program untuk membuat form input dan menampilkan data menggunakan method POST.

```php
<form method="post">
    <label>Nama: </label>
    <input type="text" name="nama">
    <input type="submit" value="Kirim">
</form>
<?php
if(isset($_POST['nama'])) {
    echo 'Selamat Datang ' . $_POST['nama'];
}
?>
```

**Screenshot:**
<img width="1919" height="1003" alt="image" src="https://github.com/user-attachments/assets/442190d0-4dc4-4f49-9247-922c5344358e" />

**Penjelasan:**
- Form menggunakan method POST untuk mengirim data
- `$_POST` digunakan untuk mengambil data dari form
- `isset()` untuk mengecek apakah variable sudah di-set

---

### 5. Operator
**File**: `latihan4.php`

Program untuk menghitung gaji setelah dipotong pajak.

```php
<?php
$gaji = 1000000;
$pajak = 0.1;
$thp = $gaji - ($gaji*$pajak);
echo "Gaji sebelum pajak = Rp. $gaji <br>";
echo "Gaji yang dibawa pulang = Rp. $thp";
?>
```

**Screenshot:**
<img width="1907" height="1008" alt="image" src="https://github.com/user-attachments/assets/cb68f542-99e5-4c9c-8196-de13bfb350d1" />


**Penjelasan:**
- Operator aritmatika: `+`, `-`, `*`, `/`
- Variabel dapat digunakan dalam operasi matematika
- Hasil perhitungan disimpan dalam variabel baru

---

### 6. Kondisi IF
**File**: `latihan5.php`

Program untuk menampilkan nama hari menggunakan struktur kondisi IF.

```php
<?php
$nama_hari = date("l");
if ($nama_hari == "Sunday") {
    echo "Minggu";
} elseif ($nama_hari == "Monday") {
    echo "Senin";
} else {
    echo "Selasa";
}
?>
```

**Screenshot:**
<img width="1912" height="996" alt="image" src="https://github.com/user-attachments/assets/85670caa-5718-4e77-8a3a-88bf209f0a52" />


**Penjelasan:**
- `date("l")` mengambil nama hari dalam bahasa Inggris
- Struktur IF-ELSEIF-ELSE untuk kondisi bercabang
- Operator `==` untuk membandingkan nilai

---

### 7. Kondisi Switch
**File**: `latihan6.php`

Program untuk menampilkan nama hari menggunakan struktur Switch.

```php
<?php
$nama_hari = date("l");
switch ($nama_hari) {
    case "Sunday":
        echo "Minggu";
        break;
    case "Monday":
        echo "Senin";
        break;
    case "Tuesday":
        echo "Selasa";
        break;
    default:
        echo "Sabtu";
}
?>
```

**Screenshot:**
<img width="1919" height="1023" alt="image" src="https://github.com/user-attachments/assets/f38cbec9-1019-4e50-bb18-f78245b236f6" />


**Penjelasan:**
- Switch digunakan untuk kondisi dengan banyak pilihan
- Setiap `case` harus diakhiri dengan `break`
- `default` dijalankan jika tidak ada case yang cocok

---

### 8. Perulangan For
**File**: `latihan7.php`

Program untuk menampilkan perulangan menggunakan FOR.

```php
<?php
echo "Perulangan 1 sampai 10 <br />";
for ($i=1; $i<=10; $i++) {
    echo "Perulangan ke: " . $i . '<br />';
}
echo "Perulangan Menurun dari 10 ke 1 <br />";
for ($i=10; $i>=1; $i--) {
    echo "Perulangan ke: " . $i . '<br />';
}
?>
```

**Screenshot:**
<img width="1919" height="1006" alt="image" src="https://github.com/user-attachments/assets/f697f73c-4aeb-402b-820c-497be2125500" />


**Penjelasan:**
- For digunakan untuk perulangan dengan jumlah iterasi yang pasti
- Struktur: `for (inisialisasi; kondisi; increment/decrement)`
- `$i++` untuk increment, `$i--` untuk decrement

---

### 9. Perulangan While
**File**: `latihan8.php`

Program untuk menampilkan perulangan menggunakan WHILE.

```php
<?php
echo "Perulangan 1 sampai 10 <br />";
$i=1;
while ($i<=10) {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
}
?>
```

**Screenshot:**
<img width="1919" height="1004" alt="image" src="https://github.com/user-attachments/assets/5eda67fe-3fe3-47d6-ae56-c7344fd9c945" />


**Penjelasan:**
- While melakukan perulangan selama kondisi bernilai TRUE
- Variabel counter harus diinisialisasi sebelum loop
- Increment dilakukan di dalam loop

---

### 10. Perulangan Do-While
**File**: `latihan9.php`

Program untuk menampilkan perulangan menggunakan DO-WHILE.

```php
<?php
echo "Perulangan 1 sampai 10 <br />";
$i=1;
do {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
} while ($i<=10);
?>
```

**Screenshot:**
<img width="1919" height="1005" alt="image" src="https://github.com/user-attachments/assets/8349e30a-5502-425f-8e50-4af7ccb42c76" />

**Penjelasan:**
- Do-While mirip dengan While, tapi kondisi dicek di akhir
- Loop akan dijalankan minimal 1 kali
- Cocok digunakan ketika loop harus dieksekusi minimal sekali

---

## Tugas: Form Input dengan Perhitungan Umur dan Gaji

**File**: `tugas.php`

Program untuk membuat form input data diri yang menampilkan nama, tanggal lahir, pekerjaan, menghitung umur, dan menampilkan gaji sesuai pekerjaan.

### Kode Program:

```php
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
```

**Screenshot:**

**Tampilan Form:**
<img width="1919" height="1002" alt="image" src="https://github.com/user-attachments/assets/2d05509a-fb1c-414e-ba56-92b5821e3d24" />


**Tampilan Output:**
<img width="1918" height="1006" alt="image" src="https://github.com/user-attachments/assets/fa78db28-b7f8-4f34-88f1-6c9ebf71eb8e" />

### Penjelasan:

1. **Form Input**:
   - Input nama dengan type `text`
   - Input tanggal lahir dengan type `date`
   - Select option untuk pilihan pekerjaan

2. **Perhitungan Umur**:
   - Menggunakan class `DateTime` untuk mengolah tanggal
   - Method `diff()` untuk menghitung selisih tahun
   - Property `->y` untuk mengambil nilai tahun

3. **Menentukan Gaji**:
   - Menggunakan struktur `switch-case`
   - Setiap pekerjaan memiliki gaji yang berbeda:
     - Freelamce: Rp 15.000.000
     - Budak Korporat: Rp 4000.000
     - Barista: Rp 3500.000
     - Pengangguran: Rp 0

4. **Format Output**:
   - Fungsi `number_format()` untuk format rupiah
   - Styling dengan CSS untuk tampilan lebih menarik

---

## Kesimpulan

Dari praktikum ini, saya telah mempelajari:
1. Dasar-dasar pemrograman PHP
2. Penggunaan variabel dan tipe data
3. Penggunaan operator aritmatika
4. Struktur kontrol (IF, Switch)
5. Perulangan (For, While, Do-While)
6. Penggunaan form dan method GET/POST
7. Pengolahan data dari form
8. Perhitungan menggunakan DateTime
9. Format output dengan fungsi PHP

---

**© 2025 - Praktikum Pemrograman Web**
