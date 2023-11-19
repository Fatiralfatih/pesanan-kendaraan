<x-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">UI Elements /</span> Cards Basic</h4>
        @foreach ($pesanans as $pesanan)
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card ">
                    @if (!$pesanan->pivot->confirmed)
                        <div class="card-header">{{ $pesanan->kendaraan->nama_kendaraan }}</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $pesanan->driver }}</h5>
                            <p class="card-text">{{ $pesanan->pegawai }}</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal{{ $pesanan->id }}">
                                acc
                            </button>
                        </div>
                        <div class="card-footer text-muted">
                            <span class="badge bg-label-danger">Pesanan Belum Diterima</span>
                        </div>

                        <div class="modal fade" id="exampleModal{{ $pesanan->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">pesanan
                                            {{ $pesanan->kendaraan->nama_kendaraan }} </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('pesanan-atasan.acc', ['id' => $pesanan->id]) }}"
                                        method="post">
                                        @csrf
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="card-header">{{ $pesanan->kendaraan->nama_kendaraan }}</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $pesanan->driver }}</h5>
                            <p class="card-text">{{ $pesanan->pegawai }}</p>
                        </div>
                        <div class="card-footer text-muted">
                            <span class="badge bg-label-success">Pesanan Sudah Diterima</span>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
