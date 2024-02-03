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
        <button id="close" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
    function ubahdata(x){
        $('.modal-title').html('Ubah Data');
        let url = '<?= BASEURL?>/Asisten/ubahModal';
        $.post(url, {
          id : x
        }, function(data, success){
          $('.modal-body').html(data);
        });
        $('.tombol').html('<a href="<?= BASEURL?>/Asisten/prosesUbah/'+ x +'" class="btn btn-primary" style="background: #06253A; color= #FFFFFF;">Ubah Data</a>');
    }
    function hapus(a){
      $('.modal-title').html('Hapus Data');
      $('.modal-body').html('Yakin Untuk Manghapus Data Tersebut?');       
      $('.tombol').html('<a href="<?= BASEURL?>/Asisten/hapus/'+ a +'" class="btn btn-primary" style="background: #06253A; color= #FFFFFF;">Hapus</a>');
      $('#close').html('Batal');
    }
    // BAGIAN PELANGGARAN
    function ubahdataPelanggaran(dp){
        $('.modal-title').html('Ubah Data');
        let url = '<?= BASEURL?>/Pelanggaran/ubahModal';
        $.post(url, {
          id : dp
        }, function(data, success){
          $('.modal-body').html(data);
        });
        $('.tombol').html('<a href="<?= BASEURL?>/Pelanggaran/prosesUbah/'+ dp +'" class="btn btn-primary" style="background: #06253A; color= #FFFFFF;">Ubah Data</a>');
    }
    function hapusdataPelanggaran(hdp){
      $('.modal-title').html('Hapus Data');
      $('.modal-body').html('Yakin Untuk Manghapus Data Tersebut?');       
      $('.tombol').html('<a href="<?= BASEURL?>/Pelanggaran/hapus/'+ hdp +'" class="btn btn-primary" style="background: #06253A; color= #FFFFFF;">Hapus</a>');
      $('#close').html('Batal');
    }    
    // BAGIAN TINDAK LANJUT
    function ubahdataTL(tl){
        $('.modal-title').html('Ubah Data');
        let url = '<?= BASEURL?>/TindakLanjut/ubahModal';
        $.post(url, {
          id : tl
        }, function(data, success){
          $('.modal-body').html(data);
        });
        $('.tombol').html('<a href="<?= BASEURL?>/TindakLanjut/prosesUbah/'+ tl +'" class="btn btn-primary" style="background: #06253A; color= #FFFFFF;">Ubah Data</a>');
    }
    function hapusTL(htl){
      $('.modal-title').html('Hapus Data');
      $('.modal-body').html('Yakin Untuk Manghapus Data Tersebut?');       
      $('.tombol').html('<a href="<?= BASEURL?>/TindakLanjut/hapus/'+ htl +'" class="btn btn-primary" style="background: #06253A; color= #FFFFFF;">Hapus</a>');
      $('#close').html('Batal');
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
        // Proses logout dengan AJAX
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
    function tambahDataTL() {
        $('.modal-title').html('Tambah Data');
        let url = '<?= BASEURL ?>/TindakLanjut/modalTambah';
        $.get(url, function (data, success) {
            $('.modal-body').html(data);
        });
        $('.tombol').html('<button type="submit" class="btn btn-primary">Tambah Data</button>');
    }
    function tambahDataPelanggaran() {
        $('.modal-title').html('Tambah Data');
        let url = '<?= BASEURL ?>/Pelanggaran/modalTambah';
        $.get(url, function (data, success) {
            $('.modal-body').html(data);
        });
        $('.tombol').html('<button type="submit" class="btn btn-primary">Tambah Data</button>');
    }
    function tambahDataAsisten() {
        $('.modal-title').html('Tambah Data');
        let url = '<?= BASEURL ?>/Asisten/modalTambah';
        $.get(url, function (data, success) {
            $('.modal-body').html(data);
        });
        $('.tombol').html('<button type="submit" class="btn btn-primary">Tambah Data</button>');
    }
    function cari() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.querySelector("table");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
    function cari2() {
      var input, filter, table, tr, td1, td2, td3, td4, td5, i, txtValue;
      input = document.getElementById("searchInput");
      filter = input.value.toUpperCase();
      table = document.querySelector("table");
      tr = table.getElementsByTagName("tr");

      for (i = 0; i < tr.length; i++) {
          td1 = tr[i].getElementsByTagName("td")[1];
          td2 = tr[i].getElementsByTagName("td")[2];
          td3 = tr[i].getElementsByTagName("td")[3];
          td4 = tr[i].getElementsByTagName("td")[4];
          td5 = tr[i].getElementsByTagName("td")[5];
          
          if (td1 && td2) {
              txtValue = td1.textContent || td1.innerText;
              txtValue += " " + (td2.textContent || td2.innerText); 
              txtValue += " " + (td3.textContent || td3.innerText); 
              txtValue += " " + (td4.textContent || td4.innerText); 
              txtValue += " " + (td5.textContent || td5.innerText); 
              
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                  tr[i].style.display = "";
              } else {
                  tr[i].style.display = "none";
              }
          }
      }
  }
</script>
</body>
</html>