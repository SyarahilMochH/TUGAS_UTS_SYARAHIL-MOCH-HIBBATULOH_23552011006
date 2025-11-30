<?php
require_once __DIR__ . '/../includes/koneksi.php';

$stmt = $conn->prepare("SELECT * FROM pages WHERE slug = 'about' LIMIT 1");
$stmt->execute();
$page = $stmt->fetch(PDO::FETCH_ASSOC);
?>


<!-- MAIN CONTENT -->
<div class="container my-5">

    <div class="row justify-content-center">
        <div class="col-lg-10">

            <div class="card shadow-lg border-0 rounded-4 p-4">
                <div class="card-body">

                    <h2 class="fw-bold text-success mb-3"><?= htmlspecialchars($page['title']) ?></h2>

                    <p class="text-secondary" style="font-size: 1.1rem; line-height: 1.8;">
                        <?= nl2br($page['content']) ?>
                    </p>

                </div>
            </div>

        </div>
    </div>

</div>

<!-- VISION & MISSION SECTION -->
<section class="py-5 bg-light">
    <div class="container">
        <h3 class="text-center fw-bold text-success mb-4">Tugas Pokok & Fungsi</h3>

        <div class="row g-4">

            <div class="col-md-6">
                <div class="p-4 bg-white shadow rounded-4 h-100">
                    <h5 class="fw-bold text-success"><i class="bi bi-eye"></i> Tugas Pokok</h5>
                    <p class="text-secondary">
                        Dinas mempunyai tugas pokok menyelengarakan perumusan kebijakan teknis tanaman pangan dan tanaman hortikultura, menyelengarakan koordinasi, pembinaan, pengendalian,
                        fasilitasi, dan pelaksanaan urusan pemerintahan di bidang tanaman pangan dan hortikultura, prasarana dan sarana serta penyuluhan.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-4 bg-white shadow rounded-4 h-100">
                    <h5 class="fw-bold text-success"><i class="bi bi-bullseye"></i> Misi</h5>
                    <ul class="text-secondary">
                        <li>Penyelengaraan perumusan kebijakan teknis bidang tanaman pangan dan hortikultura.</li>
                        <li>Penyelengaraan urusan pemerintahan provinsi bidang tanaman pangan dan hortikultura.</li>
                        <li>Penyelengaraan koordinasi, pembinaan dan fasilitasi pelaksanaan urusan pemerintahan provinsi bidangan tanaman pangan dan hortikultura.</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- STRUCTURE -->
<section class="container py-5">
    <h3 class="text-center fw-bold text-success mb-4">Struktur Organisasi</h3>

    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <img src="assets/img/structure.png" class="img-fluid rounded shadow" alt="Struktur Organisasi">
        </div>
    </div>
</section>
