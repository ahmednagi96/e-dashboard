<?php

namespace App\Http\Controllers;

use App\Models\Partenr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartenrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard.partenrs.index',['partenrs'=>Partenr::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.partenrs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'title'=>'required|string',
            'img'=>'required|image|mimes:png,jpg,webp'
        ]);
        if($request->hasFile('img')){
           $img= $request->file('img')->store('partenrs','public');
            $data['img']=$img;
        }
        Partenr::create($data);
        return redirect()->route('partenrs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Partenr $partenr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partenr $partenr)
    {
        return view('Dashboard.partenrs.edit',compact('partenr'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partenr $partenr)
    {
        $data=$request->validate([
            'title'=>'required|string',
            'img'=>'nullable|image|mimes:png,jpg,webp'
        ]);
        if($request->hasFile('img')){
            if($partenr->img){
                Storage::disk('public')->delete($partenr->img);
            }
           $img= $request->file('img')->store('partenrs','public');
            $data['img']=$img;
        }
        $partenr->update($data);
        return redirect()->route('partenrs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partenr $partenr)
    {
        $partenr->delete();
        return back();
    }
}
