<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<a href="{{ route('matakuliah.create') }}">Tambah</a>
<table>
    <thead>
        <th>ID</th>
        <th>Kode MK</th>
        <th>Nama</th>
        <th>Jumlah SKS</th>
        <th>Prodi</th>
        <th>Opsi</th>
    </thead>
    <tbody>
        @foreach ($banyak_matakuliah as $matakuliah)
            <tr>
                <td>{{ $matakuliah['id'] }}</td>
                <td>{{ $matakuliah['kode_mk'] }}</td>
                <td>{{ $matakuliah['nama'] }}</td>
                <td>{{ $matakuliah['jumlah_sks'] }}</td>
                <td>{{ $matakuliah['prodi_id'] }}</td>
                <td>
                    <a href="#">Ubah</a>
                    <a href="#">Hapus</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
