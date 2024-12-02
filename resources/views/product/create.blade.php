@extends('layouts.app')
@section('contents')

<div class="container my-5">
    <h1 class="font-weight-bold text-center mb-4">Pengisian Transaksi Anathan's Coffee</h1>
    <hr />

    <!-- Form Section -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <!-- Input Tanggal -->
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal') }}" required>
                </div>
                
                <div class="form-group mb-4">
                    <label for="nama" class="form-label font-weight-bold">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda" required>
                </div>
                
                <!-- Input Nama -->
                <div class="form-group mb-4">
                    <label for="email" class="form-label font-weight-bold">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Masukkan Email Anda" required>
                </div>
                
                <!-- Input Instansi/Lembaga -->
                <div class="form-group mb-4">
                    <label for="no_hp" class="form-label font-weight-bold">No Handphone</label>
                    <input type="text" inputmode="numeric" class="form-control" name="no_hp" placeholder="Nomor Handphone Anda" required>
                </div>
                
                <!-- Input Tujuan -->
                <div class="form-group mb-4">
                    <label for="nama_barang" class="form-label font-weight-bold">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" placeholder="Barang Yang Di Beli" required>
                </div>
                
                <!-- Input Penerima -->
                <div class="form-group mb-4">
                    <label for="jumlah" class="form-label font-weight-bold">Jumlah</label>
                    <input type="number" class="form-control" name="jumlah" placeholder="Jumlah Barang Yang Di Beli" required>
                </div>
                
                <!-- Input No Telpon -->
                <div class="form-group mb-4">
                    <label for="harga" class="form-label font-weight-bold">Harga</label>
                    <input type="decimal" class="form-control" name="harga" placeholder="Harga Barang Yang Di Beli" required>
                </div>

                <!-- Tombol Simpan -->
                <div class="form-group">
                    <button type="submit" class="btn btn-info btn-block font-weight-bold">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
