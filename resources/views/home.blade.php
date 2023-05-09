<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <a href="/addform">Tambah Data</a>
        <tr>
            <td colspan="6">Data Karyawan</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>Umur</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td colspan="2">Aksi</td>
        </tr>
        @if ($karyawan)
        @foreach ($karyawan as $row)
        <tr>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->umur }}</td>
            <td>{{ $row->jenisKelamin }}</td>
            <td>{{ $row->alamat }}</td>
            <td>
                <form action="/delete/{{$row->id}}" method="POST">
                @method('delete')
                @csrf
                <input type="submit" value="DELETE">
                </form>
            </td>
            <td>
                <a href="/updateform/{{ $row->id }}">UPDATE</a>
            </td>
        </tr>
        @endforeach
        @endif
        
        
    </table>
</body>
</html>