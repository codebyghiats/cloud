@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3">Daftar Produk</h1>
        <a href="{{ route('produk.create') }}" class="btn btn-success">+ Tambah Produk</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-striped mb-0">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($produks as $index => $produk)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $produk->nama }}</td>
                            <td>{{ $produk->stok }}</td>
                            <td>Rp {{ number_format($produk->harga, 0, ',', '.') }}</td>
                            <td>{{ $produk->deskripsi }}</td>
                            <td class="text-center">
                                <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus produk ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted py-3">Belum ada produk</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-3">
        {{ $produks->links() }}
    </div>
@endsection
