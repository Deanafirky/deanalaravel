@extends('layouts.app')
@section('contents')
<div class="container my-5">
    <h1 class="font-weight-bold text-center mb-4">Rincian Data Transaksi Anathan's Coffee</h1>
    <hr />

    <!-- Baris 1: Nama dan Tanggal -->
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label font-weight-bold">Tanggal</label>
            <input type="date" class="form-control" value="{{ $product->tanggal }}" readonly>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label font-weight-bold">Nama</label>
            <input type="text" class="form-control" value="{{ $product->nama }}" readonly>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label font-weight-bold">Email</label>
            <input type="text" class="form-control" value="{{ $product->email }}" readonly>
        </div>
    </div>

    <!-- Baris 2: Instansi/Lembaga dan Tujuan -->
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label font-weight-bold">No Handphond</label>
            <input type="text" inputmode="numeric" class="form-control" value="{{ $product->no_hp }}" readonly>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label font-weight-bold">Nama Barang</label>
            <input type="text" class="form-control" value="{{ $product->nama_barang }}" readonly>
        </div>
    </div>

    <!-- Baris 3: Penerima dan No Telpon -->
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label font-weight-bold">Jumlah</label>
            <input type="number" class="form-control" value="{{ $product->jumlah }}" readonly>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label font-weight-bold">Harga</label>
            <input type="decimal" class="form-control" value="{{ $product->harga }}" readonly>
        </div>
    </div>

    <!-- Baris 4: Dibuat Pada dan Diperbarui Pada -->
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label font-weight-bold">Dibuat Pada</label>
            <input type="text" class="form-control" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label font-weight-bold">Diperbarui Pada</label>
            <input type="text" class="form-control" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
</div>
@endsection
