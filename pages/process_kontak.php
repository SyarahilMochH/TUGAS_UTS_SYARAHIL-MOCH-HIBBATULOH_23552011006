<?php
require_once __DIR__ . '/../includes/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    // Validasi sederhana
    if ($name == '' || $email == '' || $subject == '' || $message == '') {
        die("Semua field wajib diisi!");
    }

    // Insert ke database menggunakan PDO
    $stmt = $conn->prepare("
        INSERT INTO contact_messages (name, email, subject, message) 
        VALUES (:name, :email, :subject, :message)
    ");

    $success = $stmt->execute([
        ':name'    => $name,
        ':email'   => $email,
        ':subject' => $subject,
        ':message' => $message
    ]);

    if ($success) {
        header("Location: ../index.php?page=kontak&success=1");
        exit;
    } else {
        echo "Gagal mengirim pesan.";
    }
}
?>
