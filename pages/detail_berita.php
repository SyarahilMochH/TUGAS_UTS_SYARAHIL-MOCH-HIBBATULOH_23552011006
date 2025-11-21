<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar.php'; ?>

<div class="container py-5">
  <?php
$berita = [
    1 => [
      'judul' => 'Optimalisasi Produksi Padi Jawa Barat',
      'tanggal' => '2025-10-13',
      'gambar' => '../assets/img/padi.png',
      'isi' => '
        Dinas Tanaman Pangan dan Hortikultura Provinsi Jawa Barat terus mendorong peningkatan produktivitas padi melalui serangkaian program strategis. 
        Upaya ini diwujudkan melalui pemanfaatan bibit unggul, penerapan teknologi pertanian modern, serta pendampingan intensif bagi para petani di tingkat desa. <br><br>
        
        Selain itu, pemerintah daerah juga memperkuat kelembagaan kelompok tani melalui pelatihan dan penyuluhan lapangan untuk memastikan proses budidaya berlangsung secara tepat dan efisien. 
        Teknologi seperti penggunaan sensor tanah, sistem irigasi hemat air, dan mekanisasi pertanian menjadi bagian dari transformasi menuju pertanian yang lebih maju. <br><br>

        Dengan berbagai inisiatif tersebut, diharapkan produktivitas padi di Jawa Barat dapat meningkat secara signifikan sehingga mampu menjaga ketahanan pangan daerah sekaligus memperkuat kesejahteraan petani. 
        Program ini juga berorientasi pada pertanian berkelanjutan yang ramah lingkungan.
      '
    ],

    2 => [
      'judul' => 'Program Hortikultura Unggulan Daerah',
      'tanggal' => '2025-09-25',
      'gambar' => '../assets/img/cabai.png',
      'isi' => '
        Pemerintah Provinsi Jawa Barat meluncurkan program hortikultura unggulan sebagai bagian dari upaya meningkatkan kualitas dan kuantitas produksi buah serta sayuran lokal. 
        Fokus utama dari program ini meliputi pengembangan varietas hortikultura berdaya hasil tinggi, peningkatan standar budidaya, serta penguatan akses pasar bagi para petani. <br><br>

        Melalui kerja sama dengan berbagai lembaga riset dan perguruan tinggi, pemerintah juga mendorong pengembangan teknologi ramah lingkungan seperti penggunaan pestisida nabati, pemupukan berimbang, dan sistem pertanian organik. 
        Pendampingan langsung dilakukan oleh tim penyuluh untuk memastikan para petani mampu menerapkan teknik budidaya modern secara konsisten. <br><br>

        Dengan keberadaan program ini, Jawa Barat berharap dapat menjadi pusat hortikultura nasional yang mampu memenuhi kebutuhan pangan lokal sekaligus mempertahankan daya saing ekspor komoditas unggulan.
      '
    ],

    3 => [
      'judul' => 'Peningkatan Kualitas SDM Petani Muda',
      'tanggal' => '2025-09-10',
      'gambar' => '../assets/img/petani.png',
      'isi' => '
        Upaya regenerasi petani menjadi salah satu agenda prioritas Pemerintah Provinsi Jawa Barat. 
        Melalui berbagai pelatihan dan kegiatan pemberdayaan, pemerintah berkomitmen meningkatkan kualitas sumber daya manusia (SDM) petani muda agar mampu bersaing di era modern. <br><br>

        Program pelatihan mencakup manajemen usaha tani, penggunaan teknologi digital pertanian (smart farming), pemasaran hasil pertanian melalui e-commerce, serta pengelolaan keuangan berbasis UMKM. 
        Selain itu, pemerintah juga menggandeng perguruan tinggi, komunitas agripreneur, dan perusahaan teknologi untuk memberikan pendampingan jangka panjang. <br><br>

        Dengan adanya program ini, diharapkan generasi muda dapat melihat sektor pertanian sebagai bidang yang potensial dan menjanjikan. 
        Kehadiran petani muda yang inovatif diharapkan mampu membawa perubahan besar terhadap keberlanjutan pertanian di Jawa Barat.
      '
    ]
];


$id = $_GET['id'] ?? null;

if ($id && isset($berita[$id])) {
    $b = $berita[$id];
    echo "
    <div class='card shadow-lg border-0 p-4'>
      <h2 class='fw-bold text-success mb-2'>{$b['judul']}</h2>
      <small class='text-muted mb-3 d-block'>{$b['tanggal']}</small>

      <img src='{$b['gambar']}' 
           alt='{$b['judul']}' 
           class='img-fluid rounded mb-4 detail-berita-img'>

      <p class='lead text-justify'>{$b['isi']}</p>

      <a href='/TUGAS_UTS_SYARAHIL%20MOCH%20HIBBATULOH_23552011006/index.php?page=berita' 
         class='btn btn-success mt-3'>← Kembali ke Daftar Berita</a>
    </div>
    ";
} else {
    echo "<div class='alert alert-danger text-center'>Berita tidak ditemukan.</div>";
}

  ?>
</div>

<?php include '../includes/footer.php'; ?>
