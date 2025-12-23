<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SingerRequest;
use App\Models\Singer;
use Illuminate\Http\Request;

class SingersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $singers = Singer::all();
        return view('Admin.Singers.index', compact('singers'));
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
    public function store(SingerRequest $request)
    {
        $singer = Singer::create([
         'name' => $request->input('name'),
        ]);
        return  redirect()->route('singer.index');
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
    public function edit(Singer $singer)
    {
        return view('Admin.Singers.edit-singer',compact('singer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Singer $singer)
    {

        $singer->update([
          'name' => $request->input('name'),
        
        ]);
        return redirect()->route('singer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Singer $singer)
    {
        $singer->delete();
        return redirect()->route('singer.index');
    }
}
