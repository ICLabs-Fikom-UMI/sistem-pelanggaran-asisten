<link rel="stylesheet" href="<?= BASEURL?>/assets/css/style.css">
<div class="container"><br>
      <h4><?= $data['title'];?></h4> 
      <!-- BAGIAN ASISTEN -->
      <?php if ($_SESSION['role'] == 'asisten') : ?>
      <div class="text-dasboard">
            <p align="center">
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
                  <img src="<?= BASEURL ?>/assets/img/pelanggaran.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                  <h5>Laboratorium Computer Vision</h5>
                  </div>
            </div>
            <div class="carousel-item">
                  <img src="<?= BASEURL ?>/assets/img/jenis kelakuan.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                  <h5>Laboratorium Data Science</h5>
                  </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                  <img src="<?= BASEURL ?>/assets/img/asisten.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                  <h5>Laboratorium Computer Vision</h5>
                  </div>
            </div>
            <div class="carousel-item">
                  <img src="<?= BASEURL ?>/assets/img/tindak lanjut.jpg" class="d-block w-100" alt="...">
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
      </div><br>
      <?php endif;?>
      <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab') : ?>
      <!-- BAGIAN ADMIN DAN KORLAB -->
      <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                  <div class="card h-100">
                        <img src="<?= BASEURL ?>/assets/img/pelanggaran.jpg" class="card-img-top" alt="Pelanggaran">
                        <div class="card-body">
                        <h6 class="card-title">Data Pelanggaran</h6>
                        <p class="card-text">
                              <?php
                                    echo "Jumlah Data: " . $data['jumlahDataPelanggaran'];
                              ?>
                        </p>
                        </div>
                  </div>
            </div>
            <?php if ($_SESSION['role'] == 'admin') : ?>
            <div class="col">
                  <div class="card h-100">
                        <img src="<?= BASEURL ?>/assets/img/asisten.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h6 class="card-title">Data Asisten</h6>
                        <p class="card-text">
                              <?php
                                    echo "Jumlah Data: " . $data['jumlahDataAsisten'];
                              ?>
                        </p>
                        </div>
                  </div>
            </div>
            <?php endif;?>
            <div class="col">
                  <div class="card h-100">
                        <img src="<?= BASEURL ?>/assets/img/jenis kelakuan.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h6 class="card-title">Data Jenis Kelakuan</h6>
                        <p class="card-text">
                              <?php
                                    echo "Jumlah Data: " . $data['jumlahDataJenisKelakuan'];
                              ?>
                        </p>
                        </div>
                  </div>
            </div>
            <div class="col">
                  <div class="card h-100">
                        <img src="<?= BASEURL ?>/assets/img/tindak lanjut.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h6 class="card-title">Data Tindak Lanjut</h6>
                        <p class="card-text">
                              <?php
                                    echo "Jumlah Data: " . $data['jumlahDataTindakLanjut'];
                              ?>
                        </p>
                        </div>
                  </div>
            </div>
      </div>
      <?php endif;?>
</div>