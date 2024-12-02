<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coffee;
use App\Models\Product;

class CoffeeController extends Controller
{
    
    public function index()
    {
        return view('buktamuser.us');
    }

    // Menyimpan data buku tamu
    public function simpan(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'nama' => 'required|string',
            'email' => 'required|string',
            'no_hp' => 'required|numeric|',
            'nama_barang' => 'required|string|max:255',
            'jumlah' => 'required|integer',
            'harga' => 'required',
        ]);

        Product::create($request->all());
        return redirect()->back()->with('status', 'Data berhasil disimpan!');
    }

}
