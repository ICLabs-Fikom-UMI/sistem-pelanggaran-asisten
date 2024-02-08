<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div id="modal-size" class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header" style="background: #06253A; color: #fff;"> 
        <h5 class="modal-title fs-5"></h5>
        <div data-bs-theme="dark">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <span class="tombol"></span>
        <span class="batal"></span>
      </div>
    </div>
  </div>
</div>

</div>
</div>
<aside class="control-sidebar control-sidebar-dark"></aside>

<!-- LINK SCRIPT -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<script>
  $(document).ready(function() {
      $('#example').DataTable();
  });
  // DATA ASISTEN
  function tambahDataAsisten() {
    $('.modal-title').html('Tambah Data');
    let url = '<?= BASEURL ?>/Asisten/modalTambah';
    $.get(url, function (data, success) {
        $('.modal-body').html(data);

        let tombolHTML = `
            <div class="text-center">
                <button type="submit" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;">Tambah</button>
                <button type="button" class="btn btn-primary ml-2" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>
            </div>
        `;
        $('#formTambahDataAsisten').append(tombolHTML);
    });
  }
  function ubahdata(x){
      $('.modal-title').html('Ubah Data');
      let url = '<?= BASEURL?>/Asisten/ubahModal';
      $.post(url, {
        id : x
      }, function(data, success){
        $('.modal-body').html(data);
      });
  }
  function hapus(a){
    $('.modal-title').html('Hapus Data');
    $('.modal-body').html('Yakin Untuk Manghapus Data Tersebut?');       
    $('.tombol').html('<a href="<?= BASEURL?>/Asisten/hapus/'+ a +'" class="btn btn-primary" style="background: #06253A; color= #FFFFFF;">Hapus</a>');
    $('.batal').html('<button type="button" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>');
  }
  // BAGIAN PELANGGARAN
  function tambahDataPelanggaran() {
    $('.modal-title').html('Tambah Data');
    let url = '<?= BASEURL ?>/Pelanggaran/modalTambah';
    $.get(url, function (data, success) {
        $('.modal-body').html(data);

        let tombolHTML = `
            <div class="text-center">
                <button type="submit" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;">Tambah</button>
                <button type="button" class="btn btn-primary ml-2" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>
            </div>
        `;
        $('#formTambahDataPelanggaran').append(tombolHTML);
    });
  }
  function ubahdataPelanggaran(dp){
      $('.modal-title').html('Ubah Data');
      let url = '<?= BASEURL?>/Pelanggaran/ubahModal';
      $.post(url, {
        id : dp
      }, function(data, success){
        $('.modal-body').html(data);
      });
  }
  function hapusdataPelanggaran(hdp){
    $('.modal-title').html('Hapus Data');
    $('.modal-body').html('Yakin Untuk Manghapus Data Tersebut?');       
    $('.tombol').html('<a href="<?= BASEURL?>/Pelanggaran/hapus/'+ hdp +'" class="btn btn-primary" style="background: #06253A; color= #FFFFFF;">Hapus</a>');
    $('.batal').html('<button type="button" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>');
  }    
  // BAGIAN TINDAK LANJUT
  function tambahDataTL() {
    $('.modal-title').html('Tambah Data');
    let url = '<?= BASEURL ?>/TindakLanjut/modalTambah';
    $.get(url, function (data, success) {
        $('.modal-body').html(data);        
        let tombolHTML = `
            <div class="text-center">
                <button type="submit" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;">Tambah</button>
                <button type="button" class="btn btn-primary ml-2" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>
            </div>
        `;
        $('#formTambahData').append(tombolHTML);
    });
  }
  function ubahdataTL(tl){
    $('.modal-title').html('Ubah Data');
    let url = '<?= BASEURL?>/TindakLanjut/ubahModal';
    $.post(url, {
      id : tl
    }, function(data, success){
      $('.modal-body').html(data);
    });
  }
  function hapusTL(htl){
    $('.modal-title').html('Hapus Data');
    $('.modal-body').html('Yakin Untuk Manghapus Data Tersebut?');       
    $('.tombol').html('<a href="<?= BASEURL?>/TindakLanjut/hapus/'+ htl +'" class="btn btn-primary" style="background: #06253A; color= #FFFFFF;">Hapus</a>');
    $('.batal').html('<button type="button" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>');
  }
  // BAGIAN KELAS
  function tambahDataKelas() {
    $('.modal-title').html('Tambah Data');
    let url = '<?= BASEURL ?>/Kelas/modalTambah';
    $.get(url, function (data, success) {
        $('.modal-body').html(data);        
        let tombolHTML = `
            <div class="text-center">
                <button type="submit" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;">Tambah</button>
                <button type="button" class="btn btn-primary ml-2" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>
            </div>
        `;
        $('#formTambahData').append(tombolHTML);
    });
  }
  function ubahdataKelas(kelas){
    $('.modal-title').html('Ubah Data');
    let url = '<?= BASEURL?>/Kelas/ubahModal';
    $.post(url, {
      id : kelas
    }, function(data, success){
      $('.modal-body').html(data);
    });
  }
  function hapusKelas(hkelas){
    $('.modal-title').html('Hapus Data');
    $('.modal-body').html('Yakin Untuk Manghapus Data Tersebut?');       
    $('.tombol').html('<a href="<?= BASEURL?>/Kelas/hapus/'+ hkelas +'" class="btn btn-primary" style="background: #06253A; color= #FFFFFF;">Hapus</a>');
    $('.batal').html('<button type="button" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>');
  }
  // BAGIAN ANGKATAN
  function tambahDataAngkatan() {
    $('.modal-title').html('Tambah Data');
    let url = '<?= BASEURL ?>/Angkatan/modalTambah';
    $.get(url, function (data, success) {
        $('.modal-body').html(data);        
        let tombolHTML = `
            <div class="text-center">
                <button type="submit" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;">Tambah</button>
                <button type="button" class="btn btn-primary ml-2" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>
            </div>
        `;
        $('#formTambahData').append(tombolHTML);
    });
  }
  function ubahdataAngkatan(angkatan){
    $('.modal-title').html('Ubah Data');
    let url = '<?= BASEURL?>/Angkatan/ubahModal';
    $.post(url, {
      id : angkatan
    }, function(data, success){
      $('.modal-body').html(data);
    });
  }
  function hapusAngkatan(hangkatan){
    $('.modal-title').html('Hapus Data');
    $('.modal-body').html('Yakin Untuk Manghapus Data Tersebut?');       
    $('.tombol').html('<a href="<?= BASEURL?>/Angkatan/hapus/'+ hangkatan +'" class="btn btn-primary" style="background: #06253A; color= #FFFFFF;">Hapus</a>');
    $('.batal').html('<button type="button" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>');
  }
  // BAGIAN JURUSAN
  function tambahDataJurusan() {
    $('.modal-title').html('Tambah Data');
    let url = '<?= BASEURL ?>/Jurusan/modalTambah';
    $.get(url, function (data, success) {
        $('.modal-body').html(data);        
        let tombolHTML = `
            <div class="text-center">
                <button type="submit" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;">Tambah</button>
                <button type="button" class="btn btn-primary ml-2" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>
            </div>
        `;
        $('#formTambahData').append(tombolHTML);
    });
  }
  function ubahdataJurusan(jurusan){
    $('.modal-title').html('Ubah Data');
    let url = '<?= BASEURL?>/Jurusan/ubahModal';
    $.post(url, {
      id : jurusan
    }, function(data, success){
      $('.modal-body').html(data);
    });
  }
  function hapusJurusan(hjurusan){
    $('.modal-title').html('Hapus Data');
    $('.modal-body').html('Yakin Untuk Manghapus Data Tersebut?');       
    $('.tombol').html('<a href="<?= BASEURL?>/Jurusan/hapus/'+ hjurusan +'" class="btn btn-primary" style="background: #06253A; color= #FFFFFF;">Hapus</a>');
    $('.batal').html('<button type="button" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>');
  }
  // BAGIAN STATUS
  function tambahDataStatus() {
    $('.modal-title').html('Tambah Data');
    let url = '<?= BASEURL ?>/Status/modalTambah';
    $.get(url, function (data, success) {
        $('.modal-body').html(data);        
        let tombolHTML = `
            <div class="text-center">
                <button type="submit" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;">Tambah</button>
                <button type="button" class="btn btn-primary ml-2" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>
            </div>
        `;
        $('#formTambahData').append(tombolHTML);
    });
  }
  function ubahdataStatus(status){
    $('.modal-title').html('Ubah Data');
    let url = '<?= BASEURL?>/Status/ubahModal';
    $.post(url, {
      id : status
    }, function(data, success){
      $('.modal-body').html(data);
    });
  }
  function hapusStatus(hstatus){
    $('.modal-title').html('Hapus Data');
    $('.modal-body').html('Yakin Untuk Manghapus Data Tersebut?');       
    $('.tombol').html('<a href="<?= BASEURL?>/Status/hapus/'+ hstatus +'" class="btn btn-primary" style="background: #06253A; color= #FFFFFF;">Hapus</a>');
    $('.batal').html('<button type="button" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>');
  }
  // BAGIAN USER
  function tambahDataUser() {
    $('.modal-title').html('Tambah Data');
    let url = '<?= BASEURL ?>/User/modalTambah';
    $.get(url, function (data, success) {
        $('.modal-body').html(data);        
        let tombolHTML = `
            <div class="text-center">
                <button type="submit" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;">Tambah</button>
                <button type="button" class="btn btn-primary ml-2" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>
            </div>
        `;
        $('#formTambahData').append(tombolHTML);
    });
  }
  function ubahdataUser(user){
    $('.modal-title').html('Ubah Data');
    let url = '<?= BASEURL?>/User/ubahModal';
    $.post(url, {
      id : user
    }, function(data, success){
      $('.modal-body').html(data);
    });
  }
  function hapusUser(huser){
    $('.modal-title').html('Hapus Data');
    $('.modal-body').html('Yakin Untuk Manghapus Data Tersebut?');       
    $('.tombol').html('<a href="<?= BASEURL?>/User/hapus/'+ huser +'" class="btn btn-primary" style="background: #06253A; color= #FFFFFF;">Hapus</a>');
    $('.batal').html('<button type="button" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>');
  }
  // BAGIAN NOTIFIKASI
  function tambahDataNotifikasi() {
    $('.modal-title').html('Tambah Data');
    let url = '<?= BASEURL ?>/Notifikasi/modalTambah';
    $.get(url, function (data, success) {
        $('.modal-body').html(data);

        let tombolHTML = `
            <div class="text-center">
                <button type="submit" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;">Tambah</button>
                <button type="button" class="btn btn-primary ml-2" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>
            </div>
        `;
        $('#formTambahDataNotifikasi').append(tombolHTML);
    });
  }
  function ubahdataNotifikasi(nt){
      $('.modal-title').html('Ubah Data');
      let url = '<?= BASEURL?>/Notifikasi/ubahModal';
      $.post(url, {
        id : nt
      }, function(data, success){
        $('.modal-body').html(data);
      });
  }
  function hapusNotifikasi(hnt){
    $('.modal-title').html('Hapus Data');
    $('.modal-body').html('Yakin Untuk Manghapus Data Tersebut?');       
    $('.tombol').html('<a href="<?= BASEURL?>/Notifikasi/hapus/'+ hnt +'" class="btn btn-primary" style="background: #06253A; color= #FFFFFF;">Hapus</a>');
    $('.batal').html('<button type="button" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>');
  }
  // BAGIAN LOGOUT
  $('#logout').on('click', function() {
    let keluar = '<a href="<?= BASEURL?>/LogIn/logout">Keluar</a>';
    var confirmation = window.confirm('Anda Yakin Akan Keluar');
    if (confirmation) {
        window.alert('Keluar');
        keluar;
    } else {
        window.alert('Batal');
    }
  });
  $('#logoutLink').on('click', function() {
  var confirmation = window.confirm('Anda Yakin Akan Keluar');

  if (confirmation) {
      $.ajax({
          url: '<?= BASEURL ?>/LogIn/logout',
          type: 'GET',
          success: function(response) {
              window.alert('Keluar');
              window.location.href = response.redirect;
          },
          error: function() {
              window.alert('Gagal Keluar');
            }
        });
    } else {
        window.alert('Batal');
    }
  });
</script>
</body>
</html>