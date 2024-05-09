@extends('komponenAdmin.index')

@section('contentA')

<table class="table table-bordered" id="table">
	<thead>
		<tr>
			<th>No</th>
			<th>Kategori</th>
			<th>Aksi</th>
		</tr>
	</thead>
    <tbody>
        <tr>
			<td></td>
			<td></td>
			<td>
				<a href="" class="btn btn-warning btn-sm">Hapus</a>
				<a href="{{ url('/ubahkategori') }}" class="btn btn-danger btn-sm">Ubah</a>
			</td>

		</tr>
    </tbody>
</table>
<a href="{{ url('/tambahkategori') }}" class="btn btn-primary"> Tambah Kategori</a>
@endsection
