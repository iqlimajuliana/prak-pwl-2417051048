<div class="card shadow-sm border-0">
  <div class="card-body p-0">
    <div class="table-responsive">
      <table class="table table-hover table-striped mb-0 align-middle">
        <thead class="table-dark">
          <tr>
            <th class="text-center" style="width: 80px;">ID</th>
            <th>Nama Lengkap</th>
            <th>NPM</th>
            <th class="text-center">Kelas</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($users as $user)
            <tr>
              <td class="text-center fw-bold">{{ $user->id }}</td>
              <td>{{ $user->nama }}</td>
              <td><span class="badge bg-secondary">{{ $user->nim }}</span></td>
              <td class="text-center">
                <span class="badge bg-success">{{ $user->nama_kelas }}</span>
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