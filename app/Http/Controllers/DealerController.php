<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Mechanic;
use App\Models\Dealer;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use App\Models\Sparepart;
use App\Repositories\ServicesRepository;
use App\Repositories\DealerRepository;
use Carbon\Carbon;

class DealerController extends Controller
{   
    private $dealerRepository;

    public function __construct(DealerRepository $dealerRepository)
    {
        $this->dealerRepository = $dealerRepository;
    }
    public function dashboard()
    {
        $user = Auth::user();
        return view('dealer.dashboard', compact('user'));
    }

    public function dealerku()
    {
        $user = Auth::user();
        return view('dealer.dealerku', compact('user'));
    }

    public function pegawai()
    {
        $user = Auth::user();
        $mechanic = $user->mechanic;
        $dealer = $user->dealer;
        
        $users = User::where('role', 'mechanic')->whereHas('mechanic', function ($query) use ($dealer) {
            $query->where('dealer_id', $dealer->id);
        })->get();
    
        // Mendapatkan posisi (position) dari mekanik yang sesuai dengan dealer_id
        $positions = Mechanic::where('dealer_id', $dealer->id)->pluck('position');
    
        return view('dealer.pegawai', compact('user', 'users', 'positions'));
    }
    public function antrian()
{
    $user = Auth::user();
    $dealer = $user->dealer;

    $services = Service::where('dealer_id', $dealer->id)
        ->where('status', '!=', 'done') // Tambahkan kondisi untuk menghindari status "done"
        ->get();

    return view('dealer.antrian', compact('user', 'services'));
}


    
    public function sparepart()
    {
        $user = Auth::user();
        $spareparts = Sparepart::get();
        return view('dealer.sparepart', compact('user', 'spareparts'));
    }

    public function servis()
    {
        $user = Auth::user();
        return view('dealer.servis', compact('user'));
    }

    public function transaksi()
{
    $user = Auth::user();
    $dealer = $user->dealer;
    $services = Service::where('dealer_id', $dealer->id)
        ->where('status', '=', 'done')
        ->get();

    return view('dealer.transaksi', compact('services','user'));
}
public function servis6()
{   
    $month = 6;
    $user = Auth::user();
    $dealer = $user->dealer;
    $services = Service::where('dealer_id', $dealer->id)
    ->where('status', 'done')
    ->whereBetween('plan_date', ['2023-06-01', '2023-06-30'])
    ->get();

    return view('dealer.data-transaksi', compact('services','user','month'));
}
public function servis7()
{   
    $month = 7;
    $user = Auth::user();
    $dealer = $user->dealer;
    $services = Service::where('dealer_id', $dealer->id)
    ->where('status', 'done')
    ->whereBetween('plan_date', ['2023-07-01', '2023-07-31'])
    ->get();

    return view('dealer.data-transaksi', compact('services','user','month'));
}

    public function show($id)
    {
        $user = Auth::user();
        $dealer = Dealer::findOrFail($id);

        $services = Service::where('dealer_id', $dealer->id)->where('status', ['process', 'repairing'])->paginate(5);
        return view('customer.detailDealer', compact('user', 'services', 'dealer'));
    }
    public function update(Request $request)
{
    $user = $request->user();
    $dealer = $user->dealer;
    $request->validate([
        'dealer_name' => 'required',
        'dealer_address' => 'required',
        'maps' => 'required',
        'company' => 'required',
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $dealer->dealer_name = $request->dealer_name;
    $dealer->dealer_address = $request->dealer_address;
    $dealer->maps = $request->maps;
    $dealer->company = $request->company;

    if ($request->hasFile('avatar')) {
        if ($dealer->avatar && file_exists(storage_path('app/public/' . $dealer->avatar))) {
            Storage::delete('public/' . $dealer->avatar);
        }
        $image = $request->file('avatar')->store('images', 'public');
        $dealer->avatar = $image;
    }
    $dealer->save();

    return redirect()->back()->with('success', 'Profil berhasil diubah');
}
public function updateMekanik(Request $request, $id)
{   
    $user = User::findOrFail($id);
    $mechanic = $user->mechanic;
    
    $request->validate([
        'position' => 'required',
    ]);
    
    $mechanic->position = $request->position;
    $mechanic->update();
    
    // Tambahkan logika lain yang Anda perlukan
    
    return redirect()->back()->with('success', 'Mekanik berhasil diperbarui');
}
public function deleteMekanik($id)
{
    $user = User::findOrFail($id);
    $mechanic = $user->mechanic;

    // Tambahkan logika lain yang Anda perlukan sebelum menghapus mekanik

    $mechanic->delete();

    // Tambahkan logika lain yang Anda perlukan setelah menghapus mekanik

    return redirect()->back()->with('success', 'Mekanik berhasil dihapus');
}
public function search(Request $request)
{
    $user = Auth::user();
    $keyword = $request->input('search');
    $search = $keyword; // Simpan nilai $keyword ke dalam variabel $search

    $dealer = $user->dealer;

    $services = Service::where('dealer_id', $dealer->id)
        ->where('status', '!=', 'done');

    if (!empty($keyword)) {
        $services->where(function ($query) use ($keyword) {
            $query->whereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', "%$keyword%");
            })
            ->orWhere('plat_num', 'LIKE', "%$keyword%")
            ->orWhere('problem', 'LIKE', "%$keyword%")
            ->orWhere('status', 'LIKE', "%$keyword%");
        });
    }

    $services = $services->get();

    return view('dealer.antrian', compact('user', 'services', 'search'));
}
public function dataservis()
    {
        $user = Auth::user();
        $dealer = $user->dealer;
    
        $services = Service::where('dealer_id', $dealer->id)
            ->where('status', '=', 'done') // Tambahkan kondisi untuk menghindari status "done"
            ->get();
    
        return view('dealer.dataservis', compact('user', 'services'));
    }
    
    public function search2(Request $request)
    {
        $user = Auth::user();
        $keyword = $request->input('search');
        $search = $keyword; // Simpan nilai $keyword ke dalam variabel $search
    
        $dealer = $user->dealer;
    
        $services = Service::where('dealer_id', $dealer->id)
            ->where('status', '=', 'done');
    
        if (!empty($keyword)) {
            $services->where(function ($query) use ($keyword) {
                $query->whereHas('user', function ($query) use ($keyword) {
                    $query->where('name', 'LIKE', "%$keyword%");
                })
                ->orWhere('plat_num', 'LIKE', "%$keyword%")
                ->orWhere('problem', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('price', 'LIKE', "%$keyword%");
            });
        }
    
        $services = $services->get();
    
        return view('dealer.dataservis', compact('user', 'services', 'search'));
    }


}
