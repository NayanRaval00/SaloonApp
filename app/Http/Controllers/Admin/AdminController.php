<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Barber;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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
    public function edit()
    {
        $admin = Auth::guard('admin')->user();
        return view('Admin.auth.profile', compact('admin'));
    }

    public function update(Request $request)
    {
        $adminId = Auth::guard('admin')->user()->id;
        $admin = Admin::where('id', $adminId)->first();

        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'nullable|min:6|confirmed',
        ]);

        $updateData = [
            'name' => $request->name
        ];

        if ($request->filled('password')) {
            $updateData['password'] = Hash::make($request->password);
        }

        $admin->update($updateData);

        return redirect()->back()->with('success', 'Profile updated successfully!');

    }
}
