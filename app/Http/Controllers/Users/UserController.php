<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Barber;
use App\Models\Service;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        return view('Users.index');
    }

    public function listSaloons()
    {
        $saloons = Barber::whereNotNull('saloon_name')->where('status', 1)->paginate(9);
        return view('Users.Saloons.list', compact('saloons'));
    }

    public function listsServiceByBarber($barberId)
    {
        $services = Service::with(['barber', 'category'])
            ->where(['barber_id' => $barberId, 'status' => 1])
            ->paginate(9);

        return view('Users.Saloons.serviceList', compact('services'));
    }
}
