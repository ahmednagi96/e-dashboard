<?php

namespace App\Http\Controllers;

use App\Models\Condition;
use Illuminate\Http\Request;

class ConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard.conditions.index',['conditions'=>Condition::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.conditions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'condtions'=>'required|string'
        ]);
        Condition::create($data);
        return redirect()->route('conditions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Condition $condition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Condition $condition)
    {
        return view('Dashboard.conditions.edit',compact('condition'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Condition $condition)
    {
        $data=$request->validate([
            'condtions'=>'required|string'
        ]);
        $condition->update($data);
        return redirect()->route('conditions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Condition $condition)
    {
        $condition->delete();
        return  back();
    }
}
