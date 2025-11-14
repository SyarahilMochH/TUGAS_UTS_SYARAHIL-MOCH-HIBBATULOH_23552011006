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
    1 => [
      'judul' => 'Optimalisasi Produksi Padi Jawa Barat',
      'tanggal' => '2025-10-13',
      'isi' => 'Dinas Tanaman Pangan dan Hortikultura Provinsi Jawa Barat terus mendorong peningkatan produktivitas padi melalui inovasi dan pendampingan petani di berbagai daerah.'
    ],
    2 => [
      'judul' => 'Program Hortikultura Unggulan Daerah',
      'tanggal' => '2025-09-25',
      'isi' => 'Pemerintah Provinsi Jawa Barat meluncurkan program hortikultura unggulan untuk memperkuat ketahanan pangan serta meningkatkan nilai ekspor komoditas buah dan sayur.'
    ],
    3 => [
      'judul' => 'Peningkatan Kualitas SDM Petani Muda',
      'tanggal' => '2025-09-10',
      'isi' => 'Melalui pelatihan dan kolaborasi dengan perguruan tinggi, Jawa Barat fokus mencetak generasi muda yang berdaya saing dalam bidang pertanian berkelanjutan.'
    ]
  ];

  foreach ($berita as $id => $b) {
    echo "
    <div class='col-md-4'>
      <div class='card h-100 shadow-sm d-flex flex-column'>
        <div class='card-body flex-grow-1 d-flex flex-column'>
          <div>
            <h5 class='card-title'>{$b['judul']}</h5>
            <small class='text-muted'>{$b['tanggal']}</small>
            <p class='card-text mt-2'>{$b['isi']}</p>
          </div>
          <div class='mt-auto'>
            <a href='/TUGAS_UTS_SYARAHIL%20MOCH%20HIBBATULOH_23552011006/pages/detail_berita.php?id={$id}' class='btn btn-success w-100'>Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>";
  }
  ?>
</div>

<!-- Layanan / Program -->
<h2 class="mt-5 mb-4 text-center">Layanan Kami</h2>
<div class="row g-4 justify-content-center text-center">

  <!-- Kartu 1 -->
  <div class="col-md-4 col-sm-6">
    <div class="card h-100 shadow-sm d-flex flex-column">
      <img src="/TUGAS_UTS_SYARAHIL%20MOCH%20HIBBATULOH_23552011006/assets/img/service1.png" class="card-img-top" alt="Layanan 1">
      <div class="card-body flex-grow-1 d-flex flex-column">
        <div>
          <h5 class="card-title">Sertifikasi Benih Pangan</h5>
          <p class="card-text">Proses sertifikasi benih tanaman pangan secara online.</p>
        </div>
        <div class="mt-auto">
          <a href="https://katalis.jabarprov.go.id/admin/login" target="_blank" class="btn btn-outline-success w-100">Selengkapnya</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Kartu 2 -->
  <div class="col-md-4 col-sm-6">
    <div class="card h-100 shadow-sm d-flex flex-column">
      <img src="/TUGAS_UTS_SYARAHIL%20MOCH%20HIBBATULOH_23552011006/assets/img/service2.png" class="card-img-top" alt="Layanan 2">
      <div class="card-body flex-grow-1 d-flex flex-column">
        <div>
          <h5 class="card-title">Singa Bentang</h5>
          <p class="card-text">Sistem Pengawasan Benih Tanaman Pangan Balai Pengawasan dan Sertifikasi Benih</p>
        </div>
        <div class="mt-auto">
          <a href="https://www.bpsbtph-jabar.id/singabentang" class="btn btn-outline-success w-100">Selengkapnya</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Kartu 3 -->
  <div class="col-md-4 col-sm-6">
    <div class="card h-100 shadow-sm d-flex flex-column">
      <img src="/TUGAS_UTS_SYARAHIL%20MOCH%20HIBBATULOH_23552011006/assets/img/service2.png" class="card-img-top" alt="Layanan 3">
      <div class="card-body flex-grow-1 d-flex flex-column">
        <div>
          <h5 class="card-title">Serbet Panon</h5>
          <p class="card-text">Sertifikasi Benih Tanaman Pangan Online Balai Pengawasan dan Sertifikasi Benih</p>
        </div>
        <div class="mt-auto">
          <a href="https://www.bpsbtph-jabar.id/serbetpanon" class="btn btn-outline-success w-100">Selengkapnya</a>
        </div>
      </div>
    </div>
  </div>

</div>


<!-- Galeri Singkat -->
<div class="container py-5 fade-in">
  <h2 class="mt-5 mb-4 text-success fw-bold text-center">Galeri Kegiatan</h2>

  <div id="galeriCarousel" class="carousel slide shadow rounded mx-auto" data-bs-ride="carousel" data-bs-interval="3000" style="max-width: 700px;">
    <div class="carousel-inner">
      <?php
      for ($i = 1; $i <= 9; $i++) {
        $active = $i === 1 ? 'active' : '';
        echo "
        <div class='carousel-item {$active}'>
          <img src='assets/img/galeri{$i}.png' 
               class='d-block w-100 rounded galeri-slide-img' 
               alt='Galeri {$i}'>
        </div>";
      }
      ?>
    </div>

    <!-- Tombol navigasi -->
    <button class="carousel-control-prev" type="button" data-bs-target="#galeriCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Sebelumnya</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#galeriCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Berikutnya</span>
    </button>

    <!-- Indikator slide -->
    <div class="carousel-indicators">
      <?php
      for ($i = 0; $i < 9; $i++) {
        $active = $i === 0 ? 'class="active"' : '';
        echo "<button type='button' data-bs-target='#galeriCarousel' data-bs-slide-to='{$i}' {$active} aria-label='Slide ".($i+1)."'></button>";
      }
      ?>
    </div>
  </div>
</div>
