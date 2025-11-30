<?php
require_once __DIR__ . '/../includes/koneksi.php';
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$stmt = $pdo->prepare("SELECT * FROM news WHERE id = :id LIMIT 1");
$stmt->execute([':id' => $id]);
$b = $stmt->fetch();
if (!$b) {
    echo "<div class='container py-5'><div class='alert alert-danger text-center'>Berita tidak ditemukan.</div></div>";
    return;
}
?>
<div class="container py-5">
  <div class="card shadow-lg border-0 p-4">
    <h2 class="fw-bold text-success mb-2"><?= htmlspecialchars($b['title']) ?></h2>
    <small class="text-muted mb-3 d-block"><?= htmlspecialchars($b['date']) ?></small>
    <?php if (!empty($b['image'])): ?>
      <img src="<?= htmlspecialchars($b['image']) ?>" class="img-fluid rounded mb-4" alt="<?= htmlspecialchars($b['title']) ?>" style="max-width:350px; margin:0 auto;">
    <?php endif; ?>
    <p class="lead" style="text-align:justify;"><?= nl2br(htmlspecialchars($b['content'])) ?></p>
    <a href="index.php?page=berita" class="btn btn-success mt-3">← Kembali ke Daftar Berita</a>
  </div>
</div>
