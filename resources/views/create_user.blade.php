@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h3 class="fw-semibold text-dark mb-3">Tambah Pengguna Baru</h3>

    {{-- Alert Error Validasi (jika ada input yang kosong/salah) --}}
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert">
            <ul class="mb-0 ps-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card border-0 shadow-sm p-4" style="background-color: #FFFFFF; max-width: 500px;">
        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nama" class="form-label text-muted">Nama Pengguna:</label>
                <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama') }}" required>
            </div>

            <div class="mb-3">
                <label for="npm" class="form-label text-muted">NPM:</label>
                {{-- Wajib name="nim" agar terbaca oleh controller --}}
                <input type="text" id="npm" name="nim" class="form-control" value="{{ old('nim') }}" required>
            </div>

            <div class="mb-3">
                <label for="kelas_id" class="form-label text-muted">Kelas:</label>
                <select id="kelas_id" name="kelas_id" class="form-select" required>
                    <option value="" disabled selected>-- Pilih Kelas --</option>
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}" {{ old('kelas_id') == $kelasItem->id ? 'selected' : '' }}>
                            {{ $kelasItem->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn text-dark px-4" style="background-color: #E8E2D5;">Simpan Pengguna</button>
                <a href="{{ url('/user') }}" class="btn btn-light text-secondary border px-3">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection