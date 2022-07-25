<!DOCTYPE html>
<html>
<head>

  

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
{{-- 
  <table width="100%">
    <tr>
    <td width="25" align="center"><img src="{{asset('assets')}}/dist/img/logoprovinsi.jpg" width="60%"></td>
    <td width="50" align="center">
      <h4>PEMERINTAH PROVINSI SUMATERA SELATAN</h4>
      <h4>DINAS PENDIDIKAN </h4>
      <h4>SMK NEGERI 1 LAHAT</h4>
      <h4>Jalan Bandar Agung, Kec. Lahat Kota Lahat  Telp. (0731) 323023 Kode Pos : 31414</h4>
      <h5>E-mail : email@smkn1lahat.sch.id Website : http://www.smkn1lahat.sch.id </h5>
    </td>
    <td width="25" align="center"><img src="{{asset('assets')}}/dist/img/logo-smk.png" width="60%"></td>
    
    </tr>
    </table>
    <hr> --}}

<h1>Data Barang RPL</h1>

<table id="customers">
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Type</th>
        <th>Jumlah Barang</th>
        <th>Tahun Barang</th>
        <th>Kondisi</th>
        <th>Tempat Barang</th>  
    </tr>
    @php
        $no=1;
    @endphp
    @foreach ($data as $row)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{$row->nama_barang}}</td>
            <td>{{$row->type}}</td>
            <td>{{$row->jumlah_barang}}</td>
            <td>{{$row->tahun_barang}}</td>
            <td>{{$row->kondisi}}</td>
            <td>{{$row->tempat_barang}}</td>
        </tr>
    @endforeach
  
</table>

</body>
</html>


