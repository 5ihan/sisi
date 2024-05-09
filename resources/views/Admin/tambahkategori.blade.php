@extends('komponenAdmin.index')

@section('contentA')

<form method="post">
	<div class="form-group">
		<label>Nama Kategori</label>
		<input type="text" name="kategori">
	</div>
	<button class="btn btn-primary" name="tambah">Tambah Kategori</button>
</form>

@endsection
