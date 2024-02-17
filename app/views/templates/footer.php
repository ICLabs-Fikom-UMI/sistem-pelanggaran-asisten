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
  // PENGATURAN TABLE
  $(document).ready(function() {
      $('#example').DataTable();
  });
  function change(jenis, id) {
    $('.modal-title').html('Ubah Data');
    let url = '<?= BASEURL?>/' + jenis + '/ubahModal';
    $.post(url, {
        id: id
    }, function(data, success) {
        $('.modal-body').html(data);
    });
  }
  function add(jenis) {
    $('.modal-title').html('Tambah Data');
    let url = '<?= BASEURL ?>/' + jenis + '/modalTambah';
    $.get(url, function(data, success) {
        $('.modal-body').html(data);

        let formID = '#formTambahData' + jenis;
        let tombolHTML = `
            <div class="text-center">
                <button type="submit" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;">Tambah</button>
                <button type="button" class="btn btn-primary ml-2" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>
            </div>
        `;
        $(formID).append(tombolHTML);
    });
  }
  function deleteData(jenis, id) {
    $('.modal-title').html('Hapus Data');
    $('.modal-body').html(`
      <div class="text-center mb-3">
        Yakin Untuk Manghapus Data Tersebut?
      </div>
      <div class="text-center">
        <a href="<?= BASEURL ?>/${jenis}/hapus/${id}" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;">Hapus</a>
        <button type="button" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>
      </div>
    `);
  }
  // BAGIAN LOGOUT
  // $('#logout').on('click', function() {
  //   let keluar = '<a href="<?= BASEURL?>/LogIn/logout">Keluar</a>';
  //   var confirmation = window.confirm('Anda Yakin Akan Keluar');
  //   if (confirmation) {
  //       window.alert('Keluar');
  //       keluar;
  //   } else {
  //       window.alert('Batal');
  //   }
  // });
  // $('#logoutLink').on('click', function() {
  // var confirmation = window.confirm('Anda Yakin Akan Keluar');
  // if (confirmation) {
  //     $.ajax({
  //         url: '<?= BASEURL ?>/LogIn/logout',
  //         type: 'GET',
  //         success: function(response) {
  //             window.alert('Keluar');
  //             window.location.href = response.redirect;
  //         },
  //         error: function() {
  //             window.alert('Gagal Keluar');
  //           }
  //       });
  //   } else {
  //       window.alert('Batal');
  //   }
  // });
  
  // Event handler untuk klik pada tombol logout dengan link langsung
// $('#logoutLink').on('click', function(event) {
//     event.preventDefault(); 
    
//     $('.modal-title').html('Konfirmasi Keluar');
//     $('.modal-body').html(`
//         <div class="text-center mb-3">
//             Anda yakin akan keluar?
//         </div>
//         <div class="text-center">
//             <a href="<?= BASEURL ?>/LogIn/logout" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;">Keluar</a>
//             <button type="button" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Batal</button>
//         </div>
//     `);
// });
$('#logoutLink').on('click', function(event) {
    event.preventDefault(); // Menghentikan tindakan default dari link

    // Menampilkan modal konfirmasi keluar
    $('.modal-title').html('Konfirmasi Keluar');
    $('.modal-body').html(`
        <div class="text-center mb-3">
            Anda yakin akan keluar?
        </div>
        <div class="text-center">
            <a href="<?= BASEURL ?>/LogIn/logout" class="btn btn-primary" style="background-color: #06253A;">Keluar</a>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </div>
    `);

    // Memunculkan modal
    $('#myModal').modal('show');
});
</script>
</body>
</html>