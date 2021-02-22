<!DOCTYPE html>
<html>
<head>
	<title>Siswa</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<script type="text/javascript" src="/js/app.js"></script>
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-header">
				
				<h3>Data Siswa</h3>
				<a href="/index">Kembali</a>
				<a href="/siswa/tambah">Tambah data Siswa</a>

				<table class="table table-bordered">
					<tr>
						<th>NISN</th>
						<th>Nama Lengkap</th>
						<th>Kelas</th>
						<th>Jurusan</th>
						<th>Jenis Kelamin</th>
					</tr>
					@foreach($data as $item)
					<tr>
						<td>{{$item['NISN']}}</td>
						<td>{{$item['nama_lengkap']}}</td>
						<td>{{$item['kelas']}}</td>
						<td>{{$item['jurusan']}}</td>
						<td>{{$item['jenis_kelamin']}}</td>
					</tr> 
					@endforeach

				</table>

			</div>
		</div>
	</div>
</body>
</html>