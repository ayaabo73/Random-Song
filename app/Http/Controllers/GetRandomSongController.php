<?php

namespace App\Http\Controllers;

use App\Models\RandomSong;

class GetRandomSongController extends Controller
{
    public function RandomSong()
    {
        $song = RandomSong::inRandomOrder()->first();

        return view('RandomSong', compact('song'));
    }
}
