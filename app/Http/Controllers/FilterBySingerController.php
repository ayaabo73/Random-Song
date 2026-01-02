<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class FilterBySingerController extends Controller
{
    public function __invoke(Request $request)
    {
        $song= Song::when( $request->singer_id,function($query,$singer_id)
        {
            $query->where('singer_id', $singer_id);
        })
        ->inRandomOrder()
        ->first();
        return view('filter-by-singer', compact('song'));
    }
}
