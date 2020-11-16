<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Listing;


class ListingsController extends Controller
{
    public function index()
    {
    	$listings = Listing::paginate(6);
    	return view('front.listings.index', compact( 'listings'));
    }

    public function show($id) 
    {

        $listing = Listing::find($id);

        return view('front.listings.show', compact( 'listing'));
    }

    public function search (Request $request)
    {

        $listings = Listing::
        when(request('ptype')>0, function($query) {
            return $query->where('listings.ptype_id', request('ptype'));
            })
        ->when(request('city')>0, function($query) {
            return $query->where('listings.city_id', request('city'));
            })
        ->when(request('beds')>0, function($query) {
            return $query->where('listings.beds', request('beds'));
            })
        ->when(request('baths')>0, function($query) {
            return $query->where('listings.baths', request('baths'));
            })
        ->when(request('garage')>0, function($query) {
            return $query->where('listings.garage', request('garage'));
            })
        ->when(request('price')>0, function($query) {
            return $query->where('listings.price','>=', request('price'));
            })
        ->paginate(6);
        
        $listings->appends(request()->except('_token'))->links();
       

        return view('front.listings.index', compact( 'listings'));
       
    }
}
