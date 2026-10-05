@extends('layouts.app')

@section('content')
<div class="mb-4">
    <h3 class="fw-semibold text-dark mb-1">Daftar Pengguna</h3>
    <p class="text-muted small">Kelola data pengguna dan kelas terdaftar</p>
</div>
@include('components.user-table', ['users' => $users])

@endsection