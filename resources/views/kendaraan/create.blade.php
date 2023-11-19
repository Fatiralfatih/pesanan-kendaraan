<x-layout>

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Validation</h4>
        <div class="row mb-4">
            <!-- Browser Default -->
            <form action="{{ route('kendaraan.store') }}" method="POST">
                @csrf
                <div class="col-md mb-4 mb-md-0">
                    <div class="card">
                        <h5 class="card-header">Create Kendaraan</h5>
                        <div class="card-body">
                            <form class="browser-default-validation">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-name">Nama Kendaraan</label>
                                    <input type="text" class="form-control" id="basic-default-name" name="nama_kendaraan"
                                        required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-email">Konsumsi BBM</label>
                                    <input type="text" id="basic-default-email" name="konsumsi_bbm" class="form-control"
                                        required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-email">Jadwal Servie</label>
                                    <input type="date" id="basic-default-email" name="jadwal_service" class="form-control"
                                        required />
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Create</button>
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
