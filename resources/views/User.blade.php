<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
    <style>
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Data User</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Level ID</th>
            <th>Username</th>
            <th>Nama User</th>  <!-- Ubah dari 'Nama' jadi 'Nama User' -->
            <th>Password</th>
        </tr>
        @foreach($data as $item)
        <tr>
            <td>{{ $item->user_id }}</td>
            <td>{{ $item->level_id }}</td>
            <td>{{ $item->username }}</td>
            <td>{{ $item->nama_user }}</td>  <!-- Pakai 'nama_user' -->
            <td>{{ $item->password }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
