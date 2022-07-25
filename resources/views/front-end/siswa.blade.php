@extends('front-end.layout')
@section('title')
Teknik Komputer dan Informatika || Daftar Siswa
@endsection
@section('konten')
<div class="panel panel-default">
    <h3 class="title"><strong>Daftar Siswa</strong></h3>
    <table class="table">
        <thead>
            <tr>
               	<th>No</th>
	            <th>Nis</th>
	            <th>Nama</th>
	            <th>Agama</th>
	            <th>Jenis Kelamin</th>
	            <th>Tempat Lahir</th>
	            <th>Tanggal Lahir</th>
	            <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswa as $row)
	          <tr>
	            <td>{{$no++}}</td>
	            <td>{{$row->nis}}</td>
	            <td>{{$row->nama}}</td>
	            <td>{{$row->agama}}</td>
	            <td>{{$row->jenis_kelamin}}</td>
	            <td>{{$row->tempat_lahir}}</td>
	            <td>{{$row->tanggal_lahir}}</td>
	            <td>{{$row->alamat}}</td>
	         </tr>
	        @endforeach            
        </tbody>
    </table>

    <!-- <div class="panel-body">
        <br>
        <div class="carousel" data-flickity='{"imagesLoaded": true,"contain": true}'>
            <div class="carousel-cell">
                <img class="carousel-cell-image"
                    src="http://tkj.smkn1-sby.sch.id/storage/images/teachers/SC9pxSsaWZkCCwqIen5uCQ6rD2KM3DurgunB0PCf.jpeg" />
                <div class="caption">
                    <h4>Suratman, S.ST</h4>
                </div>
            </div>
            <div class="carousel-cell">
                <img class="carousel-cell-image"
                    src="http://tkj.smkn1-sby.sch.id/storage/images/teachers/WH0jg9YuLLICjTa1mQh6jgsuEn5JdD8aL0PcBKMx.jpeg" />
                <div class="caption">
                    <h4>Slamet Siswo Wibowo, S.Pd.</h4>
                </div>
            </div>
            <div class="carousel-cell">
                <img class="carousel-cell-image"
                    src="http://tkj.smkn1-sby.sch.id/storage/images/teachers/dqYMV2LJzpShInDId7bHRYukhlqKCwH9HmKyl4t7.jpeg" />
                <div class="caption">
                    <h4>Yektiono, S.Pd, S.ST</h4>
                </div>
            </div>

        </div>
        <br />
    </div> -->
</div>
@endsection
@section('custom_js')

@endsection
