<x-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Data</span> Pesanan</h4>

        <div class="card">
            <h5 class="card-header">Data pesanan</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Admin</th>
                            <th>Kendaraan</th>
                            <th>Driver</th>
                            <th>Pegawai</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($pesanans as $pesanan)
                            <tr>
                                <td>
                                    <span class="fw-medium">{{ $pesanan->user->nama }}</span>
                                </td>
                                <td>{{ $pesanan->kendaraan->nama_kendaraan }}</td>
                                <td>{{ $pesanan->driver }}</td>
                                <td>{{ $pesanan->pegawai }}</td>
                                <td>
                                    @foreach ($pesanan->atasan as $atasan)
                                        @if ($atasan->pivot->confirmed)
                                            <span class="badge bg-label-success mb-2">
                                                atasan {{ $atasan->nama }} sudah acc
                                            </span><br>
                                        @else
                                            <div class="d-flex">
                                                <span class="badge bg-label-warning mb-2">
                                                    atasan {{ $atasan->nama }} belum acc
                                                </span>
                                            </div>
                                        @endif
                                    @endforeach
                                </td>

                                <td>
                                    <a href="asdsa:;" class="btn btn-secondary btn-sm">Show</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
