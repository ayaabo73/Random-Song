<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Song;

class GetRandomSongController extends Controller
{
    public function __invoke()
    {
        $quote = Quote:: inRandomOrder()->first();

        return view('RandomSong', compact('quote'));
    }
}
