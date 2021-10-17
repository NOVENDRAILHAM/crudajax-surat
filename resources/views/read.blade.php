<table class="table">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Nama Perusahaan</th>
      <th scope="col">Pilih Surat</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $row)
    <tr>
      <td>{{$row->nama}}</td>
      <td>{{$row->alamat}}</td>
      <td>{{$row->jabatan}}</td>
      <td>{{$row->namaPerusahaan}}</td>
      <td>
        <div class="btn-group">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Pilih Surat
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('suratijin', $row->id)}}">Surat Ijin Kerja</a></li>
            <li><a class="dropdown-item" href="{{route('suratlamar', $row->id)}}">Surat Lamar Kerja</a></li>
        </ul>
        </div>
      <td>
      <button type="button" class="btn btn-warning" onclick="edit('{{$row->id}}')"><i class="fas fa-edit"></i></button>
      <button type="button" class="btn btn-danger" onclick="destroy('{{$row->id}}')"><i class="fas fa-trash"></i></button>
      </td>
    </tr>
    @endforeach
  </tbody>
  </table>