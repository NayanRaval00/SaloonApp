<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Barber;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        return view('Admin.dashboard');
    }


    public function listUsers()
    {
        $users = User::paginate(10);
        return view('Admin.users.list', compact('users'));
    }

    public function listBarbers()
    {
        $barbers = Barber::paginate(10);
        return view('Admin.barbers.list', compact('barbers'));
    }

    public function updateStatus(Request $request)
    {
        $barber = Barber::findOrFail($request->id);
        $barber->update(['status' => $request->status]);
        return response()->json(['success' => true, 'message' => 'Barber status updated successfully.']);
    }
}
