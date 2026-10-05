@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h3 class="fw-semibold text-dark mb-3">Buat Mata Kuliah Baru</h3>

    <div class="card border-0 shadow-sm p-4" style="background-color: #FFFFFF; max-width: 500px;">
        <form action="{{ route('matakuliah.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_mk" class="form-label text-muted">Nama Mata Kuliah:</label>
                <input type="text" id="nama_mk" name="nama_mk" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="sks" class="form-label text-muted">SKS:</label>
                <input type="number" id="sks" name="sks" class="form-control" required>
            </div>

            <button type="submit" class="btn text-dark px-4" style="background-color: #E8E2D5;">Submit</button>
        </form>
    </div>
</div>
@endsection