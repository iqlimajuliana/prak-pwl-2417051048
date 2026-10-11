@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h3 class="fw-semibold text-dark mb-3">Edit Mata Kuliah</h3>

    <div class="card border-0 shadow-sm p-4" style="background-color: #FFFFFF; max-width: 500px;">
        <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama_mk" class="form-label text-muted">Nama Mata Kuliah:</label>
                <input type="text" id="nama_mk" name="nama_mk" class="form-control" value="{{ $mk->nama_mk }}" required>
            </div>

            <div class="mb-3">
                <label for="sks" class="form-label text-muted">SKS:</label>
                <input type="number" id="sks" name="sks" class="form-control" value="{{ $mk->sks }}" required>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn text-dark px-4" style="background-color: #E8E2D5;">Update Data</button>
                <a href="{{ url('/matakuliah') }}" class="btn btn-light text-secondary border px-3">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection