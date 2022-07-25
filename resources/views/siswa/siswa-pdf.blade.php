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

<h1>Data Siswa TKI</h1>

<table id="customers">
    <tr>
        <<th>No</th>
        <th>Nis</th>
        <th>Nama</th>
        <th>Agama</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>  
    </tr>
    @php
        $no=1;
    @endphp
    @foreach ($data as $row)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{$row->nis}}</td>
            <td>{{$row->nama}}</td>
            <td>{{$row->agama}}</td>
            <td>{{$row->jenis_kelamin}}</td>
            <td>{{$row->tempat_lahir}}</td>
            <td>{{$row->tanggal_lahir}}</td>
            <td>{{$row->alamat}}</td>
        </tr>
    @endforeach
  
</table>

</body>
</html>


