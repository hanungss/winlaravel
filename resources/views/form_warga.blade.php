<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Form Tambah Data</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <h1>Form Tambah Data</h1>
    <form action="/home/simpan" method="put">
        <!-- use PUT for insert data -->
        {{ csrf_field()}}
        {{ method_field('PUT') }}
        Nama <input type="text" name="nama" required="required"><br />
        Alamat <input type="text" name="alamat" required="required"><br />
        Foto <input type="text" name="foto" required="required"><br />
        <input type="submit" value="Simpan Data">
    </form>
</body>

</html>