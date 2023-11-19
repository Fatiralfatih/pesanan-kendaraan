<x-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row mb-5">
            @foreach ($kendaraans as $kendaraan)
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-header">Nama Kendaraan : {{ $kendaraan->nama_kendaraan }}</div>
                        <div class="card-body">
                            <h5 class="card-title">Konsumsi BBM : {{ $kendaraan->konsumsi_bbm }} Liter</h5>
                            <p class="card-text fs-5">
                                Jadwal Service : {{ $kendaraan->jadwal_service }}
                            </p>
                            <p class="card-subtitle text-muted mb-2">uploaded
                                {{ $kendaraan->created_at->diffForHumans() }}</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#pesan{{ $kendaraan->id }}">
                                Pesan
                            </button>
                        </div>
                    </div>
                </div>
                {{-- ------------------- ------ --}}
                {{-- ---------pesan  ------------ --}}
                {{-- ------------------------- --}}
                <div class="modal fade" id="pesan{{ $kendaraan->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                        <div class="modal-content p-3 p-md-5">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <div class="text-center mb-4">
                                    <h3 class="mb-2">Pesan Kendaraan {{ $kendaraan->nama_kendaraan }} </h3>
                                </div>
                                <form action="{{ route('pesanan.store') }}" method="post" id="addNewCCForm"
                                    class="row g-3">
                                    @csrf
                                    {{-- <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}"> --}}
                                    <div class="col-12">
                                        <div class="input-group input-group-merge">
                                            <input id="nama_kendaraan" name="kendaraan_id"
                                                class="form-control credit-card-mask" type="hidden"
                                                value="{{ $kendaraan->id }}" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="driver">Driver</label>
                                        <input type="text" id="driver" name="driver" class="form-control"
                                            placeholder="masukkan Driver" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="pegawai">Pegawai</label>
                                        <input type="text" id="pegawai" name="pegawai" class="form-control"
                                            placeholder="Masukkan Pegawai" />
                                    </div>

                                    @foreach ($user as $atasan)
                                        <div class="form-check">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{ $atasan->nama }}
                                            </label>
                                            <input class="form-check-input" type="checkbox" name="atasan_id[]"
                                               value="{{ $atasan->id }}" id="flexCheckDefault" required>
                                        </div>
                                    @endforeach


                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Pesan</button>
                                        <button type="reset" class="btn btn-label-secondary btn-reset"
                                            data-bs-dismiss="modal" aria-label="Close">
                                            Cancel
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
