<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Home</title>
</head>
<body>
    <h1>Halaman Beranda</h1>
    <p>List Data Siswa</p>
    <a href="/siswa/create">Tambah Data Siswa</a>
    
    <table border="1">
        <thead>
            <tr>
               <th>Foto</th> 
               <th>Name</th> 
               <th>Nisn</th> 
               <th>Kelas</th> 
               <th>Alamat</th> 
               <th>Opsi</th> 
            </tr>
        </thead>
        <tbody>
            @foreach ($siswas as $siswa)
                <tr>
                    <td><img src="{{ asset('storage/'.$siswa->photo) }}" alt="" width="40"></td>  
                    <td>{{ $siswa->name }}</td> 
                    <td>{{ $siswa->nisn }}</td> 
                    <td>{{ $siswa->clas->name }}</td> 
                    <td>{{ $siswa->alamat }}</td> 
                    <td>
                        <a href="">Edit</a> 
                        |
                        <a href="">Detail</a>
                        |
                        <a onclick="return confirm('yakin ingin menghapus')" href="/siswa/delete/{{ $siswa->id }}">Delete</a>
                    </td> 
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>