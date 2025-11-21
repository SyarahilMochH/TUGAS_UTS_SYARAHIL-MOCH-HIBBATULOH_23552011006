<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-success fw-bold mb-4 text-center">Berita Terbaru</h2>
    <div class="row g-4">
      <?php
      $berita = [
        [
          'id' => 1,
          'judul' => 'Optimalisasi Produksi Padi Jawa Barat',
          'tanggal' => '2025-10-13',
          'gambar' => 'assets/img/padi.png',
          'isi' => 'Dinas Tanaman Pangan dan Hortikultura Provinsi Jawa Barat terus mendorong peningkatan produktivitas padi melalui inovasi dan pendampingan petani di berbagai daerah.'
        ],
        [
          'id' => 2,
          'judul' => 'Program Hortikultura Unggulan Daerah',
          'tanggal' => '2025-09-25',
          'gambar' => 'assets/img/cabai.png',
          'isi' => 'Pemerintah Provinsi Jawa Barat meluncurkan program hortikultura unggulan untuk memperkuat ketahanan pangan serta meningkatkan nilai ekspor komoditas buah dan sayur.'
        ],
        [
          'id' => 3,
          'judul' => 'Peningkatan Kualitas SDM Petani Muda',
          'tanggal' => '2025-09-10',
          'gambar' => 'assets/img/petani.png',
          'isi' => 'Melalui pelatihan dan kolaborasi dengan perguruan tinggi, Jawa Barat fokus mencetak generasi muda yang berdaya saing dalam bidang pertanian berkelanjutan.'
        ]
      ];

      // Loop menampilkan berita
 foreach ($berita as $b) :
      ?>
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 shadow-sm border-0">
            <img src="<?= htmlspecialchars($b['gambar']) ?>" class="card-img-top" alt="<?= htmlspecialchars($b['judul']) ?>">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title fw-bold text-success"><?= htmlspecialchars($b['judul']) ?></h5>
              <small class="text-muted d-block mb-2"><?= htmlspecialchars($b['tanggal']) ?></small>
              <p class="card-text"><?= htmlspecialchars($b['isi']) ?></p>
              <a href="pages/detail_berita.php?id=<?= $b['id'] ?>" 
                 class="btn btn-outline-success btn-sm mt-auto">
                 Baca Selengkapnya
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
