<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('Dashboard.projects.index',['projects'=>Project::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          //service_id , addr ,link , img , des
          $data=$request->validate([
              'service_id'=>'required|exists:services,id',
              "addr"=>'required|string',
              'link'=>'required|url',
              'des'=>'nullable|string',
              'img'=>'nullable|image|mimes:png,jpg,webp'
          ]);
          if($request->hasFile('img')){
            $img=  $request->file('img')->store('projects','public');
            $data['img']=$img;
          }
          Project::create($data);
          return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('Dashboard.projects.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data=$request->validate([
            'service_id'=>'required|exists:services,id',
            "addr"=>'required|string',
            'link'=>'required|url',
            'des'=>'nullable|string',
            'img'=>'nullable|image|mimes:png,jpg,webp'
        ]);
        if($request->hasFile('img')){
            if($project->img){
                Storage::disk('public')->delete($project->img);
            }
          $img=  $request->file('img')->store('projects','public');
          $data['img']=$img;
        }
        $project->update($data);
        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return back();
    }
}
