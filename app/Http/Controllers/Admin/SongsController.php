<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SongRequest;
use App\Models\Singer;
use App\Models\Song;
use Illuminate\Http\Request;

class SongsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $songs = Song::all();
        $singers = Singer::all();

        return view('Admin.Songs.index', compact('songs', 'singers'));
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
    public function store(SongRequest $request)
    {
        $song = song::create([

            'name' => $request->input('name'),
            'singer_id' => $request->input('singer_id'),
        ]);

        return 'تمت الاضافة بنجاح';
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
    public function edit(string $id)
    { $singers = Singer::all();
       $song=Song::where('id',$id)->first();
       
       return view('Admin.Songs.edit-song',compact('song','singers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $song=Song::where('id',$id)->first();
       $song->update([

            'name' => $request->input('name'),
            'singer_id' => $request->input('singer_id'),
        ]);

        return 'تم التعديل بنجاح';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $song=Song::where('id',$id)->delete();
        return redirect()->route('song.index');
    }
}
