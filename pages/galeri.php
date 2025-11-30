<?php
require_once __DIR__ . '/../includes/koneksi.php';
$stmt = $pdo->query("SELECT * FROM gallery ORDER BY id DESC");
$galeri = $stmt->fetchAll();
?>
<div class="container py-5">
  <h2 class="text-success fw-bold mb-4 text-center">Galeri Kegiatan</h2>
  <div class="row g-3">
    <?php foreach ($galeri as $g): ?>
      <div class="col-md-4 col-6">
        <img src="<?= htmlspecialchars($g['file']) ?>" class="img-fluid rounded shadow-sm" alt="<?= htmlspecialchars($g['caption']) ?>">
      </div>
    <?php endforeach; ?>
  </div>
</div>
