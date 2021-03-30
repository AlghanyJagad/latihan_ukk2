<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Data Siswa</h4>
	</center>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Asal Sekolah</th>
            <th>Kelas</th>
            <th>Jurusan</th>
        </tr>
        @php $i=1 @endphp
        @foreach ($siswas as $siswa)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $siswa->nis }}</td>
            <td>{{ $siswa->nama }}</td>
            <td>{{ $siswa->jns_kelamin }}</td>
            <td>{{ $siswa->tempat_lahir }}</td>
            <td>{{ $siswa->tgl_lahir }}</td>
            <td>{{ $siswa->alamat }}</td>
            <td>{{ $siswa->asal_sekolah }}</td>
            <td>{{ $siswa->kelas }}</td>
            <td>{{ $siswa->jurusan }}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>