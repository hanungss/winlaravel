<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data</title>
</head>

<body>
    @foreach($warga as $wrg)
    <form action="/home/update" method="put">
        {{ csrf_field()}}
        {{ method_field('PUT') }}
        <input type="hidden" name="id" value="{{ $wrg->id }}"> <br />
        Nama <input type="text" required="required" name="nama" value="{{ $wrg->nama }}"> <br />
        Alamat <input type="text" required="required" name="alamat" value="{{ $wrg->alamat }}"> <br />
        Foto <input type="text" required="required" name="foto" value="{{ $wrg->foto }}"> <br />
    </form>
    @endforeach
</body>