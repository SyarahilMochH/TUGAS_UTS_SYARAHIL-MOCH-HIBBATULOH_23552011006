<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);

    // Simpan ke file atau database (contoh sederhana)
    $file = fopen("pesan.txt", "a");
    fwrite($file, "Nama: $nama\nEmail: $email\nPesan: $pesan\n---\n");
    fclose($file);

    echo "<script>alert('Pesan berhasil dikirim!');window.location='kontak.php';</script>";
}
?>
