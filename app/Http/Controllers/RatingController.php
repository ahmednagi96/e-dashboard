<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard.ratings.index',['ratings'=>Rating::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.ratings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $data=$request->validate([
             'title'=>'required|string',
             'img'=>'nullable|image|mimes:png,jpg,webp',
             'status_rat' =>'required|numeric|between:1,5',
             'comment'=>'nullable|string'
         ]);
         if($request->hasFile('img')){
          $img= $request->file('img')->store('ratings','public');
          $data['img']=$img;
         }
       Rating::create($data);
       return redirect()->route('ratings.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rating $rating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rating $rating)
    {
        return view('Dashboard.ratings.edit',compact('rating'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rating $rating)
    {
                 //title , img  ,status_rat , 'comment'
                 $data=$request->validate([
                    'title'=>'required|string',
                    'img'=>'nullable|image|mimes:png,jpg,webp',
                    'status_rat' =>'required|numeric|between:1,5',
                    'comment'=>'nullable|string'
                ]);
                if($request->hasFile('img')){
                    if($rating->img){
                        Storage::disk('public')->delete($rating->img);
                    }
                 $img= $request->file('img')->store('ratings','public');
                 $data['img']=$img;
                }
              $rating->update($data);
              return redirect()->route('ratings.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rating $rating)
    {
        $rating->delete();
        return back();
    }
}
