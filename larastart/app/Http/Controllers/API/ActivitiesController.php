<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;


class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activityTable = new \App\Activity();

        $activities = $activityTable->join('participants', 'activities.id', '=', 'participants.activity_id')
            ->join('users', 'users.id', '=', 'participants.user_id')
            ->select('users.name', 'activities.title')
            ->get()
            ->toArray();

        return $activities;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
