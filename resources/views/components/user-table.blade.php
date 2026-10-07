<div class="table-responsive">

    <table class="table table-hover align-middle mb-0">

        <thead class="table-dark">

            <tr>
                <th class="px-4">ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th class="text-center">Aksi</th>
            </tr>

        </thead>

        <tbody>

            @forelse ($users as $user)

                <tr>

                    <td class="px-4">
                        {{ $user->id }}
                    </td>

                    <td class="fw-semibold">
                        {{ $user->nama }}
                    </td>

                    <td>
                        {{ $user->nim }}
                    </td>

                    <td>

                        <span class="badge bg-primary">
                            {{ $user->nama_kelas }}
                        </span>

                    </td>

                    <td>

                        <div class="d-flex justify-content-center gap-2">

                            <a
                                href="{{ route('users.edit', $user->id) }}"
                                class="btn btn-sm btn-warning px-3"
                            >
                                ✏ Edit
                            </a>

                            <form
                                action="{{ route('users.destroy', $user->id) }}"
                                method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus data {{ $user->nama }}?')"
                            >

                                @csrf

                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-sm btn-danger px-3"
                                >
                                    🗑 Hapus
                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

            @empty

                <tr>

                    <td
                        colspan="5"
                        class="text-center py-4"
                    >
                        Belum ada data pengguna.
                    </td>

                </tr>

            @endforelse

        </tbody>

    </table>

</div>