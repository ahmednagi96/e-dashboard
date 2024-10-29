<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard.AboutUs.index',['abouts' =>AboutUs::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.AboutUs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $data=$request->validate([
          'title'=>'required|string',
          'img'=>'nullable|image|mimes:png,jpg,webp',
          'des'=>'nullable|string'
      ]);
     if($request->hasFile('img')){
        $img= $request->file('img')->store('aboutUs','public');
         $data['img']=$img;
     }
      AboutUs::create($data);
      return redirect()->route('abouts.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutUs $about)
    {
        return view('Dashboard.AboutUs.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AboutUs $about)
    {
        $data=$request->validate([
            'title'=>'required|string',
            'img'=>'nullable|image|mimes:png,jpg,webp',
            'des'=>'nullable|string'
        ]);
       if($request->hasFile('img')){
           if($about->img){
            Storage::disk('public')->delete($about->img);
           }
          $img= $request->file('img')->store('aboutUs','public');
           $data['img']=$img;
       }
        $about->update($data);
        return redirect()->route('abouts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutUs $about)
    {
        $about->delete();
        return back();
    }
}
