<?php

namespace App\Http\Controllers\Barber;

use App\Http\Controllers\Controller;
use App\Models\BestOffers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BestOffersController extends Controller
{
    public function index()
    {
        $offers = BestOffers::latest()->paginate(10);
        return view('Barber.bestoffers.index', compact('offers'));
    }

    public function create()
    {
        return view('Barber.bestoffers.create');
    }

    public function edit(BestOffers $best_offer_day)
    {
        return view('Barber.bestoffers.edit', ['bestOffers' => $best_offer_day]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'discount' => 'required|numeric|min:1|max:100',
            'start_date' => 'required|date|after:now',
            'end_date' => 'required|date|after:start_date',
        ]);

        $imagePath = $request->file('image')->store('offers', 'public');

        BestOffers::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'image' => $imagePath,
            'discount' => $validated['discount'],
            'start_date' => $validated['start_date'],
            'end_date' => $validated['end_date'],
            'created_by' => Auth::guard('barber')->user()->id,
        ]);

        return redirect()->route('best-offer-day.index')->with('success', 'Offer created successfully.');
    }

    public function update(Request $request, BestOffers $best_offer_day)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'discount' => 'required|numeric|min:1|max:100',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('offers', 'public');
            $validated['image'] = $imagePath;
        } else {
            // Preserve old image if no new file
            $validated['image'] = $best_offer_day->image;
        }

        // Optional: Convert to Carbon (not strictly necessary if model casts are set)
        $validated['start_date'] = Carbon::parse($validated['start_date']);
        $validated['end_date'] = Carbon::parse($validated['end_date']);

        // Update model using mass assignment
        $best_offer_day->update($validated);

        return redirect()->route('best-offer-day.index')->with('success', 'Offer updated successfully.');
    }

    public function show(BestOffers $bestOffers)
    {
        return view('Barber.bestoffers.show', compact('bestOffers'));
    }

    public function destroy(BestOffers $best_offer_day)
    {
        $best_offer_day->delete();
        return redirect()->route('best-offer-day.index')->with('success', 'Offer deleted successfully.');
    }
}
