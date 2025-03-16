<?php

namespace App\Http\Controllers\Barber;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function list()
    {
        $barberId = Auth::guard('barber')->user()->id;
        $services = Service::where(['barber_id' => $barberId])->with(['barber', 'category'])->paginate(10);
        return view('Barber.services.list', compact('services'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('Barber.services.create', compact('categories'));
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'time' => 'required|date_format:H:i',
            'status' => 'required|boolean',
        ]);

        $imagePath = $request->file('image')->store('services', 'public');
        $barberId = Auth::guard('barber')->user()->id;
        Service::create([
            'name' => $request->name,
            'image' => $imagePath,
            'description' => $request->description,
            'barber_id' => $barberId,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'time' => $request->time,
            'created_by' => 1,
            'status' => $request->status,
        ]);

        return redirect()->route('barber.service.list')->with('success', 'Service created successfully.');
    }
}
