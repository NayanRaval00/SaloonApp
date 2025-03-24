<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\PartnerApprovedMail;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::paginate(10);
        return view('Admin.partners.list', compact('partners'));
    }

    public function updateStatus(Request $request)
    {
        $partner = Partner::findOrFail($request->partner_id);
        $partner->status = $request->status;
        $partner->save();

        // Send email only if approved
        if ($request->status == 'approved') {
            $subject = 'Congratulations! Your request is approved';
            $message = 'Congratulations! Your inquiry to become a partner has been approved. Welcome aboard!';

            Mail::to($partner->email)->send(new PartnerApprovedMail($partner));

        }

        return response()->json(['message' => 'Partner status updated successfully.']);
    }
}
