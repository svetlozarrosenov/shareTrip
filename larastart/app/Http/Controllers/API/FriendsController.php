<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Friend;
use App\User;

class FriendsController extends Controller
{
    public function index()
    {
    	exit('index');
        $Friend = Friend::all();

        return $Friend;
    }

    public function show( $userName )
    {        
        $friends = User::Where('name', 'like', '%' . $userName . '%')->get();

        return $friends;
    }

    public function store($store) {
    	exit('store');
    }
}
