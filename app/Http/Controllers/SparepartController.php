<?php

namespace App\Http\Controllers;

use App\Models\Sparepart;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSparepartRequest;
use App\Http\Requests\UpdateSparepartRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class SparepartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request){

    $user = Auth::user();
    $spareparts = Sparepart::all();
    $searchQuery = $request->input('search');

    foreach ($spareparts as $sparepart) {
        $sparepart->image = Storage::url('img/' . $sparepart->image);
    }

    $spareparts = Sparepart::when($searchQuery, function ($query, $searchQuery) {
        return $query->where('item_name', 'like', "%$searchQuery%");
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
        $dealerId = Auth::user()->id;

        // Validasi inputan jika diperlukan
        $validatedData = $request->validate([
            'item_name' => 'required',
            'price' => 'required|numeric',
            'quantity_left' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        // Buat instance model Sparepart dan isi dengan data dari request
        $sparepart = new Sparepart;
        $sparepart->item_name = $request->item_name;
        $sparepart->price = $request->price;
        $sparepart->quantity_left = $request->quantity_left;
        $sparepart->dealer_id = $dealerId;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName(); // Mengambil nama file asli
            $imagePath = $file->storeAs('public/img', $fileName); // Menyimpan file dengan nama asli
            $sparepart->image = str_replace('public/img/', '', $imagePath);
        }
    
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
            'item_name' => 'required',
            'price' => 'required|numeric',
            'quantity_left' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        // Retrieve the sparepart based on the provided $id
        $sparepart = Sparepart::findOrFail($id);
    
        // Update the sparepart with the validated request data
        $sparepart->item_name = $request->item_name;
        $sparepart->price = $request->price;
        $sparepart->quantity_left = $request->quantity_left;
    
        if ($request->hasFile('image')) {
            // Get the original filename of the uploaded image
            $originalFilename = $request->file('image')->getClientOriginalName();
    
            // Delete the existing image file if it exists
            if ($sparepart->image) {
                Storage::delete('public/img/' . $sparepart->image);
            }
    
            // Store the uploaded image with the original filename
            $request->file('image')->storeAs('public/img', $originalFilename);
    
            // Update the image field in the sparepart model
            $sparepart->image = $originalFilename;
        }
    
        // Save the updated sparepart
        $sparepart->save();
    
        // Redirect to the appropriate page or return a response
        // You can customize this part based on your application's logic
    
        // Redirect back to the sparepart list or any other desired route
        return redirect()->back()->with('success', 'Sparepart telah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function delete($id)
    {
        $sparepart = Sparepart::findOrFail($id);
    
        // Hapus gambar jika ada
        if ($sparepart->image) {
            $imagePath = public_path('storage/img/' . $sparepart->image);
    
            // Periksa apakah file gambar ada
            if (File::exists($imagePath)) {
                // Hapus file gambar
                File::delete($imagePath);
            }
        }
    
        $sparepart->delete();
    
        return redirect()->back()->with('success', 'Sparepart berhasil dihapus');
    }

    public function clearSearch()
{

    return redirect()->route('spareparts.index');
}
}
