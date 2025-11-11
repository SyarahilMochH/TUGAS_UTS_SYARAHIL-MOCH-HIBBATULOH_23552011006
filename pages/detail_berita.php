<div class="container py-5">
  <?php
  $berita = [
    1 => [
      'judul' => 'Optimalisasi Produksi Padi Jawa Barat',
      'tanggal' => '2025-10-13',
      'gambar' => '../assets/img/padi.png',
      'isi' => 'Dinas Tanaman Pangan dan Hortikultura Provinsi Jawa Barat terus mendorong peningkatan produktivitas padi melalui inovasi dan pendampingan petani di berbagai daerah. 
                Program ini mencakup penguatan kelompok tani, penggunaan bibit unggul, serta penerapan teknologi pertanian modern.'
    ],
    2 => [
      'judul' => 'Program Hortikultura Unggulan Daerah',
      'tanggal' => '2025-09-25',
      'gambar' => '../assets/img/cabai.png',
      'isi' => 'Pemerintah Provinsi Jawa Barat meluncurkan program hortikultura unggulan untuk memperkuat ketahanan pangan serta meningkatkan nilai ekspor komoditas buah dan sayur.
                Fokus utama program ini adalah peningkatan produktivitas hortikultura dengan pendekatan ramah lingkungan dan pemberdayaan petani lokal.'
    ],
    3 => [
      'judul' => 'Peningkatan Kualitas SDM Petani Muda',
      'tanggal' => '2025-09-10',
      'gambar' => '../assets/img/tomat.png',
      'isi' => 'Melalui pelatihan dan kolaborasi dengan perguruan tinggi, Jawa Barat fokus mencetak generasi muda yang berdaya saing dalam bidang pertanian berkelanjutan.
                Program ini menjadi bagian dari upaya regenerasi petani agar sektor pertanian tetap produktif di masa depan.'
    ]
  ];

  $id = $_GET['id'] ?? null;

  if ($id && isset($berita[$id])) {
    $b = $berita[$id];
    echo "
    <div class='text-center mb-4'>
      <h2 class='fw-bold text-success'>{$b['judul']}</h2>
      <small class='text-muted'>{$b['tanggal']}</small>
    </div>
    <img src='{$b['gambar']}' class='img-fluid rounded shadow mb-4 d-block mx-auto' alt='{$b['judul']}' style='max-height:400px; object-fit:cover;'>
    <p class='lead text-justify'>{$b['isi']}</p>
    <a href='berita.php' class='btn btn-success mt-3'>← Kembali ke Daftar Berita</a>
    ";
  } else {
    echo "<p class='text-danger text-center'>Berita tidak ditemukan.</p>";
  }
  ?>
</div>