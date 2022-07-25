@extends('layout.main')
@section('title') Tabel Alat @endsection
@section('konten')

  <h1></h1>
  <div class="container">
    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Barang</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('barang/store')}}" method ="post" enctype="multipart/form-data">
            @csrf  
            <div class="card-body">
              <div class="form-group">
                  <label for="exampleInputNama1">Nama Barang</label>
                  <input type="text" name="nama_barang" class="form-control" id="exampleInputNama1" placeholder="Enter nama" required>
              </div>
              <div class="form-group"> 
                  <label for="exampleInputTempatLahir1">Type</label>
                  <input type="text" name="type" class="form-control" id="exampleInputTempatLahir1" placeholder="Enter Type Barang" required>
              </div>
              <div class="form-group">
                  <label for="exampleInputTanggalLahir1">Jumlah Barang</label>
                  <input type="text" name="jumlah_barang" class="form-control" id="exampleInputTanggalLahir1" placeholder="Enter jumlah barang" required>
              </div>
              <div class="form-group">
                  <label for="exampleInputtahunbarang1">Tahun Barang</label>
                  <input type="text" name="tahun_barang" class="form-control" id="exampleInputtahunbarang1" placeholder="Enter tahun barang" required>
              </div>
              <div class="form-group">
                <label for="exampleInputGolongan1">Kondisi Barang</label>
                <select name="kondisi" class="form-control" required >
                  <option value="0" disabled selected>Pilih Kondisi Barang</option>
                  <option value="baik">Baik</option>
                  <option value="rusak_ringan">Rusak Ringan</option>
                  <option value="rusak_berat">Rusak Berat</option>
                </select>
            </div>
              <div class="form-group">
                  <label for="exampleInputKeterangan1">Tempat Barang</label>
                  <input type="text" name="tempat_barang" class="form-control" id="exampleInputKeterangan1" placeholder="Enter Tempat Barang" required>
              </div>
              <div class="form-group">
                  <label for="exampleInputKeterangan1">Foto</label>
                  <input type="file" name="image" class="form-control" id="exampleInputKeterangan1" placeholder="Enter Foto" required>
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