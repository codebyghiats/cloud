@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header bg-warning text-dark">
            <h5 class="mb-0">Edit Produk</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('produk.update', $produk->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Produk</label>
                    <input type="text" name="nama" class="form-control" value="{{ old('nama', $produk->nama) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Stok</label>
                    <input type="number" name="stok" class="form-control" value="{{ old('stok', $produk->stok) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" name="harga" class="form-control" value="{{ old('harga', $produk->harga) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="3">{{ old('deskripsi', $produk->deskripsi) }}</textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-warning">Perbarui</button>
                </div>
            </form>
        </div>
    </div>
@endsection
