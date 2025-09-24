<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    $pesan = nl2br(htmlspecialchars($_POST["pesan"]));
    $waktu = date("d-m-Y H:i:s");

    // Format data
    $data = "<div class='box'><b>$nama</b> [$waktu]:<br>$pesan</div>\n";

    // Simpan ke file data.txt
    file_put_contents("data.txt", $data, FILE_APPEND);

    // Kembali ke halaman utama
    header("Location: index.php");
    exit();
}
?>
