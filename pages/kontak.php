<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nama = htmlspecialchars($_POST['nama']);
  $email = htmlspecialchars($_POST['email']);
  $pesan = htmlspecialchars($_POST['pesan']);

  $data = [
    'nama' => $nama,
    'email' => $email,
    'pesan' => $pesan,
    'tanggal' => date('Y-m-d H:i:s')
  ];

  $file = __DIR__ . '/../assets/data/kontak.json';
  if (!file_exists(dirname($file))) {
    mkdir(dirname($file), 0777, true);
  }

  $existing = file_exists($file) ? json_decode(file_get_contents($file), true) : [];
  $existing[] = $data;
  file_put_contents($file, json_encode($existing, JSON_PRETTY_PRINT));

  $success = "Pesan Anda berhasil dikirim. Terima kasih, {$nama}!";
}
?>

<!-- ✅ Tambahan wrapper agar footer tetap di bawah -->
<div class="container d-flex flex-column justify-content-center flex-grow-1 py-5 fade-in">
  <div class="kontak-content">
    <h2 class="text-success fw-bold mb-4 text-center">Hubungi Kami</h2>

    <?php if (!empty($success)): ?>
      <div class="alert alert-success"><?= $success ?></div>
    <?php endif; ?>

    <form action="" method="POST" class="row g-3">
      <div class="col-md-6">
        <label class="form-label fw-semibold">Nama</label>
        <input type="text" name="nama" class="form-control" required>
      </div>
      <div class="col-md-6">
        <label class="form-label fw-semibold">Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>
      <div class="col-12">
        <label class="form-label fw-semibold">Pesan</label>
        <textarea name="pesan" class="form-control" rows="4" required></textarea>
      </div>
      <div class="col-12 text-center">
        <button type="submit" class="btn btn-success px-4">Kirim Pesan</button>
      </div>
    </form>
  </div>
</div>
