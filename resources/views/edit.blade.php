<div class="p2">
    <div class="form-group">
        <label for="name"> Nama</label>
        <input type="text" name="nama" id="nama" value="{{ $data->nama }}" class="form-control"></input>
    </div>
    <div class="form-group">
        <label for="alamat"> Alamat</label>
        <input type="text" name="alamat" id="alamat" value="{{ $data->alamat }}" class="form-control"></input>
    </div>
    <div class="form-group">
        <label for="jabatan"> Jabatan</label>
        <input type="text" name="jabatan" id="jabatan" value="{{ $data->jabatan }}" class="form-control"></input>
    </div>
    <div class="form-group">
        <label for="namaPerusahaan"> Nama Perusahaan</label>
        <input type="text" name="namaPerusahaan" id="namaPerusahaan" value="{{ $data->namaPerusahaan }}" class="form-control"></input>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>
        <button type="button" class="btn btn-warning" onclick="update('{{$data->id}}')">Update</button>
      </div>
</div>