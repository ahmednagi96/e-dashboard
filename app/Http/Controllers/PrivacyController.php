<?php

namespace App\Http\Controllers;

use App\Models\Privacy;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     return view('Dashboard.privacys.index',['privacys'=>Privacy::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.privacys.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'privacy'=>'required|string'
        ]);
        Privacy::create($data);
        return redirect()->route('privacys.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Privacy $privacy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Privacy $privacy)
    {
       return view('Dashboard.privacys.edit',compact('privacy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Privacy $privacy)
    {
        $data=$request->validate([
            'privacy'=>'required|string'
        ]);
        $privacy->update($data);
        return redirect()->route('privacys.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Privacy $privacy)
    {
        $privacy->delete();
        return back();
    }
}
