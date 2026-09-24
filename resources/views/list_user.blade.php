@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold mb-0">Daftar Pengguna</h2>
        <p class="text-muted small">Kelola data pengguna dan kelas terdaftar</p>
    </div>
</div>

{{-- Memanggil komponen tabel terpisah --}}
@include('components.user-table', ['users' => $users])

@endsection