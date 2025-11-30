<?php
require_once __DIR__ . '/../includes/koneksi.php';

// Ambil halaman home
$stmt = $pdo->prepare("SELECT title, content FROM pages WHERE slug = :slug LIMIT 1");
$stmt->execute([':slug' => 'home']);
$page = $stmt->fetch();

// Ambil berita terbaru
$query = $pdo->prepare("SELECT * FROM news ORDER BY created_at DESC LIMIT 3");
$query->execute();
$news = $query->fetchAll();

// Ambil data layanan
$serviceQuery = $pdo->prepare("SELECT * FROM services ORDER BY id ASC");
$serviceQuery->execute();
$services = $serviceQuery->fetchAll();

// ambil data galeri
$stmt = $conn->prepare("SELECT * FROM gallery ORDER BY id ASC");
$stmt->execute();
$gallery = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<section class="hero">
    <div class="container text-center text-white">
        <h1 class="display-4 fw-bold">
            <?= htmlspecialchars($page['title'] ?? 'Dinas Tanaman Pangan & Hortikultura') ?>
        </h1>
        <p class="lead">
            <?= htmlspecialchars($page['content'] ?? '') ?>
        </p>
    </div>
</section>

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


<!-- Bagian Layanan Kami -->
<section class="py-5 bg-light">
    <div class="container">

        <h2 class="text-center mb-5 fw-bold text-success">Layanan Kami</h2>

        <div class="row g-4">

            <?php foreach ($services as $s): ?>
                <div class="col-lg-4 col-md-6">

                    <a href="<?= htmlspecialchars($s['url']) ?>" 
                       target="_blank" 
                       class="text-decoration-none text-dark">

                        <div class="card h-100 shadow-sm border-0 p-4">

                            <!-- ICON -->
                            <?php if (!empty($s['icon'])): ?>
                                <div class="text-center">
                                    <img src="assets/img/<?= htmlspecialchars($s['icon']) ?>" 
                                         class="mb-3" width="300"
                                         alt="<?= htmlspecialchars($s['title']) ?>">
                                </div>
                            <?php endif; ?>

                            <!-- TITLE -->
                            <h5 class="fw-bold text-center">
                                <?= htmlspecialchars($s['title']) ?>
                            </h5>

                            <!-- DESCRIPTION -->
                            <p class="text-muted mt-2" style="text-align: justify;">
                                <?= htmlspecialchars($s['description']) ?>
                            </p>

                        </div>

                    </a>

                </div>
            <?php endforeach; ?>

        </div>

    </div>
</section>

<!-- ================================ -->
<!-- GALERI (SLIDESHOW) -->
<!-- ================================ -->
<h2 class="text-center mt-5 mb-4">Galeri Kegiatan</h2>

<div id="galeriCarousel" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators -->
    <div class="carousel-indicators">
        <?php foreach ($gallery as $index => $g): ?>
            <button type="button" data-bs-target="#galeriCarousel" 
                data-bs-slide-to="<?= $index ?>"
                class="<?= $index == 0 ? 'active' : '' ?>"></button>
        <?php endforeach; ?>
    </div>

    <!-- Slides -->
    <div class="carousel-inner">
        <?php foreach ($gallery as $index => $g): ?>
            <div class="carousel-item <?= $index == 0 ? 'active' : '' ?>">
                <img src="<?= $g['file'] ?>" 
                    class="d-block w-100"
                    style="height:450px; object-fit:cover; border-radius:10px;">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
                    <h5><?= $g['caption'] ?></h5>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Buttons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#galeriCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#galeriCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>