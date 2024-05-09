@extends('komponenAdmin.index')

@section('contentA')

<form method="post" enctype="multipart/form-data">

 	<div class="form-group">
 		<label>Nama Produk</label>
 		<input type="text" name="nama" class="form-control" value="">
 	</div>

 	<div class="form-group">
 		<label>Nama Kategori</label>
 		<select class="form-control" name="id_kategori">
 			<option value="">Pilih Kategori</option>

 			<option value=""></option>

 		</select>
 	</div>

 	<div class="form-group">
 		<label>Harga Rp</label>
 		<input type="number" name="harga" class="form-control" value="" >
 	</div>


 	<div class="form-group">

 		<img src="../foto produk/" width="200">

 	</div>

 	<div class="form-group">
		<label> Ganti Foto</label>
		<input type="file" class="form-control" name="foto">
	</div>

 	<div class="form-group">
 		<label>Deskripsi</label>
 		<textarea name="deskripsi" class="form-control" id="deskripsi" rows="10">
 		</textarea>
 	</div>
 	<button class="btn btn-primary" name="ubah">Ubah</button>
 </form>

 @endsection
