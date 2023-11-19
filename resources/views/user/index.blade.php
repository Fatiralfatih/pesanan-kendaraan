<x-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="container">
                <h5 class="card-header">Data User</h5>
                <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah Data</a>

                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No HP</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($users as $user)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td>{{ $user->nama }}</td>
                                    <td> {{ $user->email }} </td>
                                    <td>{{ $user->profil->no_hp }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td class="text-left">
                                        <a href="{{ route('user.edit', ['id' => $user->id]) }}"><i
                                                class="ti ti-pencil"></i> Edit</a>
                                                <a type="button" class="text-danger" data-bs-toggle="modal"
                                                data-bs-target="#delete{{ $user->id }}">
                                                <i class="ti ti-trash"></i>
                                               Delete
                                            </a>
                                            {{-- ----------------------- --}}
                                            {{-- ------delete user---  --}}
                                            {{-- ------------------------ --}}
                                            <div class="modal fade" id="delete{{ $user->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus
                                                            </h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Yakin Mau Hapus user {{ $user->nama }}
                                                        </div>
                                                        <form
                                                            action="{{ route('user.delete', ['id' => $user->id]) }}" 
                                                            method="POST">
                                                            @method('delete')
                                                            @csrf
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->
        </div>
    </div>

</x-layout>
