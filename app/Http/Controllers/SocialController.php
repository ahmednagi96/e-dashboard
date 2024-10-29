<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard.socials.index',['socials'=>Social::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.socials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data= $request->validate([
            'title'=>'required|string',
            'link'=>'required|url'
        ]);
        Social::create($data);
        return redirect()->route('socials.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Social $social)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Social $social)
    {
        return view('Dashboard.socials.edit',compact('social'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Social $social)
    {
        $data= $request->validate([
            'title'=>'required|string',
            'link'=>'required|url'
        ]);
        $social->update($data);
        return redirect()->route('socials.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Social $social)
    {
        $social->delete();
        return back();
    }
}
