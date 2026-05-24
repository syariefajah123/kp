@extends('layouts.dashboard')

@section('content')
<div class="container-fluid py-4">

    <div class="d-flex justify-content-between mb-4">
        <h2>Pesan Masuk</h2>
    </div>

    <div class="card shadow border-0 rounded-4">
        <div class="card-body table-responsive">

            <table class="table table-bordered align-middle">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($contacts as $contact)
                    <tr>
                        <td>{{ $contact->nama }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>
                            @if($contact->is_read)
                                <span class="badge bg-success">Dibaca</span>
                            @else
                                <span class="badge bg-danger">Baru</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.contacts.show', $contact->id) }}" class="btn btn-primary btn-sm">
                                Detail
                            </a>

                            <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" class="d-inline">
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
                        <td colspan="4" class="text-center">Belum ada pesan.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection