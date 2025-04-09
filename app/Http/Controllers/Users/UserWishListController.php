<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\UserWishLists;
use Illuminate\Support\Facades\Auth;

class UserWishListController extends Controller
{
    public function index()
    {
        $userId = Auth::guard('web')->user()->id;
        $wishlistedServiceIds = UserWishLists::where('user_id', $userId)->pluck('service_id');

        $services = Service::whereIn('id', $wishlistedServiceIds)->with(['slots'])->get();

        return view('Users.web.wishlist.list', compact('services'));
    }
    public function toggle(Request $request)
    {
        $userId = Auth::guard('web')->user()->id;
        $serviceId = $request->input('service_id');

        $wish = UserWishLists::where('user_id', $userId)
            ->where('service_id', $serviceId)
            ->first();

        if ($wish) {
            $wish->delete();
            return redirect()->back()->with('success', 'Removed from wishlist');
        } else {
            UserWishLists::create([
                'user_id' => $userId,
                'service_id' => $serviceId
            ]);
            return redirect()->back()->with('success', 'Added to wishlist');
        }
    }
}
