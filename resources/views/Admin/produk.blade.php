@extends('komponenAdmin.index')

@section('contentA')
    <table class="table table-bordered" id="table">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Kategori</th>
            <th>Stok</th>
			<th>Harga</th>
			<th>Foto</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
            <td>
                <a href=""class= "btn btn-info" ><i class="lyphicon glyphicon-trash"></i>Hapus</a>
				<a href="{{ ('/ubahproduk') }}"class= "btn btn-info" ><i class="lyphicon glyphicon-edit"></i>Ubah</a>
            </td>
		</tr>

	</tbody>
</table>
<a href="{{ url('/tambahproduk') }}" class="btn btn-primary">Tambah Produk</a>

@endsection
