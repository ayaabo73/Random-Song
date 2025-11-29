<?php

namespace App\Http\Controllers;

use App\Models\Song;

class SongController extends Controller
{
    public function index()
    {
        $song = Song::inRandomOrder()->first();

        return view('song', compact('song'));
    }
}
