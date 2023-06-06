<?php

namespace App\Http\Controllers;

use App\Models\Sparepart;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSparepartRequest;
use App\Http\Requests\UpdateSparepartRequest;

class SparepartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSparepartRequest $request)
    {
        // Validasi inputan jika diperlukan
        $validatedData = $request->validate([
            'namaitem' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);
    
        // Buat instance model Sparepart dan isi dengan data dari request
        $sparepart = new Sparepart;
        $sparepart->namaitem = $request->namaitem;
        $sparepart->harga = $request->harga;
        $sparepart->stok = $request->stok;
    
        // Simpan data ke database
        $sparepart->save();
    
        // Redirect ke halaman yang diinginkan setelah menyimpan data
        return redirect()->route('dealer.sparepart')->with('success', 'Sparepart berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sparepart $sparepart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sparepart $sparepart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSparepartRequest $request, Sparepart $sparepart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $sparepart = Sparepart::findOrFail($id);
        $sparepart->delete();

        return redirect()->route('dealer.sparepart')->with('success', 'Sparepart berhasil dihapus');
    }  
}
