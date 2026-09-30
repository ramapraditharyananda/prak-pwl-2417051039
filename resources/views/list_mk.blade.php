@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Daftar Mata Kuliah</h2>

    <a href="/matakuliah/create">Tambah Mata Kuliah</a>

    <br><br>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($mataKuliah as $mk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mk->nama_mk }}</td>
                    <td>{{ $mk->sks }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection