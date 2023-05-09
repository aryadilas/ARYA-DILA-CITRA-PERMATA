<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/add" method="POST">
        @csrf

        <input type="text" name="nama" placeholder="nama">
        <input type="number" name="umur" placeholder="umur">
        <select name="jenisKelamin" id="">
            <option value="Laki - Laki">Laki - Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <input type="text" name="alamat" placeholder="alamat">
        <input type="submit" value="SAVE">
    </form>
</body>
</html>