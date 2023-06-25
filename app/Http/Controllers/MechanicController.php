<?php

namespace App\Http\Controllers;

use App\Repositories\MechanicRepository;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MechanicController extends Controller
{
    private $mechanicRepository;
    public $serviceRepository;

    public function __construct(MechanicRepository $mechanicRepository, ServiceRepository $serviceRepository)
    {
        $this->mechanicRepository = $mechanicRepository;
        $this->serviceRepository = $serviceRepository;
    }

    public function dashboard()
    {
        $data = $this->mechanicRepository->getMechanicData();
        return view('mechanic.dashboard', $data);
    }

    public function servisku()
    {
        $user = Auth::user();
        $data = $this->mechanicRepository->getMechanicData();
        $data1 = $this->mechanicRepository->getAllDealerServis2($user);
        return view('mechanic.servisku', $data, $data1);
    }

    public function profilku()
    {
        $data = $this->mechanicRepository->getMechanicData();
        return view('mechanic.profilku', $data);
    }

    public function antrian()
    {
        $user = Auth::user();
        $data = $this->mechanicRepository->getMechanicData();
        $data1 = $this->mechanicRepository->getAllDealerServis1($user);
        return view('mechanic.antrian', $data, $data1);
    }
    

    public function update(Request $request)
    {
        $user = $request->user();

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        $updatedUser = $this->mechanicRepository->updateProfile($user, $request->all());

        if ($updatedUser == 'email_exists') {
            return redirect()->back()->with('error', 'Email sudah terdaftar');
        } elseif ($updatedUser) {
            return redirect()->back()->with('success', 'Profile berhasil diubah');
        } else {
            return redirect()->back()->with('error1', 'Terjadi kesalahan saat mengupdate profil');
        }
    }

    public function updateService($id)
    {
        $data = $this->mechanicRepository->getMechanicData();
        $antrian = $this->serviceRepository->getServiceById($id);
        $carts = $this->serviceRepository->getServiceCarts($antrian->id);

        $totalSubtotal = $carts->sum('subtotal');
        $total = $totalSubtotal;

        return view('mechanic.updateservice', $data, compact('antrian', 'carts', 'total'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'price' => 'required',
        ]);

        $price = $request->input('price');

        $service = $this->mechanicRepository->updateServiceStatus($id, $price);

        $user = Auth::user();
        $data = $this->mechanicRepository->getMechanicData();
        $data1 = $this->mechanicRepository->getAllDealerServis1($user);

        return redirect()
            ->route('mechanic.antrian')
            ->with([
                'data' => $data,
                'data1' => $data1,
                'service' => $service
            ])
            ->with('success', 'Status servis berhasil diubah');
    }

    public function updateStatus2($id)
    {
        $status = $this->mechanicRepository->updateStatus2($id);
        return redirect()->back()
            ->with($status)    
            ->with('success', 'Servis sedang dijalankan');
    }

    public function updateStatus3($id)
    {
        $status = $this->mechanicRepository->updateStatus3($id);
        return redirect()->back()
            ->with($status)
            ->with('success', 'Servis telah selesai');
    }


    public function giveRecom(Request $request, $id)
    {
        $request->validate([
            'message' => 'required',
        ]);

        $message = $request->input('message');

        $this->serviceRepository->updateRecommendedService($id, $message);

        return redirect()->back()->with('success', 'Recommended servis berhasil diperbarui');
    }

    public function updateWaktu(Request $request, $id)
    {
        $request->validate([
            'datepicker' => 'required',
            'time' => 'required',
        ]);

        $planDate = $request->input('datepicker');
        $time = $request->input('time');

        $this->serviceRepository->updateServiceSchedule($id, $planDate, $time);

        return redirect()->back()->with('success', 'Data berhasil diperbarui');
    }

}
