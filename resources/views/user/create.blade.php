<x-layout>

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Validation</h4>
        <div class="row mb-4">
            <!-- Browser Default -->
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="col-md mb-4 mb-md-0">
                    <div class="card">
                        <h5 class="card-header">Create User</h5>
                        <div class="card-body">
                            <form class="browser-default-validation">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-name">Name</label>
                                    <input type="text" class="form-control" id="basic-default-name" name="name"
                                        required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-email">Email</label>
                                    <input type="email" id="basic-default-email" name="email" class="form-control"
                                        required />
                                </div>
                                <div class="mb-3 form-password-toggle">
                                    <label class="form-label" for="basic-default-password">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="basic-default-password" name="password"
                                            class="form-control"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="basic-default-password3" required />
                                        <span class="input-group-text cursor-pointer" id="basic-default-password3"><i
                                                class="ti ti-eye-off"></i></span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-country">Role</label>
                                    <select class="form-select" id="basic-default-country" name="role" required>
                                        <option selected disabled>Pilih Role</option>
                                        <option value="admin">Admin</option>
                                        <option value="atasan">Atasan</option>
                                    </select>
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
