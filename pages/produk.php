<div class="container py-5">
  <h2 class="text-success fw-bold mb-4 text-center">Produk Pertanian</h2>
  <div class="row g-4">
    <?php
    $basePath = 'assets/img/';
    $produk = [
      ['file' => $basePath . 'padi.png', 'judul' => 'Beras Premium', 'deskripsi' => 'Beras hasil panen petani lokal Jawa Barat.'],
      ['file' => $basePath . 'cabai.png', 'judul' => 'Cabai Merah', 'deskripsi' => 'Cabai segar hasil panen organik.'],
      ['file' => $basePath . 'tomat.png', 'judul' => 'Tomat Segar', 'deskripsi' => 'Tomat berkualitas tinggi dari lahan subur.'],
      ['file' => $basePath . 'jagung.png', 'judul' => 'Jagung Manis', 'deskripsi' => 'Jagung manis segar untuk berbagai olahan.'],
      ['file' => $basePath . 'bawang putih.jpg', 'judul' => 'Bawang Putih', 'deskripsi' => 'Bawang putih segar dengan aroma khas.'],
      ['file' => $basePath . 'bawang merah.jpg', 'judul' => 'Bawang Merah', 'deskripsi' => 'Bawang mer  ah berkualitas untuk masakan Anda.'],
      
    ];

    foreach ($produk as $p) {
      echo "
      <div class='col-md-4 col-sm-6'>
        <div class='card shadow-sm border-0'>
          <img src='{$p['file']}' class='card-img-top' alt='{$p['judul']}'>
          <div class='card-body'>
            <h5 class='card-title text-success'>{$p['judul']}</h5>
            <p class='card-text'>{$p['deskripsi']}</p>
          </div>
        </div>
      </div>
      ";
    }
    ?>
  </div>
</div>
