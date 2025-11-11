<div class="container py-5">
  <h2 class="text-success fw-bold mb-4 text-center">Galeri Kegiatan</h2>
  <div class="row g-3">
    <?php
    // Path gambar relatif terhadap index.php
    $basePath = 'assets/img/';
    $galeri = [
      ['file' => $basePath . 'galeri1.png', 'judul' => 'Kegiatan 1'],
      ['file' => $basePath . 'galeri2.png', 'judul' => 'Kegiatan 2'],
      ['file' => $basePath . 'galeri3.png', 'judul' => 'Kegiatan 3'],
    ];

    foreach ($galeri as $i => $g) {
      echo "
      <div class='col-md-4 col-6'>
        <img src='{$g['file']}' class='img-fluid rounded shadow-sm gallery-img' 
             alt='{$g['judul']}' data-bs-toggle='modal' data-bs-target='#modal{$i}'>
      </div>

      <!-- Modal -->
      <div class='modal fade' id='modal{$i}' tabindex='-1' aria-labelledby='modalLabel{$i}' aria-hidden='true'>
        <div class='modal-dialog modal-dialog-centered modal-lg'>
          <div class='modal-content'>
            <div class='modal-header'>
              <h5 class='modal-title' id='modalLabel{$i}'>{$g['judul']}</h5>
              <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body text-center'>
              <img src='{$g['file']}' class='img-fluid rounded' alt='{$g['judul']}'>
            </div>
          </div>
        </div>
      </div>
      ";
    }
    ?>
  </div>
</div>
