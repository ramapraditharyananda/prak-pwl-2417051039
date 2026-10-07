@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-7">

            <div class="card border-0 shadow-sm">

                <div class="card-body p-4">

                    <h1 class="fw-bold mb-2">
                        Edit Pengguna
                    </h1>

                    <p class="text-muted mb-4">
                        Perbarui data pengguna yang telah tersimpan.
                    </p>


                    <form
                        action="{{ route('users.update', $user->id) }}"
                        method="POST"
                    >

                        @csrf

                        @method('PUT')


                        {{-- NAMA --}}

                        <div class="mb-3">

                            <label
                                for="nama"
                                class="form-label"
                            >
                                Nama
                            </label>

                            <input
                                type="text"
                                id="nama"
                                name="nama"
                                class="form-control"
                                value="{{ old('nama', $user->nama) }}"
                                required
                            >

                        </div>


                        {{-- NPM --}}

                        <div class="mb-3">

                            <label
                                for="npm"
                                class="form-label"
                            >
                                NPM
                            </label>

                            <input
                                type="text"
                                id="npm"
                                name="npm"
                                class="form-control"
                                value="{{ old('npm', $user->nim) }}"
                                required
                            >

                        </div>


                        {{-- KELAS --}}

                        <div class="mb-4">

                            <label
                                for="kelas_id"
                                class="form-label"
                            >
                                Kelas
                            </label>

                            <select
                                name="kelas_id"
                                id="kelas_id"
                                class="form-select"
                                required
                            >

                                @foreach ($kelas as $kelasItem)

                                    <option
                                        value="{{ $kelasItem->id }}"
                                        {{ old('kelas_id', $user->kelas_id) == $kelasItem->id ? 'selected' : '' }}
                                    >
                                        {{ $kelasItem->nama_kelas }}
                                    </option>

                                @endforeach

                            </select>

                        </div>


                        {{-- BUTTON --}}

                        <div class="d-flex gap-2">

                            <a
                                href="{{ route('users.index') }}"
                                class="btn btn-light border"
                            >
                                ← Kembali
                            </a>

                            <button
                                type="submit"
                                class="btn btn-primary"
                            >
                                ✓ Simpan Perubahan
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection