<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AppointmentsController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'appointment_time' => 'required|date',
            'salon' => 'required|string',
            'location' => 'required|string',
            'message' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Create the appointment
        Appointments::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'appointment_time' => $request->appointment_time,
            'salon' => $request->salon,
            'location' => $request->location,
            'message' => $request->message,
        ]);

        // Redirect with success message
        return redirect()->route('users.saloons.list')
            ->with('success', 'Your appointment has been scheduled successfully!');
    }

    public function list()
    {

        $appointments = Appointments::with('barber')->paginate(10);

        return view('Admin.appointments.index', compact('appointments'));
    }

    public function destroy($id)
    {
        $contact = Appointments::findOrFail($id);
        $contact->delete();

        return redirect()->route('admin.appointment.list')
            ->with('success', 'Appointment deleted successfully');
    }
}
