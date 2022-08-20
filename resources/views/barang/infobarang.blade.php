<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info Barang TKJ</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('assets')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('assets')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('assets')}}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets')}}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('assets')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('assets')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('assets')}}/plugins/summernote/summernote-bs4.min.css">
</head>
<body>

    {{-- <div class="card" style="width: 300px;">
        <img src="https://mbahwp.com/wp-content/uploads/2021/04/cam.png" class="w-100 border-bottom" alt="Rounded Image">
        <div class="card-body">
            <h5 class="card-title">Judul Card</h5>
            <p class="card-text">Pulvinar leo id risus pellentesque el vestibulum. Sed diam libero egetve sodales sapien vel, aliquet nibhte bibendum enim porttitor orci.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Pajer</li>
            <li class="list-group-item">Fortuner</li>
            <li class="list-group-item">Avanza</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Link Card</a>
            <a href="#" class="card-link">Link lainnya</a>
        </div>
    </div> --}}

    <div class="container" style="padding-top:20px;">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Detail Barang TKJ
                </div>
            </div>
            <div class="card-body">
                <div>
                 <center><a href="{{asset('assets/featured_images/'.$barang->image)}}"><img src="{{asset('assets/featured_images/'.$barang->image)}}" width="300" height="340"></a> </center></label> <br>
                </div>
                <div>
                    <label> Nama Barang  : {{$barang->nama_barang}}</label> <br>
                    <label> Type Barang  : {{$barang->type}}</label> <br>
                    <label> Jumlah Barang  : {{$barang->jumlah_barang}}</label> <br>
                    <label> Tahun Perolehan  : {{$barang->tahun_barang}}</label> <br>
                    <label> Kondisi       : {{$barang->kondisi}}</label> <br>
                    <label> Tempat Barang : {{$barang->tempat_barang}}</label> <br>
                    
                </div>
            </div>

        </div>
       
      </div>
</body>
</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
