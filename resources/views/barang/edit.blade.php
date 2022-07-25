@extends('layout.main')
@section('title') Tabel Barang @endsection
@section('konten')

<h1></h1>
  <div class="container">
    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Alat</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('barang/update/'.$result->id)}}" method="post" enctype="multipart/form-data">
            @csrf 
            <div class="card-body">
              <div class="form-group">
                  <label for="exampleInputNama1">Nama Barang</label>
                  <input type="text" name="nama_barang" class="form-control" id="exampleInputNama1" placeholder="Enter nama barang" value="{{$result->nama_barang}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputTempatLahir1">Type</label>
                  <input type="text" name="type" class="form-control" id="exampleInputTempatLahir1" placeholder="Enter Type Barang" value="{{$result->type}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputTanggalLahir1">Jumlah Barang</label>
                  <input type="text" name="jumlah_barang" class="form-control" id="exampleInputTanggalLahir1" placeholder="Enter Jumlah Barang" value="{{$result->jumlah_barang}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputNip1">Tahun Barang</label>
                  <input type="text" name="tahun_barang" class="form-control" id="exampleInputNip1" placeholder="Enter Tahun Barang" value="{{$result->tahun_barang}}">
              </div>
              <div class="form-group">
                <label for="exampleInputPendidikan1">Kondisi Barang</label>
                <select name="kondisi" class="form-control">
                  <option value="0" disabled>Pilih Kondisi Barang</option>
                  <option {{$result->kondisi == 'baik' ? 'selected' :''}} value="baik">Baik</option>
                  <option {{$result->kondisi == 'rusak_ringan' ? 'selected' :''}} value="rusak_ringan">Rusak Ringan</option>
                  <option {{$result->kondisi == 'rusak_berat' ? 'selected' :''}} value="rusak_berat">Rusak Berat</option>
                </select>
            </div>
              <div class="form-group">
                  <label for="exampleInputKeterangan1">Tempat Barang</label>
                  <input type="text" name="tempat_barang" class="form-control" id="exampleInputKeterangan1" placeholder="Enter Lokasi" value="{{$result->tempat_barang}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputKeterangan1">Gambar</label>
                  @if($result->image != null)
                  <div class="form-group">
                     <img src="{{asset('assets/featured_images/'.$result->image)}}" width="50" height="50">
                  </div>
                  @endif
                  <input type="file" name="image" class="form-control" id="exampleInputKeterangan1" placeholder="Enter Foto">
                  <p style="color:red;">Kosongkan jika tidak ingin merubah foto</p>
              </div>
                  <div class="input-group-append">
                    
                  </div>
                </div>
              </div>
              <div class="form-check">
                
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection