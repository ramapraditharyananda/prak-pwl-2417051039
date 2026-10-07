<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new UserModel();
    }
    
    public function index()
    {
        $users = $this->model->getUser();

        $title = 'Daftar Pengguna';

        return view('list_user', compact('users', 'title'));
    }

    public function create()
    {
        $kelas = Kelas::getKelas();

        $title = 'Buat Pengguna Baru';

        return view('create_user', compact('kelas', 'title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'npm' => 'required',
            'kelas_id' => 'required',
        ]);

        $user = new UserModel();

        $user->nama = $request->nama;
        $user->nim = $request->npm;
        $user->kelas_id = $request->kelas_id;

        $user->save();

        return redirect()
            ->route('users.index')
            ->with('success', 'Data pengguna berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $user = UserModel::findOrFail($id);

        $kelas = Kelas::getKelas();

        $title = 'Edit Pengguna';

        return view('edit_user', compact('user', 'kelas', 'title'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'npm' => 'required',
            'kelas_id' => 'required',
        ]);

        $user = UserModel::findOrFail($id);

        $user->update([
            'nama' => $request->nama,
            'nim' => $request->npm,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect()
            ->route('users.index')
            ->with('success', 'Data pengguna berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $user = UserModel::findOrFail($id);

        $user->delete();

        return redirect()
            ->route('users.index')
            ->with('success', 'Data pengguna berhasil dihapus.');
    }
}