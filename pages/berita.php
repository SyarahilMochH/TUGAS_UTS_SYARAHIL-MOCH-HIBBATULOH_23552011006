<?php
require_once __DIR__ . '/../includes/koneksi.php';
$stmt = $pdo->query("SELECT * FROM news ORDER BY date DESC");
$news = $stmt->fetchAll();
?>
<div class="container py-5">
  <h2 class="mb-4 text-success fw-bold">Berita Terbaru</h2>
  <div class="row g-4">
  <?php foreach ($news as $b): ?>
    <div class="col-lg-4 col-md-6">
      <div class="card h-100 shadow-sm border-0">
        <?php if (!empty($b['image'])): ?>
          <img src="<?= htmlspecialchars($b['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($b['title']) ?>">
        <?php endif; ?>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title fw-bold text-success"><?= htmlspecialchars($b['title']) ?></h5>
          <small class="text-muted d-block mb-2"><?= htmlspecialchars($b['date']) ?></small>
          <p class="card-text"><?= htmlspecialchars(mb_strimwidth($b['content'], 0, 150, '...')) ?></p>
          <a href="index.php?page=detail_berita&id=<?= $b['id'] ?>" class="btn btn-outline-success btn-sm mt-auto">Baca Selengkapnya</a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  </div>
</div>
