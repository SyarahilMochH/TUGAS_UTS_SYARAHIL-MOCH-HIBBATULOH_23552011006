<?php
require_once __DIR__ . '/../includes/koneksi.php';
$input = json_decode(file_get_contents('php://input'), true);
$question = trim($input['question'] ?? '');
$answer = trim($input['answer'] ?? '');

if (!$question || !$answer) {
    http_response_code(400);
    echo "Pertanyaan atau jawaban kosong.";
    exit;
}

$stmt = $pdo->prepare("INSERT INTO chat_qa (question, answer) VALUES (:q, :a)");
$stmt->execute([':q' => $question, ':a' => $answer]);

echo "Jawaban berhasil disimpan!";
