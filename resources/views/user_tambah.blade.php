<!DOCTYPE html>
<html>
<head>
    <title>Tambah User</title>
</head>
<body>
    <h1>Form Tambah User</h1>
    <form method="post" action="/user/tambah/simpan">
        @csrf
        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan username">
        <br>
        <label>Nama</label>
        <input type="text" name="nama_user" placeholder="Masukkan nama">
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan password">
        <br>
        <label>Level ID</label>
        <input type="number" name="level_id" placeholder="Masukkan level ID">
        <br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
