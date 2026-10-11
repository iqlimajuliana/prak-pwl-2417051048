@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h3 class="fw-semibold text-dark mb-3">Edit Data Pengguna</h3>

    <div class="card border-0 shadow-sm p-4" style="background-color: #FFFFFF; max-width: 500px;">
        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama" class="form-label text-muted">Nama Pengguna:</label>
                <input type="text" id="nama" name="nama" class="form-control" value="{{ $user->nama }}" required>
            </div>

            <div class="mb-3">
                <label for="npm" class="form-label text-muted">NPM:</label>
                <input type="text" id="npm" name="nim" class="form-control" value="{{ $user->nim ?? $user->npm }}" required>
            </div>

            <div class="mb-3">
                <label for="kelas_id" class="form-label text-muted">Kelas:</label>
                <select id="kelas_id" name="kelas_id" class="form-select" required>
                    @foreach ($kelas as $k)
                        <option value="{{ $k->id }}" {{ $user->kelas_id == $k->id ? 'selected' : '' }}>
                            {{ $k->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn text-dark px-4" style="background-color: #E8E2D5;">Update Pengguna</button>
                <a href="{{ url('/user') }}" class="btn btn-light text-secondary border px-3">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection