<section class="hero">
  <div class="container text-center text-white">
    <h1 class="display-4 fw-bold">Dinas Tanaman Pangan & Hortikultura Provinsi Jawa Barat</h1>
    <p class="lead">Menguatkan Ketahanan Pangan dan Pengembangan Hortikultura Berkelanjutan</p>
  </div>
</section>

<div class="container py-5">
  <!-- Berita Terbaru -->
  <h2 class="mb-4">Berita Terbaru</h2>
  <div class="row g-4">
    <?php
    $berita = [
      ['Judul Berita 1', '2025-10-13', 'Excerpt berita pertama…'],
      ['Judul Berita 2', '2025-09-25', 'Excerpt berita kedua…'],
      ['Judul Berita 3', '2025-09-10', 'Excerpt berita ketiga…']
    ];
    foreach ($berita as $b) {
      echo "
      <div class='col-md-4'>
        <div class='card h-100 shadow-sm'>
          <div class='card-body'>
            <h5 class='card-title'>{$b[0]}</h5>
            <small class='text-muted'>{$b[1]}</small>
            <p class='card-text mt-2'>{$b[2]}</p>
            <a href='#' class='btn btn-success'>Selengkapnya</a>
          </div>
        </div>
      </div>";
    }
    ?>
  </div>

  <!-- Layanan / Program -->
  <h2 class="mt-5 mb-4">Layanan Kami</h2>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="/TUGAS_UTS_SYARAHIL%20MOCH%20HIBBATULOH_23552011006/assets/img/service1.png" class="card-img-top" alt="Layanan 1">
        <div class="card-body">
          <h5 class="card-title">Sertifikasi Benih Pangan</h5>
          <p class="card-text">Proses sertifikasi benih tanaman pangan secara online.</p>
          <a href="#" class="btn btn-outline-success">Selengkapnya</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Galeri Singkat -->
  <h2 class="mt-5 mb-4">Galeri Kegiatan</h2>
  <div class="row g-3">
    <?php
    for ($i = 1; $i <= 3; $i++) { // karena kamu punya galeri1.png - galeri3.png
      echo "
      <div class='col-md-4 col-6'>
        <img src='/TUGAS_UTS_SYARAHIL%20MOCH%20HIBBATULOH_23552011006/assets/img/galeri{$i}.png' 
             class='img-fluid rounded shadow-sm' 
             alt='Galeri {$i}'>
      </div>";
    }
    ?>
  </div>
</div>
