<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class FilterBySinger extends Controller
{
    public function __invoke(Request $request)
    {

       if($request->filled('singer_id'))
       {
        $song= Song::where('singer_id',$request->singer_id)->inRandomOrder()->first();
       }
       else
       {
        $song= Song:: inRandomOrder()->first() ;
       }

        return view('FilterBySinger', compact('song'));
    }
}
