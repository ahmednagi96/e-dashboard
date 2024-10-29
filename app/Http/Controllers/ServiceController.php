<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('Dashboard.services.index',['services'=>Service::all()]) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.services.create');
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
         $img = $request->file('img')->store('services','public');
         $data['img']=$img;
        }
        Service::create($data);
        return redirect()->route('services.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('Dashboard.services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $data=$request->validate([
            'title'=>'required|string',
            'img'=>'nullable|image|mimes:png,jpg,webp'
        ]);
        if($request->hasFile('img')){
         if($service->img){
             Storage::disk('public')->delete($service->img);
         }
         $img = $request->file('img')->store('services','public');
         $data['img']=$img;
        }
        $service->update($data);
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return back();
    }
}
