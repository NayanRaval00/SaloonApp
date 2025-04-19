<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Barber;
use App\Models\Service;
use App\Models\UserWishLists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $services = Service::with(['barber', 'category', 'serviceSlots', 'slots'])->whereStatus(1)->get();

        $userWishList = Auth::guard('web')->check()
            ? UserWishLists::where('user_id', Auth::guard('web')->user()->id)->pluck('service_id')->toArray()
            : [];
            
        $salons = Barber::where('status', 1)->get();

        return view('Users.web.index', compact('services', 'userWishList', 'salons'));
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
