<?php

namespace App\Http\Controllers;

use App\Models\Dealer;
use App\Models\User;
use App\Models\Mechanic;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;

class AdminController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view('admin.dashboard', compact('user'));
    }

    public function dataUser(Request $request)
    {
        $user = Auth::user();
        $query = User::where('role', '!=', 'admin');
    
        if ($request->has('search') && $request->filled('search')) {
            $keyword = $request->input('search');
            $query->where(function ($q) use ($keyword) {
                $q->where('username', 'LIKE', "%$keyword%")
                    ->orWhere('email', 'LIKE', "%$keyword%")
                    ->orWhere('name', 'LIKE', "%$keyword%");
            });
        }
    
        $data = $query->paginate(5);
        $searchQuery = $request->input('search');
        $message = "Hasil pencarian dari : " . $searchQuery;

        if ($data->isEmpty()) {
            $message = "User not found.";
            return view('admin.datauser', compact('user', 'data', 'message', 'searchQuery'));
        }
    
        return view('admin.datauser', compact('user', 'data', 'message', 'searchQuery'));
    }

    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'role' => 'required|in:mechanic,dealer,customer',
        ]);

        $user = User::findOrFail($id);
        $user->role = $request->role;
        $user->save();

        return redirect()->back()->with('success', 'Role has been updated successfully.');
    }

    public function updateDealer(Request $request, $id)
    {
        $request->validate([
            'dealer_name' => 'required',
            'dealer_address' => 'required',
            'company' => 'required|in:yamaha,suzuki,honda',
        ]);

        $dealer = Dealer::findOrFail($id);
        $dealer->dealer_name = $request->dealer_name;
        $dealer->dealer_address = $request->dealer_address;
        $dealer->company = $request->company;
        $dealer->save();

        return redirect()->back()->with('success', 'Role has been updated successfully.');
    }

    public function destroyDealer($id)
    {
        $dealer = Dealer::findOrFail($id);
        $dealer->delete();

        return redirect()->back()->with('success', 'User has been deleted successfully.');
    }

    public function destroyMechanic($id)
    {
        $mechanic = Mechanic::findOrFail($id);
        $mechanic->delete();

        return redirect()->back()->with('success', 'User has been deleted successfully.');
    }
    
    public function dataDealer(Request $request)
    {
        $user = Auth::user();
        $keyword = $request->input('search');
        
        $users = DB::table('users')
            ->join('dealer', 'users.id', '=', 'dealer.user_id')
            ->select('dealer.id','dealer.dealer_name', 'dealer.dealer_address', 'dealer.company')
            ->where(function ($query) use ($keyword) {
                $query->where('dealer.dealer_name', 'like', "%$keyword%")
                      ->orWhere('dealer.dealer_address', 'like', "%$keyword%")
                      ->orWhere('dealer.company', 'like', "%$keyword%");
            })
            ->paginate(5);

        return view('admin.dataDealer', compact('user', 'users', 'keyword'));
    }

    public function dataMechanic(Request $request)
    {
        $user = Auth::user();
        $keyword = $request->input('search');

        $mechanics = Mechanic::with('user', 'dealer')
            ->whereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', "%$keyword%");
            })
            ->orWhereHas('dealer', function ($query) use ($keyword) {
                $query->where('dealer_name', 'LIKE', "%$keyword%");
            })
            ->orWhere('position', 'LIKE', "%$keyword%")
            ->paginate(5);

        return view('admin.dataMechanic', compact('user', 'mechanics', 'keyword'));
    }

    public function createDealer(Request $request)
    {
        $user = User::find($request->user_id);

        $request->validate([
            'dealer_name' => 'required',
            'dealer_address' => 'required',
            'company' => 'required|in:Yamaha,Suzuki,Honda',
        ]);

        if ($user){
            if ($user->dealer) {
                return redirect()->back()->with('error', 'User already has a dealer record');
            } else {
            $dealer = new Dealer;
            $dealer->dealer_name=$request->get('dealer_name');
            $dealer->dealer_address=$request->get('dealer_address');
            $dealer->company=$request->get('company');
            $dealer->user_id = $user->id;
            $dealer->save();
            
            
            return redirect()->route('admin.dataDealer')->with('success', 'Dealer data has been created successfully');

            }
        } else {
            return redirect()->back()->with('error', 'User not found');
        }
    }

    public function createMechanic(Request $request)
    {
        $user = User::find($request->user_id);
        $dealer = Dealer::find($request->dealer_id);

        $request->validate([
            'position' => 'required',
        ]);

        if ($user && $dealer) {
            try {
                // Pastikan mekanik belum terdaftar
                $existingMechanic = Mechanic::where('user_id', $user->id)->first();
    
                if ($existingMechanic) {
                    return redirect()->back()->with('error', "Mechanic with ID {$existingMechanic->id} is already registered");
                }
    
                $mechanic = new Mechanic;
                $mechanic->position = $request->position;
                $mechanic->user_id = $user->id;
                $mechanic->dealer_id = $dealer->id;
                $mechanic->save();
    
                return redirect()->route('admin.dataMechanic')->with('success', 'Mechanic data has been created successfully');
            } catch (QueryException $e) {
                return redirect()->back()->with('error', 'Failed to create mechanic: ' . $e->getMessage());
            }
        } else {
            return redirect()->back()->with('error', 'User or dealer not found');
        }
    }
}
