<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index() {
    	$users = User::all();

    	return $users;
    }

    public function update(Request $request, $id) {
    	$user = auth()->user();

    	$this->validate($request, [
        	'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    	]);

    	$user->update([
    		'avatar' => $request->file->store('images', 'public')
    	]);

    	return $user;
    }

    public function show($user)
    {
    	if ( $user === 'current' ) {
    		$user = auth()->user();
    	}
    	
    	return $user;
    }
}
