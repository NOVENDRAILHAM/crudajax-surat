<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>CRUD AJAX</title>
  </head>
  <body>
<div class="container-fluid"><br>
  <h1 style="text-align: center;">Assignment CRUD AJAX</h1><br>
  <div id="alerts"></div>
  <button style="margin-right: 20px;" type="button" class="btn btn-success float-end" onclick="create()" >
  Tambah Data
  </button>
  <div id="read" class="mt-3"></div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div id="page" class="p-2"></div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>  

    <script>
      $(document).ready(function() {
        read()
      });

       //read
      function read() {
        $.get("{{ url('read')}}", {} , function(data, status) {
          $("#read").html(data);
        });
      }

      //modal create
      function create() {
          $.get("{{ url('create')}}",{},function(data,status) {
          $("#page").html(data);
          $("#exampleModal").modal('show');
        });
      }
      //store
      function store(){
        var nama = $("#nama").val();
        var alamat = $("#alamat").val();
        var jabatan = $("#jabatan").val();
        var namaPerusahaan = $("#namaPerusahaan").val();
        $.ajax({
          type:"get",
          url:"{{url('store')}}",
          data: {
            'nama' : nama,
            'alamat' : alamat,
            'jabatan' : jabatan,
            'namaPerusahaan' : namaPerusahaan
          },
          success: function(data) {
      
           $(".btn-close").click();
           read()
           alertSuccess("<strong>Data berhasil ditambah</strong>");
          }
        });
      }
      function edit(id) {
          $.get("{{ url('edit')}}/"+id,{},function(data,status) {
          $("#exampleModalLabel").html('Edit Data');  
          $("#page").html(data);
          $("#exampleModal").modal('show');
        });
      }

       //update
       function update(id){
        var nama = $("#nama").val();
        var alamat = $("#alamat").val();
        var jabatan = $("#jabatan").val();
        var namaPerusahaan = $("#namaPerusahaan").val();
        $.ajax({
          type:"get",
          url:"{{url('update')}}/" +id,
          data: {
            'nama' : nama,
            'alamat' : alamat,
            'jabatan' : jabatan,
            'namaPerusahaan' : namaPerusahaan
          },
          success: function(data) {
           $(".btn-close").click();
           read()
           alertEdit("<strong>Data berhasil diupdate!</strong>");
          }
        });
      }

      //Delete
      function destroy(id){
        var nama = $("#nama").val();
        var alamat = $("#alamat").val();
        var jabatan = $("#jabatan").val();
        var namaPerusahaan = $("#namaPerusahaan").val();
        if (confirm("Yakin ingin menghapus data?")) {
          
        $.ajax({
          type:"get",
          url:"{{url('destroy')}}/" +id,
          data: {
            'nama' : nama,
            'alamat' : alamat,
            'jabatan' : jabatan,
            'namaPerusahaan' : namaPerusahaan
          },
          success: function(data) {
            alertDanger("<strong>Data berhasil dihapus</strong>");
            read()
          },
          error:function(data) {
            console.log('Error:', data);
          }
        });
        }  
      }
      
      function alertSuccess(message) {
        $('#alerts').append(
          '<div class="alert alert-success alert-dismissible fade show" role="alert">' + 
          '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' + message + '</div>'
        );
      }

      function alertDanger(message) {
        $('#alerts').append(
          '<div class="alert alert-danger alert-dismissible fade show" role="alert">' + 
          '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' + message + '</div>'
        );
      }
      function alertEdit(message) {
        $('#alerts').append(
          '<div class="alert alert-info alert-dismissible fade show" role="alert">' + 
          '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' + message + '</div>'
        );
      }
    </script>
  </body>
</html>
