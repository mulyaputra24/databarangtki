@extends('layout.main')
@section('title') Tabel Siswa @endsection
@section('konten')

  <h1></h1>
  <div class="container">
    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Siswa</h3>
          </div>
          <!-- /.card-header --> 
          <!-- form start -->
          <form action="{{url('siswa/store')}}" method ="post">
            @csrf
            <div class="card-body">
              <div class="form-group">
                  <label for="exampleInputNis1">Nis</label>
                  <input type="text" name="nis" class="form-control" id="exampleInputNis1" placeholder="Enter nis" required>
              </div>
              <div class="form-group">
                  <label for="exampleInputNama1">Nama</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputNama1" placeholder="Enter nama" required>
              </div>
              <div class="form-group">
                <label for="exampleInputAgama1">Agama</label>
                <select name="agama" class="form-control" required>
                  <option value="0" disabled selected>Pilih Agama</option>
                  <option class="islam">Islam</option>
                  <option class="kristen">Kristen</option>
                  <option class="budha">Budha</option>
                  <option class="khatolik">Khatolik</option>
                  <option class="protestan">Protestan</option>
                  <option class="khonghucu">Khonghucu</option>
                </select>
              </div>
              <div class="form-group">
                  <label for="exampleInputjenis_kelamin1">Jenis Kelamin</label>
                  <select name="jenis_kelamin" class="form-control" required>
                    <option value="0" disabled selected>Pilih Jenis Kelamin</option>
                    <option class="laki_laki">Laki-Laki</option>
                    <option class="perempuan">Perempuan</option>
                  </select>
              </div>
               <div class="form-group">
                  <label for="exampleInputTempatLahir1">Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" class="form-control" id="exampleInputTempatLahir1" placeholder="Enter tempat lahir" required>
              </div>
              <div class="form-group">
                  <label for="exampleInputTanggalLahir1">Tanggal Lahir</label>
                  <input type="date" name="tanggal_lahir" class="form-control" id="exampleInputTanggalLahir1" placeholder="Enter tanggal lahir" required>
              </div>
               <div class="form-group">
                  <label for="exampleInputAlamat1">Alamat</label>
                  <input type="text" name="alamat" class="form-control" id="exampleInputAlamat1" placeholder="Enter alamat" required>
              </div>
              <div class="input-group-append" required>
                    
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


@endsection