<x-layout>

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Update</h4>
        <div class="row mb-4">
            <!-- Browser Default -->
            <form action="{{ route('kendaraan.update', [$kendaraan->nama_kendaraan]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-md mb-4 mb-md-0">
                    <div class="card">
                        <h5 class="card-header">Update kendaraan</h5>
                        <div class="card-body">
                            <form class="browser-default-validation">
                                <div class="mb-3">
                                    <label class="form-label" for="nama_kendaraan">Nama Kendaraan</label>
                                    <input type="text" class="form-control" id="nama_kendaraan" name="nama_kendaraan"
                                        value="{{ old('nama_kendaraan', $kendaraan->nama_kendaraan) }}" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="konsumsi_bbm">Konsumsi BBM</label>
                                    <input type="text" id="konsumsi_bbm" name="konsumsi_bbm" class="form-control"
                                        value="{{ old('konsumsi_bbm', $kendaraan->konsumsi_bbm) }}" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="jadwal_service">Jadwal Service</label>
                                    <input type="date" id="jadwal_service" name="jadwal_service" class="form-control"
                                        value="{{ old('jadwal_service', $kendaraan->jadwal_service) }}" required />
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /Browser Default -->
        </div>
    </div>
</x-layout>
