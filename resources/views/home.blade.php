@extends('layout.main')
@section('title')   
Dashboard
                       
@endsection 
@section('konten')
<section class="content">
    <div class="container-fluid">

        <!-- Info boxes -->
        <div class="row">
            <div class="col-lg-3 col-3">
                <div class="small-box bg-info">
                    <div class="inner">
                    <h3>Jumlah Guru</h3>
    
                    <p>{{ $jumlahguru }} Orang</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <a href="{{url('guru/index')}}" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-3">
                <!-- small card -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>Jumlah Siswa<sup style="font-size: 20px"></sup></h3>

                    <p>{{ $jumlahsiswa }} Orang</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-user-plus"></i>
                  </div>
                  <a href="{{url('siswa/index')}}" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                  </a>
                </div>
            </div>

            <div class="col-lg-3 col-3">
                <!-- small card -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h3>Jumlah Barang RPL</h3>
    
                    <p> {{ $jumlahbarangrpl }} Orang </p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-laptop-code"></i>
                  </div>
                  <a href="{{url('alat/index')}}" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                  </a>
                </div>
            </div>

            <div class="col-lg-3 col-3">
                <!-- small card -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3>Jumlah Barang TKJ</h3>
    
                    <p> {{ $jumlahbarangtkj }} Orang</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-hammer"></i>
                  </div>
                  <a href="{{url('barang/index')}}" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                  </a>
                </div>
            </div>

    


            <!-- /.info-box-content -->
        </div>
   
</section>
@endsection
