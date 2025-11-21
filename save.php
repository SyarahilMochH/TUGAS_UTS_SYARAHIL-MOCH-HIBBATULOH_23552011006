<?php
// Lokasi file JSON
$file = "assets/data/chat.json";

// Baca input JSON
$input = json_decode(file_get_contents("php://input"), true);

$question = strtolower(trim($input["question"] ?? ""));
$answer   = trim($input["answer"] ?? "");

if (!$question || !$answer) {
    echo "Data tidak lengkap.";
    exit;
}

// Baca data lama
$data = json_decode(file_get_contents($file), true);

// Tambahkan data baru
$data[$question] = $answer;

// Simpan ke file
file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "Jawaban berhasil disimpan! Terima kasih sudah membantu saya belajar 🌱";
