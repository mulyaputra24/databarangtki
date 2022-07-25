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

<h1>Data Barang TKJ</h1>

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


