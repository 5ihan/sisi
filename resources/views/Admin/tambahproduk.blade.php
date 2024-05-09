@extends('komponenadmin.index')

@section('contentA')

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
 		<label>Nama Kategori</label>
 		<select class="form-control" name="id_kategori">
 			<option value="">Pilih Kategori</option>

 			<option value=""</option>

 		</select>
 	</div>
	<div class="form-group">
		<label>Harga (Rp)</label>
		<input type="number" class="form-control" name="harga">
	</div>
    <div class="form-group">
		<label>Stok Produk</label>
		<input type="number" class="form-control" name="stok">
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi" id="deskripsi" rows="10"></textarea>
	</div>
	<div class="form-group">
		<label>Foto</label>
		<div class="letak-input" style="margin-bottom: 10px;">
			<input type="file" class="form-control" name="foto[]">
		</div>
		<span class="btn btn-primary btn-tambah">
			<i class="fa fa-plus"></i>
		</span>
	</div>
	<button class ="btn btn-primary" name="save"><i class="glyphicon glyphicon-saved"></i>Simpan</a></button>

</form>

@endsection
