<?php
require_once __DIR__ . '/../includes/koneksi.php';
$stmt = $pdo->query("SELECT * FROM products ORDER BY id ASC");
$produks = $stmt->fetchAll();
?>
<div class="container py-5">
  <h2 class="text-success fw-bold mb-4">Produk Kami</h2>
  <div class="row g-4">
    <?php foreach ($produks as $p): ?>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <?php if (!empty($p['image'])): ?> 
            <img src="<?= htmlspecialchars($p['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($p['name']) ?>">
          <?php endif; ?>
          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?= htmlspecialchars($p['name']) ?></h5>
            <p class="card-text"><?= htmlspecialchars($p['description']) ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
