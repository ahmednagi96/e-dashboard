<?php

namespace App\Http\Controllers;

use App\Models\phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard.tels.index',['tels'=>Phone::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.tels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'title'=>'string|nullable',
            'phone'=>'required|numeric|digits:11'
        ]);
        Phone::create($data);
       return redirect()->route('tels.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(phone $phone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(phone $tel)
    {
        return view('Dashboard.tels.edit',compact('tel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, phone $tel)
    {
        $data=$request->validate([
            'title'=>'string|nullable',
            'phone'=>'required|numeric|digits:11'
        ]);
        $tel->update($data);
       return redirect()->route('tels.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(phone $tel)
    {
        $tel->delete();
        return back();
    }
}
