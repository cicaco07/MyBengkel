<?php

namespace App\Http\Controllers;

use App\Repositories\DealerRepository;
use App\Repositories\MechanicRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;


class AdminController extends Controller
{
    private $userRepository;
    private $dealerRepository;
    private $mechanicRepository;

    public function __construct(UserRepository $userRepository, DealerRepository $dealerRepository, MechanicRepository $mechanicRepository)
    {
        $this->userRepository = $userRepository;
        $this->dealerRepository = $dealerRepository;
        $this->mechanicRepository = $mechanicRepository;
    }

    public function dashboard()
    {
        $user = Auth::user();
        return view('admin.dashboard', compact('user'));
    }

    public function dataUser(Request $request, UserRepository $userRepository)
    {
        $user = Auth::user();
        $keyword = $request->input('search');

        $result = $userRepository->findByKeyword($keyword);
        $data = $result['data'];
        $message = $result['message'];
        $searchQuery = $result['searchQuery'];

        return view('admin.datauser', compact('user', 'data', 'message', 'searchQuery'));
    }

    public function updateUser(Request $request, $id, UserRepository $userRepository)
    {
        $request->validate([
            'role' => 'required|in:mechanic,dealer,customer',
        ]);
    
        $user = $userRepository->find($id);
        $user->role = $request->role;
        $user->save();
    
        return redirect()->back()->with('success', 'Role has been updated successfully.');
    }

    public function updateDealer(Request $request, $id, DealerRepository $dealerRepository)
    {
        $request->validate([
            'company' => 'required|in:Yamaha,Suzuki,Honda',
            'maps' => 'required'
        ]);

        $data = [
            'company' => $request->company,
            'maps' => $request->maps,
        ];

        $dealer = $dealerRepository->update($id, $data);

        return redirect()->back()->with('success', 'Dealer has been updated successfully.');
    }


    public function destroyDealer($id, DealerRepository $dealerRepository)
    {
        $dealerRepository->delete($id);

        return redirect()->back()->with('success', 'Dealer has been deleted successfully.');
    }

    public function destroyMechanic($id, MechanicRepository $mechanicRepository)
    {
        $mechanicRepository->delete($id);

        return redirect()->back()->with('success', 'Mechanic has been deleted successfully.');
    }
    
    public function dataDealer(Request $request, DealerRepository $dealerRepository)
    {
        $user = Auth::user();
        $keyword = $request->input('search');
        $users = $dealerRepository->findByKeyword($keyword);

        return view('admin.dataDealer', compact('user', 'users', 'keyword'));
    }


    public function dataMechanic(Request $request, MechanicRepository $mechanicRepository)
    {
        $user = Auth::user();
        $keyword = $request->input('search');
        $mechanics = $mechanicRepository->findByKeyword($keyword);

        return view('admin.dataMechanic', compact('user', 'mechanics', 'keyword'));
    }


    public function createDealer(Request $request, UserRepository $userRepository, DealerRepository $dealerRepository)
    {
        $user = $userRepository->find($request->user_id);

        $request->validate([
            'dealer_name' => 'required',
            'dealer_address' => 'required',
            'company' => 'required|in:Yamaha,Suzuki,Honda',
        ]);

        if ($user) {
            if ($user->role == 'dealer') {
                if ($user->dealer) {
                    return redirect()->back()->with('error', 'User already has a dealer record');
                } else {
                    $data = [
                        'dealer_name' => $request->dealer_name,
                        'dealer_address' => $request->dealer_address,
                        'company' => $request->company,
                        'user_id' => $user->id,
                    ];

                    $dealerRepository->create($data);

                    return redirect()->route('admin.dataDealer')->with('success', 'Dealer data has been created successfully');
                }
            } else {
                return redirect()->back()->with('error', 'User does not have dealer role');
            }
        } else {
            return redirect()->back()->with('error', 'User not found');
        }
    }


    public function createMechanic(Request $request, UserRepository $userRepository, DealerRepository $dealerRepository, MechanicRepository $mechanicRepository)
    {
        $user = $userRepository->find($request->user_id);
        $dealer = $dealerRepository->find($request->dealer_id);

        $request->validate([
            'position' => 'required',
        ]);

        if ($user && $dealer) {
            if ($user->role == 'mechanic') {
                try {
                    $existingMechanic = $mechanicRepository->findByUser($user->id);

                    if ($existingMechanic) {
                        return redirect()->back()->with('error', "Mechanic with ID {$existingMechanic->id} is already registered");
                    }

                    $data = [
                        'position' => $request->position,
                        'user_id' => $user->id,
                        'dealer_id' => $dealer->id,
                    ];

                    $mechanicRepository->create($data);

                    return redirect()->route('admin.dataMechanic')->with('success', 'Mechanic data has been created successfully');
                } catch (QueryException $e) {
                    return redirect()->back()->with('error', 'Failed to create mechanic: ' . $e->getMessage());
                }
            } else {
                return redirect()->back()->with('error', 'User does not have mechanic role');
            }
        } else {
            return redirect()->back()->with('error', 'User or dealer not found');
        }
    }

}
