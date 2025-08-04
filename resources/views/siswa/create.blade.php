<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Tambah</title>
</head>
<body>
    <h1>Halaman Tambah Siswa</h1>
    <p>Tambah Data Siswa</p>
    <a href="/">Kembali</a>
    <br>
    <br>
    <form action="/siswa/store" method="post">
        @csrf
        <div>
            <label for="">Kelas</label><br>
            <select name="kelas_id">
                <option value="1">X RPL 1</option>
                <option value="2">XI RPL 2</option>
                <option value="3">XII RPL 3</option>
            </select>
        </div>
        <br>
        <div>
            <label for="">Name</label><br>
            <input type="text" name="name">
        </div>
        <br>
        <div>
            <label for="">Nisn</label><br>
            <input type="text" name="nisn">
        </div>
        <br>
        <div>
            <label for="">Alamat</label><br>
            <input type="text" name="alamat">
        </div>
        <br>
        <div>
            <label for="">Email</label><br>
            <input type="text" name="email">
        </div>
        <br>
        <div>
            <label for="">Password</label><br>
            <input type="password" name="password">
        </div>
        <br>
        <div>
            <label for="">No Handphone</label><br>
            <input type="tel" name="no_handphone">
        </div>
        <br>
        <div>
            <label for="">Foto</label><br>
            <input type="file" name="foto">
        </div>
        <br>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
    
</body>
</html>