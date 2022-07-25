@extends('layout.main')
@section('title') Tabel Guru @endsection
@section('konten')

<h1></h1>
  <div class="container">
    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Guru</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('guru/update/'.$result->id)}}" method="post" enctype="multipart/form-data">
            @csrf 
            <div class="card-body">
              <div class="form-group">
                  <label for="exampleInputNama1">Nama</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputNama1" placeholder="Enter nama" value="{{$result->nama}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputTempatLahir1">Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" class="form-control" id="exampleInputTempatLahir1" placeholder="Enter tempat lahir" value="{{$result->tempat_lahir}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputTanggalLahir1">Tanggal Lahir</label>
                  <input type="date" name="tanggal_lahir" class="form-control" id="exampleInputTanggalLahir1" placeholder="Enter tanggal lahir" value="{{$result->tanggal_lahir}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputNip1">Nip</label>
                  <input type="text" name="nip" class="form-control" id="exampleInputNip1" placeholder="Enter nip" value="{{$result->nip}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputGolongan1">Golongan</label>
                  <select name="golongan" class="form-control">
                    <option value="0" disabled>Pilih Golongan</option>
                    <option {{$result->golongan == '1/a' ? 'selected' :''}} value="1/a">I/a</option>
                    <option {{$result->golongan == '1/b' ? 'selected' :''}} value="1/b">I/b</option>
                    <option {{$result->golongan == '1/c' ? 'selected' :''}} value="1/c">I/c</option>
                    <option {{$result->golongan == '1/d' ? 'selected' :''}} value="1/d">I/d</option>
                    <option {{$result->golongan == '2/a' ? 'selected' :''}} value="2/a">II/a</option>
                    <option {{$result->golongan == '2/b' ? 'selected' :''}} value="2/b">II/b</option>
                    <option {{$result->golongan == '2/c' ? 'selected' :''}} value="2/c">II/c</option>
                    <option {{$result->golongan == '2/d' ? 'selected' :''}} value="2/d">II/d</option>
                    <option {{$result->golongan == '3/a' ? 'selected' :''}} value="3/a">III/a</option>
                    <option {{$result->golongan == '3/b' ? 'selected' :''}} value="3/b">III/b</option>
                    <option {{$result->golongan == '3/c' ? 'selected' :''}} value="3/c">III/c</option>
                    <option {{$result->golongan == '3/d' ? 'selected' :''}} value="3/d">III/d</option>
                    <option {{$result->golongan == '4/a' ? 'selected' :''}} value="4/a">IV/a</option>
                    <option {{$result->golongan == '4/b' ? 'selected' :''}} value="4/b">IV/b</option>
                    <option {{$result->golongan == '4/c' ? 'selected' :''}} value="4/c">IV/c</option>
                    <option {{$result->golongan == '4/d' ? 'selected' :''}} value="4/d">IV/d</option>
                    <option {{$result->golongan == '-' ? 'selected' :''}} value="-">Tidak ada Golongan</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="exampleInputPendidikan1">Pendidikan</label>
                  <select name="pendidikan" class="form-control">
                    <option value="0" disabled>Pilih Jenis Pendidikan</option>
                    <option {{$result->pendidikan == 'SMA' ? 'selected' :''}} value="SMA">SMA</option>
                    <option {{$result->pendidikan == 'D3' ? 'selected' :''}} value="D3">D3</option>
                    <option {{$result->pendidikan == 'D4/S1' ? 'selected' :''}} value="D4/S1">D4/S1</option>
                    <option {{$result->pendidikan == 'S2' ? 'selected' :''}} value="S2">S2</option>
                    <option {{$result->pendidikan == 'S3' ? 'selected' :''}} value="S3">S3</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="exampleInputBidangStudi1">Bidang Studi</label>
                  <input type="text" name="bidang_studi" class="form-control" id="exampleInputBidangStudi1" placeholder="Enter bidang studi" value="{{$result->bidang_studi}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputKeterangan1">Keterangan</label>
                  <input type="text" name="keterangan" class="form-control" id="exampleInputKeterangan1" placeholder="Enter Keterangan" value="{{$result->keterangan}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputKeterangan1">Foto</label>
                  @if($result->image != null)
                  <div class="form-group">
                     <img src="{{asset('assets/featured_images/'.$result->image)}}" width="50" height="50">
                  </div>
                  @endif
                  <input type="file" name="image" class="form-control" id="exampleInputKeterangan1" placeholder="Enter Keterangan">
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