@extends('komponenAdmin.index')

@section('contentA')

<form method="post">
	<div class="form-group">
		<label>Nama Kategori</label>
		<input type="text" name="kategori" value=" ">
	</div>
	<button class="btn btn-primary" name="ubah">Ubah Kategori</button>
</form>

@endsection
