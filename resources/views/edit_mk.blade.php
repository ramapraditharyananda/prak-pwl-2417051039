@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Edit Mata Kuliah</h2>

    <form action="{{ route('matakuliah.update', $mataKuliah->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Nama Mata Kuliah</label>
            <input type="text" name="nama_mk" value="{{ $mataKuliah->nama_mk }}" required>
        </div>

        <br>

        <div>
            <label>SKS</label>
            <input type="number" name="sks" value="{{ $mataKuliah->sks }}" required>
        </div>

        <br>

        <button type="submit">Update</button>
    </form>
</div>

@endsection