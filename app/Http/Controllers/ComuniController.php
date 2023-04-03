<?php

namespace App\Http\Controllers;

use App\Models\Comuni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComuniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comuni.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            Comuni::create(

            [
                'name'=> $request->input('name'),
                'description'=> $request->input('description'),
                'img'=>$request->has('img') ? $request->file('img')->store('public/comunis') : '',
                'user_id' => Auth::user()->id,
                
            ]
        );
        

        return redirect()->route('home')->with('message','Comune aggiunto correttamente');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Comuni $comuni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comuni $comuni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comuni $comuni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comuni $comuni)
    {
        //
    }
}
