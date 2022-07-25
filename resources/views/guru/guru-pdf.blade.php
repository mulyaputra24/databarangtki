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

<h1>Data Guru</h1>

<table id="customers">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Nip</th>
        <th>Golongan</th>
        <th>Pendidikan</th>  
        <th>Keterangan</th>
        <th>Bidang Studi</th>
    </tr>
    @php
        $no=1;
    @endphp
    @foreach ($data as $row)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{$row->nama}}</td>
            <td>{{$row->tempat_lahir}}</td>
            <td>{{$row->tanggal_lahir}}</td>
            <td>{{$row->nip}}</td>
            <td>{{$row->golongan}}</td>
            <td>{{$row->pendidikan}}</td>
            <td>{{$row->keterangan}}</td>
            <td>{{$row->bidang_studi}}</td>
        </tr>
    @endforeach
  
</table>

</body>
</html>


