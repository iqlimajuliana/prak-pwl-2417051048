@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h3 class="fw-semibold text-dark mb-1">Daftar Pengguna</h3>
        <p class="text-muted small mb-0">Kelola data pengguna dan kelas terdaftar</p>
    </div>
    <!-- Tombol Tambah Pengguna -->
    <a href="{{ route('user.create') }}" class="btn text-white border-0 px-3" style="background-color: #4A4A4A;">
        + Tambah Pengguna
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" style="background-color: #E2F0D9; color: #385723;" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@include('components.user-table', ['users' => $users])

@endsection