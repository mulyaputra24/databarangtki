@extends('layout.main')
@section('title') Tabel Siswa @endsection
@section('konten')

<h1></h1>
  <div class="container">
    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Siswa</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('siswa/update/'.$result->id)}}" method="post">
            @csrf  
            <div class="card-body">
              <div class="form-group">
                  <label for="exampleInputNis1">Nis</label>
                  <input type="text" name="nis" class="form-control" id="exampleInputNis1" placeholder="Enter nis" value="{{$result->nis}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputNama1">Nama</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputNama1" placeholder="Enter nama" value="{{$result->nama}}">
              </div>
              <div class="form-group">
                <label for="exampleInputAgama1">Agama</label>
                <select name="agama" class="form-control">
                  <option value="0" disabled>Pilih Agama</option>
                  <option value="islam" {{$result->agama == 'islam' ? 'selected':''}}>Islam</option>
                  <option value="kristen" {{$result->agama == 'kristen' ? 'selected':''}}>Kristen</option>
                  <option value="budha" {{$result->agama == 'budha' ? 'selected':''}}>Budha</option>
                  <option value="khatolik" {{$result->agama == 'khatolik' ? 'selected':''}}>Khatolik</option>
                  <option value="protestan" {{$result->agama == 'protestan' ? 'selected':''}}>Protestan</option>
                  <option value="khonghucu" {{$result->agama == 'khonghucu' ? 'selected':''}}>Khonghucu</option>
                </select>
            </div>
              <div class="form-group">
                  <label for="exampleInputjenis_kelamin1">Jenis Kelamin</label>
                  <select name="jenis_kelamin" class="form-control">
                    <option value="0" disabled>Pilih Jenis Kelamin</option>
                    <option class="laki_laki"  value="laki-laki" {{$result->jenis_kelamin == 'laki-laki' ? 'selected':''}}>Laki-Laki</option>
                    <option class="perempuan" value="perempuan" {{$result->jenis_kelamin == 'perempuan' ? 'selected':''}}>Perempuan</option>
                  </select>
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
                  <label for="exampleInputAlamat1">Alamat</label>
                  <input type="text" name="alamat" class="form-control" id="exampleInputAlamat1" placeholder="Enter alamat" value="{{$result->alamat}}">
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