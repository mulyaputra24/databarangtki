
@extends('front-end.layout')
@section('title')
Teknik Komputer dan Informatika || Daftar Barang RPL
@endsection
@section('konten')
<style>
        .carousel-cell {
            width: 66%;
            height: 200px;
            margin-right: 10px;
            background: #8C8;
            border-radius: 5px;
            counter-increment: gallery-cell;
        }

        /* cell number */
        .carousel-cell:before {
            display: block;
            text-align: center;
            content: counter(gallery-cell);
            line-height: 400px;
            font-size: 80px;
            color: white;
        }

        .carousel-cell {
            width: 33%;
            height: 400px;
            margin-right: 10px;
            background: #8C8;
            border-radius: 5px;
            counter-increment: gallery-cell;
        }

        /* cell number */
        .carousel-cell:before {
            display: block;
            text-align: center;
            content: counter(gallery-cell);
            line-height: 400px;
            font-size: 80px;
            color: white;
        }

        .carousel-cell-image {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
        }
    </style>
    <style>
        .navbar-default {
            background-image: linear-gradient(to bottom, #1976D2 0%, #64B5F6 100%);
            background-repeat: repeat-x;
        }

        .footer {
            background-image: linear-gradient(to bottom, #1976D2 0%, #64B5F6 100%);
            background-repeat: repeat-x;
        }

        .title {
            background-image: linear-gradient(to bottom, #1976D2 0%, #64B5F6 100%);
            background-repeat: repeat-x;
        }

        .subtitle {
            border-left-color: #5cb1f7;
        }

        .nav.dinamis li {
            background-image: linear-gradient(to bottom, #1976D2 0%, #64B5F6 100%);
            background-repeat: repeat-x;
            margin: 0px 10px;
        }

        .nav.dinamis li.active {
            background-image: linear-gradient(to bottom, #003049 0%, #003049 100%);
            background-repeat: repeat-x;
        }

        .nav.dinamis li a {
            color: #fff;
            font-weight: bold;
        }

        .nav>li>a:focus,
        .nav>li>a:hover {
            background-color: #003049;
        }

        .pagination>.active>a,
        .pagination>.active>a:focus,
        .pagination>.active>a:hover,
        .pagination>.active>span,
        .pagination>.active>span:focus,
        .pagination>.active>span:hover {
            background-color: #E6D300;
            border-color: #E6D300;
        }

        .pagination>li>a,
        .pagination>li>span {
            color: #E6D300;
        }

        .panel-body.dinamis {
            background-color: #E6D300;
        }
    </style>
    <div class="panel panel-default">
        <h3 class="title"><strong>Daftar Barang RPL</strong></h3>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Type</th>
                    <th>Jumlah Barang</th>
                    <th>Tahun Barang</th>
                    <th>Kondisi</th>
                    <th>Tempat Barang</th>  
                </tr>
            </thead>
            <tbody>
            	@foreach ($alat as $row)
                <center>
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{$row->nama_barang}}</td>
                        <td>{{$row->type}}</td>
                        <td>{{$row->jumlah_barang}}</td>
                        <td>{{$row->tahun_barang}}</td>
                        <td>{{$row->kondisi}}</td>
                        <td>{{$row->tempat_barang}}</td>
                    </tr>
                </center>
                @endforeach
                
            </tbody>
        </table>

        <div class="panel-body">
            <br>
            <div class="carousel" data-flickity='{"imagesLoaded": true,"contain": true}'>
                @foreach ($alat as $row)
                <div class="carousel-cell">
                    <img class="carousel-cell-image"
                        src="{{asset('assets/featured_images/'.$row->image)}}" />
                    <div class="caption">
                        <h4>{{$row->nama_barang}}</h4>
                    </div>
                </div>
                @endforeach

            </div>
            <br />


        </div>
    </div>
@endsection
@section('custom_js')
<script src="{{asset('assets/front-end')}}/assets/custom/app.js"></script>
<script src="{{asset('assets/front-end')}}/assets/custom/flickity.pkgd.min.js"></script>
<script src="{{asset('assets/front-end')}}/assets/custom/owl.carousel.min.js"></script>
<script sr="{{asset('assets/front-end')}}/assets/custom/custom.js"></script>

@endsection

