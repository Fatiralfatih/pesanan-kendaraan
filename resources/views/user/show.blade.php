<x-layout>


    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">User / View /</span> Account</h4>
        <div class="row">
            <!-- User Sidebar -->
            <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                <!-- User Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="user-avatar-section">
                            {{-- <div class="d-flex align-items-center flex-column">
                                <img class="img-fluid rounded mb-3 pt-1 mt-4" src="../../assets/img/avatars/15.png"
                                    height="100" width="100" alt="User avatar" />
                                <div class="user-info text-center">
                                    <h4 class="mb-2">{{ $user->name }}</h4>
                                    <span class="badge bg-label-secondary mt-1">{{ $user->role }}</span>
                                </div>
                            </div> --}}
                        </div>
                        <p class="mt-4 small text-uppercase text-muted">Details</p>
                        <div class="info-container">
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <span class="fw-medium me-1">Nama:</span>
                                    <span>{{ $profil->user->nama }}</span>
                                </li>
                                <li class="mb-2 pt-1">
                                    <span class="fw-medium me-1">Nama Lengkap:</span>
                                    <span>{{ $profil->nama_lengkap }}</span>
                                </li>
                                <li class="mb-2 pt-1">
                                    <span class="fw-medium me-1">Email:</span>
                                    <span>{{ $profil->user->email }}</span>
                                </li>
                                <li class="mb-2 pt-1">
                                    <span class="fw-medium me-1">No_HP:</span>
                                    <span>{{ $profil->no_hp }}</span>
                                </li>
                                <li class="mb-2 pt-1">
                                    <span class="fw-medium me-1">Alamat:</span>
                                    <span>{{ $profil->alamat }}</span>
                                </li>
                                <li class="pt-1">
                                    <span class="fw-medium me-1">Tanggal Lahir:</span>
                                    <span>{{ date($profil->tgl_lahir) }}</span>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-center">
                                <a href="javascript:;" class="btn btn-primary me-3"
                                    data-bs-target="#editUser{{ $profil->id }}" data-bs-toggle="modal">Update</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- edit user --}}
    <div class="modal fade" id="editUser{{ $profil->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('user.update', ['id' => $profil->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        @if (Auth::user()->role == 'admin')
                            <input type="hidden" name="role" value="admin">
                        @else
                            <input type="hidden" name="role" value="atasan">
                        @endif
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama </label>
                            <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama', $profil->user->nama) }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap', $profil->nama_lengkap) }}" class="form-control" required>
                        </div>
                        <div class="mt-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" id="alamat" name="alamat" class="form-control" value="{{ old('alamat', $profil->alamat) }}" required>
                        </div>
                        <div class="mt-3">
                            <label for="no_hp" class="form-label">NO HP</label>
                            <input type="string" id="no_hp" name="no_hp" value="{{ old('no_hp', $profil->no_hp) }}" class="form-control" required>
                        </div>
                        <div class="mt-3">
                            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" id="tgl_lahir" name="tgl_lahir" value="{{ old('tgl_lahir', $profil->tgl_lahir) }}" class="form-control" required>
                        </div>
                        <div class="mt-3">
                            <label for="email" class="form-label">Email </label>
                            <input type="email" id="email" name="email" value="{{ old('email', $profil->user->email) }}" class="form-control" required>
                        </div>
                        <div class="mt-3">
                            <label for="password" class="form-label">Password </label>
                            <input type="password" id="password" name="password" value="{{ old('password', $profil->user->password) }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
