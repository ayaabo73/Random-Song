<?php

namespace App\Http\Controllers;

use App\Models\Quote;

class GetRandomQuoteController extends Controller
{
    public function __invoke()
    {
        $quote = Quote::inRandomOrder()->first();
        return view('random-quote', compact('quote'));
    }
}
