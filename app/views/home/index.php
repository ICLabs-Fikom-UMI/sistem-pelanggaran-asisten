<link rel="stylesheet" href="<?= BASEURL?>/assets/css/style.css">
<div class="container"><br>
      <h5><?= $data['title'];?></h5> 
      <!-- BAGIAN ASISTEN -->
      <!-- <?php if ($_SESSION['role'] == 'asisten') : ?>
      <div class="overflow-x-hidden" style="max-height: 62vh;">
                  <table id="example" class="table" style="width:100%">
                        <thead class="table-light">
                              <tr class="table-secondary">
                                        <th scope="col" style="width:5%;" class="text-center">No</th>
                                    <th scope="col">Desktripsi Pesan</th>
                                    <th scope="col">Tanggal</th>
                              </tr>
                        </thead>
                        <tbody>
                              <?php $no=0; foreach  ($data['notifikasi'] as $notifikasi) : $no++;?>
                              <tr>
                                    <td align="center"><?= $no;?></td>
                                    <td><?= $notifikasi['pesan'];?></td>
                                    <td><?= $notifikasi['tanggal'];?></td>
                                    </td>
                              </tr>
                              <?php endforeach; ?>
                        </tbody>
                  </table>
            </div>
      <?php endif;?> -->
      <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab') : ?>
      <!-- BAGIAN ADMIN DAN KORLAB -->
      <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                  <div class="card">
                        <div class="card-body">
                        <h5 class="card-title">Data Pelanggaran</h5>
                        <p class="card-text">
                              <?php foreach ($data['jumlahDataPelanggaranPer6Bulan'] as $jumlah) : ?>
                                    <?php echo 'Jumlah ' . $jumlah['periode'] . " : " . $jumlah['jumlah'] . ' Data'; ?>
                              <?php endforeach; ?>
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
                                    <?php echo "Jumlah : " . $data['jumlahDataAsisten'] . ' Data'; ?>
                              </p>
                              <a href="<?= BASEURL ?>/Asisten" class="btn" style="background-color: #06253A; color: #FFFFFF;">Lihat Detail</a>
                        </div>
                        </div>
                  </div>
            <?php endif; ?>
            </div>
      <?php endif;?>    
            
</div>
