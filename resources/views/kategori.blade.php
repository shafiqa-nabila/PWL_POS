<!DOCTYPE html>
<html>
<head>
    <title>Data Kategori</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <h1>Data Kategori</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Kode Kategori</th>
            <th>Nama Kategori</th>
        </tr>
        @foreach($data as $item)
        <tr>
            <td>{{ $item->kategori_id }}</td>
            <td>{{ $item->kategori_kode }}</td>
            <td>{{ $item->kategori_nama }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
