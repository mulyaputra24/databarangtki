@extends('layout.main')
@section('title') Tabel Guru @endsection
@section('konten')

  <h1></h1>
  <div class="container">
    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Guru</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('guru/store')}}" method ="post" enctype="multipart/form-data">
            @csrf  
            <div class="card-body">
              <div class="form-group">
                  <label for="exampleInputNama1">Nama</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputNama1" placeholder="Enter nama" required>
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
                  <label for="exampleInputNip1">Nip</label>
                  <input type="text" name="nip" class="form-control" id="exampleInputNip1" placeholder="Enter nip" required>
              </div>
              <div class="form-group">
                  <label for="exampleInputGolongan1">Golongan</label>
                  <select name="golongan" class="form-control" required >
                    <option value="0" disabled selected>Pilih Golongan</option>
                    <option value="1/a">I/a</option>
                    <option value="1/b">I/b</option>
                    <option value="1/c">I/c</option>
                    <option value="1/d">I/d</option>
                    <option value="2/a">II/a</option>
                    <option value="2/b">II/b</option>
                    <option value="2/c">II/c</option>
                    <option value="2/d">II/d</option>
                    <option value="3/a">III/a</option>
                    <option value="3/b">III/b</option>
                    <option value="3/c">III/c</option>
                    <option value="3/d">III/d</option>
                    <option value="4/a">IV/a</option>
                    <option value="4/b">IV/b</option>
                    <option value="4/c">IV/c</option>
                    <option value="4/d">IV/d</option>
                    <option value="-">Tidak ada Golongan</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="exampleInputPendidikan1">Pendidikan</label>
                  <select name="pendidikan" class="form-control" required>
                    <option value="0" disabled selected>Pilih Jenis Pendidikan</option>
                    <option value="SMA">SMA</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4/S1">D4/S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                    <option value="-">Tidak ada </option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="exampleInputBidangStudi1">Bidang Studi</label>
                  <input type="text" name="bidang_studi" class="form-control" id="exampleInputBidangStudi1" placeholder="Enter bidang studi" required>
              </div>
              <div class="form-group">
                  <label for="exampleInputKeterangan1">Keterangan</label>
                  <input type="text" name="keterangan" class="form-control" id="exampleInputKeterangan1" placeholder="Enter Keterangan" required>
              </div>
              <div class="form-group">
                  <label for="exampleInputKeterangan1">Foto</label>
                  <input type="file" name="image" class="form-control" id="exampleInputKeterangan1" placeholder="Enter Keterangan" required>
              </div>
                  <div class="input-group-append">
                    
                  </div>
                </div>
              </div>
              <div class="form-check">
                
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection