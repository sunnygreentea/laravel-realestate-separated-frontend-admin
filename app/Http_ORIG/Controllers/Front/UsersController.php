<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index () 
    {
    	// Agents
    	$agents = User::whereHas(
		    'roles', function($q){
		        $q->where('title', 'User');
		    }
		)->paginate(6);
    	return view('front.agents.index', compact( 'agents'));
    }

    public function show ($id) 
    {
        $agent = User::find($id);
        $numListings = count($agent->listings);
        return view('front.agents.show', compact( 'agent', 'numListings'));

    }
}
