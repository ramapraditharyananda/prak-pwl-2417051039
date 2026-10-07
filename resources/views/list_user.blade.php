@extends('layouts.app')

@section('content')

<div class="container py-5">

    @if(session('success'))

        <div
            class="alert alert-success alert-dismissible fade show shadow-sm border-0"
            role="alert"
        >

            <strong>✓ Berhasil!</strong>
            {{ session('success') }}

            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close"
            ></button>

        </div>

    @endif

    @if(session('error'))

        <div
            class="alert alert-danger alert-dismissible fade show shadow-sm border-0"
            role="alert"
        >

            <strong>✕ Gagal!</strong>
            {{ session('error') }}

            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close"
            ></button>

        </div>

    @endif

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h1 class="fw-bold mb-1">
                Daftar Pengguna
            </h1>

            <p class="text-muted mb-0">
                Data pengguna yang telah terdaftar dalam sistem.
            </p>

        </div>


        <a
            href="{{ route('users.create') }}"
            class="btn btn-primary"
        >
            + Tambah Pengguna
        </a>

    </div>

    <div class="card border-0 shadow-sm">

        <div class="card-body p-0">

            <x-user-table :users="$users" />

        </div>

    </div>

</div>

@endsection