@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">Tambah Produk Baru</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('produk.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Produk</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Stok</label>
                    <input type="number" name="stok" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" name="harga" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="3"></textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
