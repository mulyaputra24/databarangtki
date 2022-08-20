@extends('layout.main')
@section('title') Tabel Barang RPL @endsection
@section('konten')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<div class="container">
  <div class="card">
    <div class="card-body">
      <a class="btn btn-sm btn-primary" href="{{url('alat/create')}}" style="margin-bottom: 10px;">Tambah Data +</a>
      <div class="row g-3 align-items-center mb-1 mt-2">
        <div class="col-auto">
          <form action="{{url('alat/index')}}" method="GET">
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
          <a href="/exportpdfrpl" class="btn btn-info">Export PDF</a>
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
            <th>Info Detail</th>
            <th>Barcode</th>
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
            <td><a href="{{asset('assets/featured_images/'.$row->image)}}" title="Gambar"><img src="{{asset('assets/featured_images/'.$row->image)}}" width="50" height="50"></a> </td>
            <td><center><a href="{{url('alat/info/'.$row->id)}}" title="Detail Info" class="btn btn-info"> <i class="fas fa-info-circle" style="font-size:24px"></i></a></center></td>
            <td><center><a href="{{url('alat/scan/'.$row->id)}}" title="QR Code" class="btn btn-info"> <i class="fa fa-qrcode" style="font-size:25px"></i> </a></center></td>
            <td>
              <a href="{{url('alat/edit/'.$row->id)}}" title="Edit" class="btn btn-info" > <i class="fa fa-edit" style="font-size:24px"></i> </a>
              <a href="{{url('alat/delete/'.$row->id)}}" title="Hapus" class="btn btn-danger delete" onclick="return confirm('Apakah anda yakin mau menghapusnya?')"> <i class="fa fa-trash" style="font-size:25px"></i> </a> 
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


@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
    
  {{-- <script>
    $(".delete").click(function() {
        var pegawaiid = $(this).attr('data-id');
        var nama_barang = $(this).attr('data-nama_barang');
        
        swal({
              title: "Apakah Anda Yakin ?",
              text: "Kamu akan menghapus data pegawai dengan nama "+nama_barang+" ",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                // action delete data terhapus
                // {{url('alat/delete/'.$row->id)}}
                window.location = "alat/delete/"+pegawaiid+""   
                swal("Data Pegawai berhasil di hapus!", {
                  icon: "success",
                });
              } else {
                swal("Data pegawai tidak jadi di hapus");
              }
            });
    });      
  </script> --}}

{{-- <script>
  @if(Session::has('success')) 
      toastr.success("{{ Session::get('success') }}")
  @endif  
</script> --}}

    
@endpush

    
@endsection