<?php

namespace App\Http\Controllers;

use App\Models\Quote;

class GetRandomSongController extends Controller
{
    public function __invoke()
    {
        $quote = Quote::inRandomOrder()->first();

        return view('random-song', compact('quote'));
    }
}
