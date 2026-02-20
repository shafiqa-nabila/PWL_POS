<!DOCTYPE html>
<html>
<head><title>Data Level</title></head>
<body>
    <h2>Data Level</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Kode</th>
            <th>Nama</th>
        </tr>
        @foreach ($data as $d)
        <tr>
            <td>{{ $d->level_id }}</td>
            <td>{{ $d->level_kode }}</td>
            <td>{{ $d->level_nama }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
