<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $currentUser = Auth::user();

        $activity = new \App\Activity();

        $participant = new \App\Participant();

        $activityId = $activity->insertGetId( [
            'title' => 'john@example.com', 
            'description' => '0',
        ] );

        $participant->insert( [
            'activity_id' => $activityId,
            'user_id' => $currentUser->id
        ] );

        return view('home');
    }
}
