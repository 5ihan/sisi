@extends('komponenAdmin.index')

@section('contentA')

<div class="row">
	<div class="col-md-6">
		<table class="table">
			<tr><br>
				<th>Nama</th>
				<th>derliana</th>
			</tr>
			<tr>
				<th>Bank</th>
				<th>bca</th>
			</tr>
			<tr>
				<th>Jumlah</th>
				<th>100.000</th>
			</tr>
			<tr>
				<th>Tanggal</th>
				<th>18 April 2024</th>
			</tr>
			<tr>
				<th>Resi Pengiriman</th>
				<th>1023102</th>
			</tr>

			<form method="post">
				<button class=" btn btn-primary" name="proses">Selesai</button>
			</form>


		</table>
	</div>
	<div class="col-md-6">
	</div>
</div>

@endsection
