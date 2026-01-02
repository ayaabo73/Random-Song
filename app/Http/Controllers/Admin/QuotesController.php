<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Quote\StoreRequest as QuoteStoreRequest;
use App\Http\Requests\Quote\UpdateRequest;
use App\Http\Requests\Song\StoreRequest;
use App\Models\Quote;
use App\Models\Song;

class QuotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quotes = Quote::paginate(10);
        $songs = Song::all();
        return view('admin.quotes.index', compact('quotes', 'songs'));
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
    public function store(QuoteStoreRequest $request)
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
        return view('admin.quotes.edit',compact('quote','songs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request ,Quote $quote)
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
