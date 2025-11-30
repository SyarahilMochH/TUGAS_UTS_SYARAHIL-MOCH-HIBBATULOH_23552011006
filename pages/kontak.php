<?php
require_once __DIR__ . '/../includes/koneksi.php';
?>

<div class="container py-5">
    <h2 class="text-center text-success fw-bold mb-4">Kontak Kami</h2>

    <div class="row justify-content-center">
        <div class="col-lg-8">

            <?php if (isset($_GET['success'])): ?>
                <div class="alert alert-success">Pesan berhasil dikirim!</div>
            <?php endif; ?>

            <div class="card shadow border-0 p-4">
                <form action="pages/process_kontak.php" method="POST">

                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Subjek</label>
                        <input type="text" name="subject" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Pesan</label>
                        <textarea name="message" rows="5" class="form-control" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-success w-100">Kirim Pesan</button>

                </form>
            </div>

        </div>
    </div>
</div>
