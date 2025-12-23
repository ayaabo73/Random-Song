<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuoteRequest;
use App\Models\Quote;
use App\Models\Song;
use Illuminate\Http\Request;

class QuotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quotes = Quote::all();
        $songs = Song::all();
        return view('Admin.Quotes.index', compact('quotes', 'songs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuoteRequest $request)
    {
        $quote = Quote::create([
         'body' => $request->input('body'),
         'song_id' => $request->input('song_id'),
        ]);
        return redirect()->route('quote.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quote $quote)
    {
        $songs = Song::all();
        return view('Admin.Quotes.edit-quote',compact('quote','songs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Quote $quote)
    {
       
        $quote->update([
         'body' => $request->input('body'),
         'song_id' => $request->input('song_id'),    
        ]);
        return redirect()->route('quote.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quote $quote)
    {
        $quote->delete();
        return redirect()->route('quote.index');
    }
}
