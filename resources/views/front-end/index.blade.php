@extends('front-end.layout')
@section('title')
SMKN 1 Lahat || Teknik Komputer dan Informatika
@endsection
@section('konten')
<center>
    <div class="carousel"
        data-flickity='{"imagesLoaded": true,"contain": true,"autoPlay": true, "prevNextButtons": false }'
        style="width: 90%;height: auto">
        <img src="http://tkj.smkn1-sby.sch.id/storage/images/slider/JxUTdMuwzZ2FWqcWO18YM9JslGVHOPIbiON57uxX.jpeg"
            alt="1" width="100%" style="max-height:400px" />

        <img src="http://tkj.smkn1-sby.sch.id/storage/images/slider/Pi9DpSs6ANBPtBnHtzM7edpjxqdUaUcyVjoMdX22.jpeg"
            alt="2" width="100%" style="max-height:400px" />

        <img src="http://tkj.smkn1-sby.sch.id/storage/images/slider/42BHR9ApOdzE7dMIC7fOovIGpTYmx0vXVpDW6AAS.jpeg"
            alt="Slider 1" width="100%" style="max-height:400px" />
    </div>
</center>


<br /><br />
<div class="panel panel-default">
    <h3 class="title"><strong>Sekilas Profil Jurusan</strong></h3>
    <div class="panel-body">
        <div class="col-md-3">
            <img src="{{asset('assets/front-end')}}/assets/img/.jpg" width="80%" alt="" class="img-responsive logo2">
        </div>
        <div class="col-md-9">
            Merupakan salah satu Paket Keahlian yang tertua kedua di bidang keahlian Teknik
            Komputer
            dan Informatika di SMK Negeri 1 Lahat. Didirikan dan dibuka pada tahun 2005 oleh
            Manajemen SMK Negeri 1 Lahat. Karena semakin berkembangnya Ilmu Pengetahuan dan
            Teknologi khususnya di bidang IT maka Paket Keahlian Teknik Komputer dan Jaringan
            SMK
            Negeri 1 didirikan sebagai Jurusan yang diharapkan mampu menembus dunia kerja dan
            industri yang sesuai dengan bidang keahlian TKJ.
        </div>
        <div class="clearfix"></div>
        <br />
        <div class="col-md-6">
            <h4 class="subtitle">Teknik Komputer dan Jaringan</h4>
            Perakitan Komputer,
            Simulasi Digital,
            Jaringan Dasar,
            Pemrograman Web,
            Komputer Terapan,
            Komunikasi Data,
            Rancang Bangun Jaringan,
            Administrasi Server,
            Sistem Operasi Jaringan,
            Jaringan Nirkabel,
            Keamanan Jaringan
            Troubleshooting Jaringan
        </div>
        <div class="col-md-6">
            <h4 class="subtitle">Rekayasa Perangkat Lunak</h4>
            Administrator Jaringan Komputer,
            Teknisi Jaringan Komputer,
            Administrator System Jaringan,
            Teknisi Komputer dan Jaringan,
            Distributor / toko komputer,
            Internet Service Provider (ISP),
            Embeded System Jaringan,
            Administrator Jaringan Level 1,
            Administrator Jaringan Level 2,
            Administrator Jaringan Level 3,
            Robotic Engineer,
            Control Engineer IT,
            Robotics engineer,
        </div>
    </div>
</div>
@endsection
@section('custom_js')

@endsection
