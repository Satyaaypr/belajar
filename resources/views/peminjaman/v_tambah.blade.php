<!DOCTYPE html>
<html>
<head>
	<title>Tambah Barang</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-body">

				<h3> Tambah Barang </h3>

				<br/>
				<br/>

				<a class="btn btn-info btn-sm" href="/index/barang">Kembali</a>

				<br/>
				<br/>

				<form action="/barang/tambah" method="post">
					@csrf
						<tr>
							<th><input type="text" name="nama_barang" placeholder="Nama Barang :" required="required"></th><br/><br/>
							<th><input type="text"  name="jumlah_barang" placeholder="Jumlah Barang : " required="required"></th>
						</tr>	

						<br/>
						<br/>
						
					</table>
					<input type="submit" class="btn btn-success btn-sm" value="Simpan Data">
				</form>	

			</div>
		</div>		
	</div>			
</body>
</html>