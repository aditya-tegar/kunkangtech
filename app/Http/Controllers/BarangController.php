<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    //
    public function index() {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    public function store(Request $request) {
        Barang::create($request->all());
        return redirect()->route('barang.index');
    }

    public function create()
    {
        return view('barang.create', compact('status'));
    }

    public function edit(Barang $barang) {
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, Barang $barang) {
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->jenis_barang = $request->jenis_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->keterangan = $request->keterangan;
        $barang->save();

        return redirect()->route('barang.index')->with('status','Barang updated!')->with('success', true);
    }

    public function destroy(Barang $barang) {
        $barang->delete();
        return redirect()->route('barang.index')->with('Barang deleted!')->with('success', true);
    }
}
