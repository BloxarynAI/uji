<?php
// Ambil isi file data.txt kalau ada
$dataFile = "data.txt";
$allData = "";
if (file_exists($dataFile)) {
    $allData = file_get_contents($dataFile);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Website Publikasi</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background: #f4f4f4; }
        .container { max-width: 700px; margin: auto; background: white; padding: 20px; border-radius: 8px; }
        h2 { margin-bottom: 10px; }
        textarea, input { width: 100%; padding: 10px; margin: 5px 0; }
        button { padding: 10px; margin-top: 5px; cursor: pointer; }
        .box { border: 1px solid #ccc; padding: 10px; margin: 10px 0; background: #fafafa; }
    </style>
</head>
<body>
<div class="container">
    <h2>Form Publikasi (Pengumuman / Chat / Login)</h2>
    <form action="save.php" method="post">
        <input type="text" name="nama" placeholder="Nama / User" required>
        <textarea name="pesan" placeholder="Tulis pengumuman atau chat..." required></textarea>
        <button type="submit">Kirim</button>
    </form>

    <h2>📢 Semua Publikasi</h2>
    <div id="list">
        <?php
        if ($allData) {
            echo $allData;
        } else {
            echo "<p>Belum ada data.</p>";
        }
        ?>
    </div>
</div>
</body>
</html>
