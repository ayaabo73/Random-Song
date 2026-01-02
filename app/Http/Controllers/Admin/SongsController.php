<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Song\StoreRequest;
use App\Http\Requests\Song\UpdateRequest;
use App\Models\Singer;
use App\Models\Song;

class SongsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $songs = Song::paginate(10);
        $singers = Singer::all();
        return view('admin.songs.index', compact('songs', 'singers'));
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
    public function store(StoreRequest $request)
    {
        $song = song::create( [
            'name' => $request->input('name'),
            'singer_id' => $request->input('singer_id'),
        ]);
        return redirect()->route('song.index');
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
    public function edit(Song $song)
    { 
        $singers = Singer::all();
        return view('admin.songs.edit',compact('song','singers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Song $song)
    {
        $song->update([
            'name' => $request->input('name'),
            'singer_id' => $request->input('singer_id'),
        ]);

        return redirect()->route('song.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        $song->delete();
        return redirect()->route('song.index');
    }
}
