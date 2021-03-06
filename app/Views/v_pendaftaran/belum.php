<?= $this->extend('layouts_peserta/template_peserta') ?>

<?= $this->section('header') ?>
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">
    <h1 class="logo mr-auto"><a href="<?php echo base_url('/'); ?>">STMIK<span> Mardira Indonesia</span></a></h1>
    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="active"><a href="<?php echo base_url('/'); ?>">Home</a></li>
        <li><a href="#team">Info PMB</a></li>
        <li><a href="<?php echo base_url('login'); ?>">Login</a></li>
      </ul>
    </nav>
  </div>
</header>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2>Pendaftaran Belum Dibuka</h2>
      </div>
    </div>
  </section>

  <!-- ======= Pendaftaran ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h3><span>Pendaftaran Belum Dibuka</span></h3>
        <p>Aplikasi Pendaftaran Mahasiswa Baru - STMIK Mardira Indonesia</p>
      </div>
      <p class="description">Pendaftaran dapat dilakukan mulai dari tanggal <b><?= tgl_indonesia($tgl_buka); ?></b> sampai dengan tanggal <b><?= tgl_indonesia($tgl_tutup); ?></b> melalui Aplikasi PMB STMIK Mardira Indonesia</p>
    </div>
  </section>

  <!-- ======= Info PMB ======= -->
  <section id="team" class="faq section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Info</h2>
        <h3>Penerimaan <span>Mahasiswa Baru</span></h3>
        <p>Penerimaan Mahasiswa Baru Universitas STMIK Mardira Indonesia diselenggarakan dengan prinsip adil dan tidak diskriminatif.</p>
      </div>

      <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

        <li>
          <a data-toggle="collapse" class="collapsed" href="#faq1">Syarat Pendaftaran Mahasiswa Baru (Reguler) <i class="icofont-simple-up"></i></a>
          <div id="faq1" class="collapse" data-parent=".faq-list">
            <p>
              Membayar uang pendaftaran di bagian pendaftaran STMIK Mardira Indonesia. Melalukan pendaftaran pada Aplikasi PMB STMIK Mardira Indonesia. Fotocopy Ijazah dan Tranzkip Nilai SLTA dan yang sederajat atau Surat Tanda Kelulusan yang dilegalisir. Pas photo 3 x 4. Fotocopy KTP dan Kartu Keluarga. Mengikuti Ujian Masuk PMB STMIK Mardira Indonesia.
            </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq2" class="collapsed">Syarat Pendaftaran Mahasiswa Baru Pindahan/Transfer <i class="icofont-simple-up"></i></a>
          <div id="faq2" class="collapse" data-parent=".faq-list">
            <p>
              Membayar uang pendaftaran di bagian pendaftaran STMIK Mardira Indonesia. Melalukan pendaftaran pada Aplikasi PMB STMIK Mardira Indonesia. Foto copy transkrip kumulatif yang dilegalisir oleh Perguruan Tinggiyang bersangkutan. Fotocopy Ijazah SLTA dan sederajat yang dilegalisir. Pas photo 3 x 4. Fotocopy KTP dan Kartu Keluarga. Mengikuti Ujian Masuk PMB STMIK Mardira Indonesia.
            </p>
          </div>
        </li>

      </ul>

    </div>
  </section>
  
</main>
<?= $this->endSection() ?>

