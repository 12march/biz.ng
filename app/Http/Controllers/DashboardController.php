<?php

namespace App\Http\Controllers;
use App\User;
use App\Listing;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $listings = $user->listings;

        $listing = Listing::find($user_id);

        return view('dash', compact('listings', 'listing'));
    }
}
