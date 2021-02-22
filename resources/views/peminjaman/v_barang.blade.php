<!DOCTYPE html>
<html>
<head>
	<title>Barang</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<div class="container">
		<div class="card">
			<div class="card-body">
				

				<h3>Data Barang</h3>
				<tr>
					<td><a class="btn btn-success btn-sm" href="/index">Kembali</a></td>
					|
					<td><a class="btn btn-primary btn-sm" href="/barang/tambah">Tambah Data</a></td>
				</tr>

				<p>Cari Data Barang :</p>

				<div class="form-group">
					
				</div>
				<form action="/barang/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Barang .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>

				<br/>

				<table class="table table-bordered">
					<tr>
						<th>Id Barang</th>
						<th>Nama Barang</th>
						<th>Jumlah</th>
						<th>Opsi</th>
					</tr>
					@foreach($data as $item)
					<tr>
						<td>{{$item['id']}}</td>
						<td>{{$item['nama_barang']}}</td>
						<td>{{$item['jumlah_barang']}}</td>

						<td>
							<a class="btn btn-warning btn-sm" href="{{ ('/barang/edit/'.$item->id) }}">Edit</a>
							|
							<a class="btn btn-danger btn-sm" href="{{ ('/barang/delete/'.$item->id) }}" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</a>
						</td>
					</tr>	
					@endforeach
				</table>

				
			</div>
		</div>
	</div>


</body>
</html>