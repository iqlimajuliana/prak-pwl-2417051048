@extends('layouts.app')

@section('content')
<div class="container my-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-semibold text-dark mb-1">Daftar Mata Kuliah</h3>
            <p class="text-muted small">Daftar mata kuliah terdaftar dalam sistem</p>
        </div>
        <a href="{{ route('matakuliah.create') }}" class="btn text-dark px-3 fw-medium" style="background-color: #E8E2D5;">+ Tambah Mata Kuliah Baru</a>
    </div>

    <div class="card border-0 shadow-sm rounded-3" style="background-color: #FFFFFF;">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table align-middle mb-0" style="font-size: 0.9rem;">
                    <thead style="background-color: #F4EFE6;">
                        <tr>
                            <th class="py-3 px-4 fw-semibold text-muted">ID (UUID)</th>
                            <th class="py-3 px-4 fw-semibold text-muted">Nama Mata Kuliah</th>
                            <th class="py-3 px-4 fw-semibold text-muted text-center">SKS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mks as $mk)
                            <tr class="border-bottom">
                                <td class="py-3 px-4 text-muted"><small><code>{{ $mk->id }}</code></small></td>
                                <td class="py-3 px-4 fw-medium text-dark">{{ $mk->nama_mk }}</td>
                                <td class="py-3 px-4 text-center">
                                    <span class="badge rounded-pill px-3 py-2 fw-normal" style="background-color: #E8E2D5; color: #4A4A4A;">
                                        {{ $mk->sks }} SKS
                                    </span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center py-4 text-muted">Belum ada data mata kuliah.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection