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
        $services = Service::with(['barber', 'category', 'slots'])
            ->where(['barber_id' => $barberId, 'status' => 1])
            ->paginate(9);

        return view('Users.Saloons.serviceList', compact('services'));
    }

    public function userWebsite()
    {
        return view('Users.web.index');
    }

    public function aboutUs()
    {
        return view('Users.web.about');
    }

    public function services()
    {
        return view('Users.web.services');
    }

    public function blogs()
    {
        return view('Users.web.blogs');
    }

    public function portfolio()
    {
        return view('Users.web.portfolio');
    }

    public function contactUs()
    {
        return view('Users.web.contactus');
    }
}
