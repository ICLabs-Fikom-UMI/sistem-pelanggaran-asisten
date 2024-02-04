<link rel="stylesheet" href="<?= BASEURL?>/assets/css/style.css">
<div class="container"><br>
      <h4><?= $data['title'];?></h4> 
      <!-- BAGIAN ASISTEN -->
      <?php if ($_SESSION['role'] == 'asisten') : ?>
      <div class="overflow-auto" style="max-height: 75vh;">
      <div class="text-dasboard">
            <p align="justify">
            Laboratorium Terpadu Fakultas Ilmu Komputer adalah fasilitas yang disediakan oleh Fakultas Ilmu Komputer yang digunakan untuk melakukan kegiatan praktikum dan penelitian dalam bidang ilmu komputer. Fasilitas ini dilengkapi dengan perangkat keras dan perangkat lunak yang dibutuhkan untuk melakukan eksperimen dan simulasi dalam berbagai bidang ilmu komputer, seperti jaringan komputer, keamanan informasi, kecerdasan buatan, pemrograman, dan lain-lain. Laboratorium Terpadu Fakultas Ilmu Komputer menjadi pusat kegiatan untuk mahasiswa dan dosen untuk melakukan eksperimen, riset, pengembangan, serta inovasi dalam bidang teknologi informasi.
            </p>
      </div>
      <div class="col-12">
      <div id="carouselExampleDark" class="carousel carousel-light slide">
            <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                  <img src="<?= BASEURL ?>/assets/img/pelanggaran.png" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                  <h5>Laboratorium Computer Vision</h5>
                  </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                  <img src="<?= BASEURL ?>/assets/img/asisten.png" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                  <h5>Laboratorium Computer Vision</h5>
                  </div>
            </div>
            <div class="carousel-item">
                  <img src="<?= BASEURL ?>/assets/img/tindak lanjut.png" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                  <h5>Laboratorium Data Science</h5>
                  </div>
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
      </div>
      </div>
      </div><br>
      <?php endif;?>
      <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab') : ?>
      <!-- BAGIAN ADMIN DAN KORLAB -->
      <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                  <div class="card">
                        <div class="card-body">
                              <h5 class="card-title">Data Pelanggaran</h5>
                              <p class="card-text">
                              <?php echo "Jumlah Data: " . $data['jumlahDataPelanggaran']; ?>
                              </p>
                              <a href="<?= BASEURL ?>/Pelanggaran" class="btn" style="background-color: #06253A; color: #FFFFFF;">Lihat Detail</a>
                        </div>
                  </div>
                  </div>
                  <?php if ($_SESSION['role'] == 'admin') : ?>
                  <div class="col-sm-6">
                  <div class="card">
                        <div class="card-body">
                              <h5 class="card-title">Data Asisten</h5>
                              <p class="card-text">
                              <?php echo "Jumlah Data: " . $data['jumlahDataAsisten']; ?>
                              </p>
                              <a href="<?= BASEURL ?>/Asisten" class="btn" style="background-color: #06253A; color: #FFFFFF;">Lihat Detail</a>
                        </div>
                  </div>
            </div>
            <?php endif; ?>
      </div>
      <?php endif;?>    
</div>
