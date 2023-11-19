<x-layout>

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Update</h4>
        <div class="row mb-4">
            <!-- Browser Default -->
            <form action="{{ route('user.update', ['id' => $user->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-md mb-4 mb-md-0">
                    <div class="card">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <h5 class="card-header">Update User {{ $user->nama }} </h5>
                        <div class="card-body">
                            <form class="browser-default-validation">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-name">Nama</label>
                                    <input type="text" class="form-control" id="basic-default-name" name="nama"
                                        value="{{ old('name', $user->nama) }}" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-name">{{ __('Nama Lengkap') }}</label>
                                    <input type="text" class="form-control" id="basic-default-name"
                                        name="nama_lengkap"
                                        value="{{ old('nama_lengkap', $user->profil->nama_lengkap) }}" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-name">{{ __('Alamat') }}</label>
                                    <input type="text" class="form-control" id="basic-default-name" name="alamat"
                                        value="{{ old('alamat', $user->profil->alamat) }}" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-email">No Hp</label>
                                    <input type="text" id="basic-default-email" name="no_hp" class="form-control"
                                        value="{{ old('no_hp', $user->profil->no_hp) }}" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-email">Tanggal Lahir</label>
                                    <input type="date" id="basic-default-email" name="tgl_lahir" class="form-control"
                                        value="{{ old('tgl_lahir', $user->profil->tgl_lahir) }}" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-email">Email</label>
                                    <input type="email" id="basic-default-email" name="email" class="form-control"
                                        value="{{ old('email', $user->email) }}" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-country">Role</label>
                                    <select class="form-select" id="basic-default-country" name="role" required>
                                        @if ($user->role == 'admin')
                                            <option selected disabled>Pilih Role</option>
                                            <option value="admin" selected>Admin</option>
                                            <option value="atasan">Atasan</option>
                                        @elseif ($user->role == 'atasan')
                                            <option selected value="{{ old('role', $user->role) }}">atasan</option>
                                        @endif
                                    </select>
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
