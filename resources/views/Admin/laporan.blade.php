@extends('komponenAdmin.index')

@section('contentA')

<h2><Laporan Pembelian dari .. Hingga .. ></h2>
<hr>

<form method="post">
	<div class="row">
		<div class="col-md-5">
			<div class="form-group">
				<label>Tanggal Mulai</label>
				<input type="date" name="tglm" class="form-control">
			</div>
		</div>
		<div class="col-md-5">
			<div class="form-group">
				<label>Tanggal Selesai</label>
				<input type="date" name="tgls" class="form-control">
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<label></label><br>
				<button class="btn btn-primary" name="kirim">Lihat</button>
			</div>
		</div>
	</div>
</form>

<table class="table table-bordered" id="table">
	<thead>
		<tr>
			<th>No</th>
			<th>Pelanggan</th>
			<th>Tanggal</th>
			<th>Jumlah</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>


		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

	</tbody>
	<tfoot>
		<tr>
			<th colspan="3">Total</th>
			<th></th>
			<th></th>
		</tr>
	</tfoot>
</table>

@endsection
