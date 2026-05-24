@extends('layouts.dashboard')

@section('content')
<div class="container-fluid py-4">

    <div class="d-flex justify-content-between mb-4">
        <h2>Data Produk</h2>

        <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
            Tambah Produk
        </a>
    </div>

    <div class="card shadow border-0 rounded-4">
        <div class="card-body table-responsive">

            <table class="table table-bordered align-middle">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($products as $product)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/' . $product->gambar) }}" width="80">
                        </td>
                        <td>{{ $product->nama }}</td>
                        <td>Rp {{ number_format($product->harga) }}</td>
                        <td>
                            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">Belum ada produk.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection