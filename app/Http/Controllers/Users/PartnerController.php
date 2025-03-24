<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function becomeAPartner()
    {
        return view('Users.web.become_partner');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:partners,email',
            'mobile_number' => 'required|string|max:20',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
        ]);
        $validated['status'] = 'pending';
        Partner::create($validated);

        return redirect()->back()->with('success', 'Registration successful! Thank you for becoming a partner.');
    }
}
