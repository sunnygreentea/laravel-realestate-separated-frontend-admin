<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Listing;
use App\User;
use App\Role;

class HomeController extends Controller
{
    public function index()
    {
        
    	// Featured listings
    	$featuredListings = Listing::where('is_featured',1)->inRandomOrder()->limit(3)->get();
        
        // Latest listings
    	$latestListings = Listing::all()->random(4);

    	// Agents
    	$agents = User::whereHas(
		    'roles', function($q){
		        $q->where('title', 'User');
		    }
		)->take(3)->get();

        return view('front.home', compact('featuredListings', 'latestListings', 'agents'));
    }
}
