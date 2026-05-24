@extends('layouts.dashboard')

@section('content')
<div class="container-fluid py-4">

    <div class="card shadow border-0 rounded-4">
        <div class="card-body">

            <h3 class="mb-4">Detail Pesan</h3>

            <p><strong>Nama:</strong> {{ $contact->nama }}</p>
            <p><strong>Email:</strong> {{ $contact->email }}</p>
            <p><strong>Telepon:</strong> {{ $contact->telepon }}</p>
            <p><strong>Perusahaan:</strong> {{ $contact->perusahaan }}</p>
            <p><strong>Pesan:</strong></p>

            <div class="border rounded p-3 bg-light">
                {{ $contact->pesan }}
            </div>

        </div>
    </div>
</div>
@endsection