<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $title = 'Daftar Pengguna';
        $users = User::with('kelas')->get();
        return view('list_user', compact('users', 'title'));
    }

    public function create()
    {
        $title = 'Tambah Pengguna';
        $kelas = Kelas::all();
        return view('create_user', compact('kelas', 'title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'kelas_id' => 'required',
        ]);

        User::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect('/user')->with('success', 'Data pengguna berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $title = 'Edit Pengguna';
        $user = User::findOrFail($id);
        $kelas = Kelas::all();
        return view('edit_user', compact('user', 'kelas', 'title'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'kelas_id' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect('/user')->with('success', 'Data pengguna berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/user')->with('success', 'Data pengguna berhasil dihapus!');
    }
}