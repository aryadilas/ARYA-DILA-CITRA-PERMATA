<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/update/{{ $data->id }}" method="POST">
        @csrf

        <input type="text" name="nama" placeholder="nama" value="{{ $data->nama }}">
        <input type="number" name="umur" placeholder="umur" value="{{ $data->umur }}">
        <select name="jenisKelamin" id="">
            <option value="Laki - Laki" {{ $data->jenisKelamin == "Laki - Laki" ? "selected" : null }}>Laki - Laki</option>
            <option value="Perempuan" {{ $data->jenisKelamin == "Perempuan" ? "selected" : null }}>Perempuan</option>
        </select>
        <input type="text" name="alamat" placeholder="alamat" value="{{ $data->alamat }}">
        <input type="submit" value="UPDATE">
    </form>
</body>
</html>