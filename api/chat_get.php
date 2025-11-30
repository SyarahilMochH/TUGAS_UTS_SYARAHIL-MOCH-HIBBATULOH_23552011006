<?php
require_once __DIR__ . '/../includes/koneksi.php';
$stmt = $pdo->query("SELECT question, answer FROM chat_qa ORDER BY id ASC");
$data = [];
while ($row = $stmt->fetch()) {
    $key = mb_strtolower(trim($row['question']));
    $data[$key] = $row['answer'];
}
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data, JSON_UNESCAPED_UNICODE);
