<?php
$pageTitle = 'Profil - Telkom University';
require 'includes/header.php';
?>
<section class="section">
    <div class="container article-body">
        <span class="eyebrow">Profil</span>
        <h1>Tentang proyek simulasi Telkom University purwokerto</h1>
        <p class="lead">Halaman ini digunakan untuk mempraktikkan struktur halaman PHP yang memakai header dan footer bersama.</p>
        
        <h2>Visi pembelajaran</h2>
        <p>Mahasiswa memahami hubungan antarmuka web, logika PHP, basis data, dan version control melalui satu proyek terpadu.</p>
        
        <h2>Tujuan proyek</h2>
        <p>Proyek menampilkan profil, program studi, berita, serta formulir kontak. Data program studi dan berita dibaca dari database, sedangkan pesan pengguna disimpan menggunakan prepared statement.</p>
        
        <div class="alert alert-success">
            Konten institusi pada website ini bersifat simulasi untuk keperluan praktikum.
        </div>
    </div>
</section>
<section class="section section-soft">
    <div class="container">
        <div class="section-heading">
            <span class="eyebrow">Kurikulum Utama</span>
            <h2>Materi Utama yang Akan Dikuasai</h2>
        </div>
        <div class="grid-3">
            <article class="card">
                <h3>Pengembangan Web</h3>
                <p>Menguasai pembuatan situs interaktif dan manajemen basis data berkinerja tinggi.</p>
            </article>
            <article class="card">
                <h3>Kolaborasi & Versi Kode</h3>
                <p>Memahami alur kerja tim modern serta pelacakan perubahan proyek secara terstruktur.</p>
            </article>
            <article class="card">
                <h3>Desain Antarmuka</h3>
                <p>Membuat tampilan aplikasi yang intuitif, fleksibel di berbagai perangkat, dan nyaman dipakai.</p>
            </article>
        </div>
    </div>
</section>
<?php require 'includes/footer.php'; ?>