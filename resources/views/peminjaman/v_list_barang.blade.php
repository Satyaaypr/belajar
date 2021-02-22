<table class="table table-bordered">
					<tr>
						<th>Id Barang</th>
						<th>Nama Barang</th>
						<th>Jumlah</th>
						<th>Opsi</th>
					</tr>
					@foreach($barang as $item)
					<tr>
						<td>{{$item['id_barang']}}</td>
						<td>{{$item['nama_barang']}}</td>
						<td>{{$item['jumlah_barang']}}</td>

						<td>
							<a class="btn btn-warning btn-sm" href="/barang/edit/{{ $item->id }}">Edit</a>
							|
							<a class="btn btn-danger btn-sm" href="/barang/delete/{{ $item->id }}">delete</a>
						</td>
					</tr>	
					@endforeach
				</table>