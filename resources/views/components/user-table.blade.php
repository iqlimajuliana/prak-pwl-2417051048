<div class="card border-0 shadow-sm rounded-3" style="background-color: #FFFFFF;">
  <div class="card-body p-0">
    <div class="table-responsive">
      <table class="table align-middle mb-0" style="font-size: 0.9rem;">
        <thead style="background-color: #F4EFE6;">
          <tr>
            <th class="py-3 px-4 fw-semibold text-muted" style="width: 80px;">ID</th>
            <th class="py-3 px-4 fw-semibold text-muted">Nama Lengkap</th>
            <th class="py-3 px-4 fw-semibold text-muted">NPM</th>
            <th class="py-3 px-4 fw-semibold text-muted text-center">Kelas</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($users as $user)
            <tr class="border-bottom">
              <td class="py-3 px-4 fw-medium text-secondary">{{ $user->id }}</td>
              <td class="py-3 px-4 fw-medium text-dark">{{ $user->nama }}</td>
              <td class="py-3 px-4 text-muted">{{ $user->nim }}</td>
              <td class="py-3 px-4 text-center">
                <span class="badge rounded-pill px-3 py-2 fw-normal" style="background-color: #E8E2D5; color: #4A4A4A;">
                  {{ $user->nama_kelas }}
                </span>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="4" class="text-center py-4 text-muted">Belum ada data pengguna.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>