<?php

namespace App\Http\Controllers;

use App\Models\Porsche;
use Illuminate\Http\Request;

class PorscheController extends Controller
{
    public function index()
    {
        $cars = Porsche::latest()->get();
        return view('porsche.index', compact('cars'));
    }

    public function create()
    {
        return view('porsche.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_model' => 'required',
            'kategori'   => 'required',
            'harga'      => 'required|numeric',
            'stok'       => 'required|numeric',
            'gambar'     => 'nullable|url'
        ]);

        Porsche::create($request->all());

        return redirect()->route('porsche.index')->with('success', 'Data Porsche berhasil ditambahkan!');
    }

    public function edit(Porsche $porsche)
    {
        return view('porsche.edit', compact('porsche'));
    }

    public function update(Request $request, Porsche $porsche)
    {
        $request->validate([
            'nama_model' => 'required',
            'kategori'   => 'required',
            'harga'      => 'required|numeric',
            'stok'       => 'required|numeric',
            'gambar'     => 'nullable|url'
        ]);

        $porsche->update($request->all());

        return redirect()->route('porsche.index')->with('success', 'Data Porsche berhasil diperbarui!');
    }

    public function destroy(Porsche $porsche)
    {
        $porsche->delete();
        return redirect()->route('porsche.index')->with('success', 'Data Porsche berhasil dihapus!');
    }
}