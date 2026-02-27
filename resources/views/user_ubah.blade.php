<!DOCTYPE html>
<html>
<head>
    <title>Ubah User</title>
</head>
<body>
    <h1>Form Ubah User</h1>
    <form method="post" action="/user/ubah_simpan/{{ $user->user_id }}">
        @csrf
        @method('PUT')

        <label>Username</label>
        <input type="text" name="username" value="{{ $user->username }}" placeholder="Masukkan username">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" value="{{ $user->nama_user }}" placeholder="Masukkan nama">
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Password (kosongkan jika tidak diubah)">
        <br>
        <label>Level ID</label>
        <input type="number" name="level_id" value="{{ $user->level_id }}" placeholder="Masukkan level ID">
        <br><br>
        <button type="submit">Ubah</button>
    </form>
</body>
</html>
