<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard.offers.index',['offers'=>Offer::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.offers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            "title"=>"required|string",
            "description"=>"nullable|string",
            "original_price"=>"required|numeric",
            "discounted_price"=>"required|numeric",
            "link"=>"required|url",
            "image"=>'nullable|image',
            "currency"=>"nullable|string",
        ]);
        if($request->hasFile('image')){
           $img= $request->file('image')->store('offers','public');
            $data['image']=$img;
        }
        Offer::create($data);
        return redirect()->route('offers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offer $offer)
    {
        return view('Dashboard.offers.edit',compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Offer $offer)
    {
        $data=$request->validate([
            "title"=>"required|string",
            "description"=>"nullable|string",
            "original_price"=>"required|numeric",
            "discounted_price"=>"required|numeric",
            "link"=>"required|url",
            "image"=>'nullable|image',
            "currency"=>"nullable|string",
        ]);
        if($request->hasFile('image')){
            if($offer->image){
                Storage::disk('public')->delete($offer->image);
            }
           $img= $request->file('image')->store('offers','public');
            $data['image']=$img;
        }
        $offer->update($data);
        return redirect()->route('offers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();
        return back();

    }
}
