<?php

namespace App\Http\Controllers;

use App\Models\Number;
use Illuminate\Http\Request;

class NumberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('Dashboard.phones.index',['phones'=>Number::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.phones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'title'=>'string|required',
            'phone'=>'required'
        ]);
        Number::create($data);
       return redirect()->route('phones.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Number $phone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Number $phone)
    {
        return view('Dashboard.phones.edit',compact('phone'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Number $phone)
    {
        $data=$request->validate([
            'title'=>'string|required',
            'phone'=>'required|numeric|digits:11'
        ]);
       $phone->update($data);
       return redirect()->route('phones.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Number $phone)
    {
        $phone->delete();
        return back();
    }
}
