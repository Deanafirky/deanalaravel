@extends('layouts.app')
@section('contents')
<div class="container my-5">
    <h1 class="font-weight-bold text-center mb-4">Edit Data Transaksi Anathan's Coffee</h1>
    <hr />

    <!-- Form Section -->
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Baris 1: Tanggal dan Nama -->
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal') }}" required>
        </div>
        
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="nama" class="form-label font-weight-bold">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Tanggal" value="{{ $product->nama }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="email" class="form-label font-weight-bold">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Nama" value="{{ $product->email }}" required>
            </div>
        </div>

        <!-- Baris 2: Instansi/Lembaga dan Tujuan -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="no_hp" class="form-label font-weight-bold">No Handphond</label>
                <input type="text" inputmode="numeric" name="no_hp" class="form-control" placeholder="Nomor Handphone" value="{{ $product->no_hp }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="nama_barang" class="form-label font-weight-bold">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" placeholder="Nama Brang" value="{{ $product->nama_barang }}" required>
            </div>
        </div>

        <!-- Baris 3: Penerima dan No Telpon -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="jumlah" class="form-label font-weight-bold">Jumlah</label>
                <input type="number" name="jumlah" class="form-control" placeholder="Jumlah" value="{{ $product->jumlah }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="harga" class="form-label font-weight-bold">Harga</label>
                <input type="decimal" name="harga" class="form-control" placeholder="No Telpon" value="{{ $product->harga }}" required>
            </div>
        </div>

        <!-- Tombol Submit -->
        <div class="row">
            <div class="col-12 d-grid">
                <button type="submit" class="btn btn-warning btn-block font-weight-bold">Perbarui</button>
            </div>
        </div>
    </form>
</div>
@endsection
