<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Barber;
use App\Models\Category;
use App\Models\ServiceSlots;
use App\Models\Slots;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Show service list
    public function list()
    {
        $services = Service::with(['barber', 'category'])->paginate(10);
        return view('Admin.services.list', compact('services'));
    }

    // Show create service form
    public function create()
    {
        $barbers = Barber::where('status', 1)->get();
        $categories = Category::all();
        $serviceSlots = Slots::get();
        return view('Admin.services.create', compact('barbers', 'categories', 'serviceSlots'));
    }

    // Save service
    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'barber_id' => 'required|exists:barbers,id',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'time' => 'required|date_format:H:i',
            'status' => 'required|boolean',
            'slot' => 'required|array', // Ensures slot selection is required
            'slot.*' => 'exists:slots,id', // Ensures each selected slot ID exists in the service_slots table
        ]);

        // Handle image upload
        $imagePath = $request->file('image')->store('services', 'public');

        $service =  Service::create([
            'name' => $request->name,
            'image' => $imagePath,
            'description' => $request->description,
            'barber_id' => $request->barber_id,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'time' => $request->time,
            'created_by' => 1,
            'status' => $request->status,
        ]);

        foreach ($request->slot as $slotId) {
            ServiceSlots::create([
                'service_id' => $service->id,
                'slot_id' => $slotId,
                'status' => 1,
            ]);
        }
        return redirect()->route('admin.service.list')->with('success', 'Service created successfully.');
    }
}
