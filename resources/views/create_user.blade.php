@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="card border-0 shadow-sm">

                <div class="card-body p-4">

                    <h1 class="fw-bold mb-2">
                        Buat Pengguna Baru
                    </h1>

                    <p class="text-muted mb-4">
                        Tambahkan data pengguna ke dalam sistem.
                    </p>

                    <form action="{{ route('users.store') }}" method="POST">

                        @csrf

                        <div class="mb-3">
                            <label for="nama" class="form-label">
                                Nama
                            </label>

                            <input
                                type="text"
                                id="nama"
                                name="nama"
                                class="form-control"
                                placeholder="Masukkan nama lengkap"
                            >
                        </div>

                        <div class="mb-3">
                            <label for="npm" class="form-label">
                                NPM
                            </label>

                            <input
                                type="text"
                                id="npm"
                                name="npm"
                                class="form-control"
                                placeholder="Masukkan NPM"
                            >
                        </div>

                        <div class="mb-4">
                            <label for="kelas_id" class="form-label">
                                Kelas
                            </label>

                            <select
                                name="kelas_id"
                                id="kelas_id"
                                class="form-select"
                            >
                                @foreach ($kelas as $kelasItem)
                                    <option value="{{ $kelasItem->id }}">
                                        {{ $kelasItem->nama_kelas }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-flex gap-2">

                            <a
                                href="{{ route('users.index') }}"
                                class="btn btn-light border"
                            >
                                Kembali
                            </a>

                            <button
                                type="submit"
                                class="btn btn-primary"
                            >
                                Simpan Pengguna
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>

</div>

@endsection