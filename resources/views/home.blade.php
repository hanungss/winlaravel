<html>
<h1>Data Warga Jakarta</h1>

<body>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>foto</th>
        </tr>
        @foreach($warga as $wrg)
        <tr>
            <td>{{$wrg->id}}</td>
            <td>{{$wrg->nama}}</td>
            <td>{{$wrg->alamat}}</td>
            <td>{{$wrg->foto}}</td>
            <td>
                <a href="home/edit/{{ $wrg->id}}">Edit</a>
                <a href="home/hapus/{{ $wrg->id}}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="home/tambah">Tambah Data</a>
</body>

</html>