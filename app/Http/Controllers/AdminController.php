<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalWisata = Wisata::count();
        return view('admin.dashboard', compact('totalWisata'));
    }

    public function home()
    {
        return view('admin.home');
    }

    public function users()
    {
        return view('admin.users');
    }

    // CRUD Wisata
    public function wisata()
    {
        // Pagination: 5 
        $wisata = Wisata::latest()->paginate(5);
        return view('admin.wisata', compact('wisata'));
    }

    public function createWisata()
    {
        return view('admin.wisata-create');
    }

    public function storeWisata(Request $request)
    {
        $request->validate([
            'nama_wisata' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->only(['nama_wisata', 'deskripsi']);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/wisata'), $filename);
            $data['gambar'] = 'uploads/wisata/' . $filename;
        }

        Wisata::create($data);

        return redirect()->route('admin.wisata')->with('success', 'Destinasi wisata berhasil ditambahkan!');
    }

    public function editWisata($id)
    {
        $wisata = Wisata::findOrFail($id);
        return view('admin.wisata-edit', compact('wisata'));
    }

    public function updateWisata(Request $request, $id)
    {
        $request->validate([
            'nama_wisata' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $wisata = Wisata::findOrFail($id);
        $data = $request->only(['nama_wisata', 'deskripsi']);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($wisata->gambar && file_exists(public_path($wisata->gambar))) {
                unlink(public_path($wisata->gambar));
            }

            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/wisata'), $filename);
            $data['gambar'] = 'uploads/wisata/' . $filename;
        }

        $wisata->update($data);

        return redirect()->route('admin.wisata')->with('success', 'Destinasi wisata berhasil diupdate!');
    }

    public function deleteWisata($id)
    {
        $wisata = Wisata::findOrFail($id);

        // Hapus gambar
        if ($wisata->gambar && file_exists(public_path($wisata->gambar))) {
            unlink(public_path($wisata->gambar));
        }

        $wisata->delete();

        return redirect()->route('admin.wisata')->with('success', 'Destinasi wisata berhasil dihapus!');
    }
}