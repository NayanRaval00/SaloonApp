<?php

namespace App\Http\Controllers;

use App\Models\SaloonWishlist;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaloonWishlistController extends Controller
{
    /**
     * Display a listing of the user's wishlist.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wishlists = SaloonWishlist::where('user_id', Auth::guard('web')->user()->id)
            ->with('saloon')
            ->latest()
            ->paginate(10);

        return view('Users.web.wishlist.saloon_list', compact('wishlists'));
    }

    /**
     * Store or remove a wishlist entry.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'saloon_id' => 'required|exists:barbers,id',
        ]);

        $user_id = Auth::guard('web')->user()->id;
        $saloon_id = $request->saloon_id;

        // Check if wishlist entry exists
        $wishlist = SaloonWishlist::where('user_id', $user_id)
            ->where('saloon_id', $saloon_id)
            ->first();

        if ($wishlist) {
            $wishlist->delete();
            return redirect()->route('users.saloons.list')->with('success', 'Successfully Removed from wishlist!.');
        } else {
            try {
                SaloonWishlist::create([
                    'user_id' => $user_id,
                    'saloon_id' => $saloon_id
                ]);

                return redirect()->route('users.saloons.list')->with('success', 'Successfully Added to wishlist!.');
            } catch (QueryException $e) {
                if ($e->errorInfo[1] == 1062) { // MySQL duplicate entry error code

                    return redirect()->route('users.saloons.list')->with('error', 'Already in wishlist!.');
                }
                return redirect()->route('users.saloons.list')->with('error', 'Something went wrong!.');
            }
        }
    }

    /**
     * Remove the specified wishlist entry.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wishlist = SaloonWishlist::where('id', $id)
            ->where('user_id', Auth::guard('web')->user()->id)
            ->firstOrFail();

        $wishlist->delete();

        return redirect()->back()->with('success', 'Removed from wishlist successfully');
    }
}
