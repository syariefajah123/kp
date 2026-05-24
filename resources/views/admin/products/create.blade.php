@extends('layouts.dashboard')

@section('content')
<div class="container-fluid py-4">

    <div class="card shadow border-0 rounded-4">
        <div class="card-body">

            <h3 class="mb-4">Tambah Produk</h3>

            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label>Nama Produk</label>
                    <input type="text" name="nama" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                </div>

                <button class="btn btn-primary">
                    Simpan
                </button>

            </form>
        </div>
    </div>
</div>
@endsection