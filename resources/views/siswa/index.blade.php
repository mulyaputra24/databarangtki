@extends('layout.main')
@section('title') Tabel Siswa @endsection
@section('konten')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      

<div class="container">
  <div class="card">
    <div class="card-body">
      <a class="btn btn-sm btn-primary" href="{{url('siswa/create')}}" style="margin-bottom: 10px;">Tambah Data +</a>

      <div class="row g-3 align-items-center mb-1 mt-2">
        <div class="col-auto">
          <form action="{{url('siswa/index')}}" method="GET">
            <div class="form-group w-100 mb-4">
              <label for="search" class="d-block mr-2">Pencarian</label>
              <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">
              <button type="submit" class="btn btn-primary mb-1">
                <i class="fas fa-search fa-fw"></i>
              </button>
          </div>
          </form>
        </div>

        <div class="col-auto">
          <a href="/exportpdfsiswa" class="btn btn-info">Export PDF</a>
      </div>
      <br>
      <table class="table table-bordered col-12 table-striped" >
        <thead>
          <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Agama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>  
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php
          $no = 1;
          @endphp
          
          @foreach($data as $index => $row)
          <tr>
          <th scope="row">{{ $index + $data-> firstItem() }}</th>
            <td>{{$row->nis}}</td>
            <td>{{$row->nama}}</td>
            <td>{{$row->agama}}</td>
            <td>{{$row->jenis_kelamin}}</td>
            <td>{{$row->tempat_lahir}}</td>
            <td>{{$row->tanggal_lahir}}</td>
            <td>{{$row->alamat}}</td>
            <td>
              <a href="{{url('siswa/edit/'.$row->id)}}" class="btn btn-info">Edit</a>
              <a href="{{url('siswa/delete/'.$row->id)}}" class="btn btn-danger delete" onclick="return confirm('Apakah anda yakin mau menghapusnya?')">Delete</a> 
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
          Current Page: {{ $data->currentPage() }}<br>
          Jumlah Data: {{ $data->total() }}<br>
          Data perhalaman: {{ $data->perPage() }}<br>
          <br>
          {{ $data->links() }} 

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  


@endsection