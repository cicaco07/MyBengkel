<?php

namespace App\Http\Controllers;

use App\Models\Sparepart;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSparepartRequest;
use App\Http\Requests\UpdateSparepartRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SparepartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request){

    $user = Auth::user();
    $spareparts = Sparepart::get();
    $searchQuery = $request->input('search');

    $spareparts = Sparepart::when($searchQuery, function ($query, $searchQuery) {
        return $query->where('namaitem', 'like', "%$searchQuery%");
    })->paginate(10);

    return view('dealer.sparepart', compact('user', 'spareparts'));
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
        return redirect()->back()->with('success', 'Sparepart berhasil ditambahkan');
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
    public function update(UpdateSparepartRequest $request, $id)
    {
        $request->validate([
            'namaitem' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);
    
        // Retrieve the sparepart based on the provided $id
        $sparepart = Sparepart::findOrFail($id);
    
        // Update the sparepart with the validated request data
        $sparepart->namaitem = $request->namaitem;
        $sparepart->harga = $request->harga;
        $sparepart->stok = $request->stok;
    
        // Save the updated sparepart
        $sparepart->save();
    
        // Redirect to the appropriate page or return a response
        // You can customize this part based on your application's logic

    // Redirect back to the sparepart list or any other desired route
    return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $sparepart = Sparepart::findOrFail($id);
        $sparepart->delete();

        return redirect()->back()->with('success', 'Sparepart berhasil dihapus');
    }  

    public function clearSearch()
{

    return redirect()->route('spareparts.index');
}
}
