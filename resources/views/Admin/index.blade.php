@extends('komponenAdmin.index')

@section('contentA')

        <h1>WELCOME TO SISI ADMIN</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Stock Habis</h5>
                        <p class="card-text">Jumlah produk yang stocknya habis.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Order</h5>
                        <p class="card-text">Jumlah order yang masuk.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Produk Terjual</h5>
                        <p class="card-text">Jumlah produk yang terjual.</p>
                    </div>
@endsection
