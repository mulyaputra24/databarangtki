@extends('layout.main')
@section('title') Tabel Barang TKJ @endsection
@section('konten')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      

<div class="container">
  <div class="card">
    <div class="card-body">
      <a class="btn btn-sm btn-primary" href="{{url('barang/create')}}" style="margin-bottom: 10px;">Tambah Data +</a>

      <div class="row g-3 align-items-center mb-1 mt-2">
        <div class="col-auto">
          <form action="{{url('barang/index')}}" method="GET">
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
          <a href="/exportpdftkj" class="btn btn-info">Export PDF</a>
      </div>
      <br>
      <table class="table table-bordered col-12 table-striped" >
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Type</th>
            <th>Jumlah Barang</th>
            <th>Tahun Perolehan</th>
            <th>Kondisi</th>
            <th>Tempat Barang</th>  
            <th>Gambar</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($data as $index => $row)
        <tr>
            <th scope="row">{{ $index + $data-> firstItem() }}</th>
            <td>{{$row->nama_barang}}</td>
            <td>{{$row->type}}</td>
            <td>{{$row->jumlah_barang}}</td>
            <td>{{$row->tahun_barang}}</td>
            <td>{{$row->kondisi}}</td>
            <td>{{$row->tempat_barang}}</td>
            {{-- <td><img src="{{asset('assets/featured_images/'.$row->image)}}" width="50" height="50"></td> --}}
            <td><a href="{{asset('assets/featured_images/'.$row->image)}}"><img src="{{asset('assets/featured_images/'.$row->image)}}" width="50" height="50"></a> </td>
            <td>
              <a href="{{url('barang/edit/'.$row->id)}}" class="btn btn-info">Edit</a>
              <a href="{{url('barang/delete/'.$row->id)}}" class="btn btn-danger delete" onclick="return confirm('Apakah anda yakin mau menghapusnya?')">Delete</a> 
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