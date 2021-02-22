<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Barang</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-body">

				<h3> Edit Data Barang </h3>

				<br/>
				<br/>

				<a class="btn btn-info btn-sm" href="/index/barang">Kembali</a>

				<br/>
				<br/>

				<form action="/barang/edit" method="post">
					@csrf
					<input type="hidden" name="id" value="{{$data['id']}}">
					<input type="text" name="nama_barang" value="{{$data['nama_barang']}}"> <br/> <br/>
					<input type="text" name="nama_jumlah" value="{{$data['jumlah_barang']}}"> <br/> <br/>
					<input type="submit" class="btn btn-success btn-sm" value="Simpan Data">
				</form>

			</div>
		</div>		
	</div>	
</body>
</html>