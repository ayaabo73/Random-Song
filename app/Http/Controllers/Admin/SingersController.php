<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Singer\StoreRequest;
use App\Http\Requests\Singer\UpdateRequest;
use App\Models\Singer;

class SingersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $singers = Singer::paginate(10);
        return view('admin.singers.index', compact('singers'));
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
        return view('admin.singers.edit',compact('singer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request,Singer $singer)
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
