<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Game;

class GamesController extends Controller
{
    public function index()
    {
        $games = Game::all();

        return $games;
    }
}
