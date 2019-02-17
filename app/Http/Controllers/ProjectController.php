<?php

namespace App\Http\Controllers;

use App\Project;
use App\DevelopmentStatus;
use App\Platform;
use App\Client;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
      $projects = Project::all();
      return view('projects.index', compact($projects));
    }

    public function create()
    {
      $dev_statuses = DevelopmentStatus::all();
      $platforms    = Platform::all();
      $clients      = Client::all();
      return view('projects.create', ['dev_statuses' => $dev_statuses, 'platforms'=>$platforms, 'clients'=>$clients]);
    }

    public function store(Request $request)
    {
      $project = Project::create([
        'title'                 => $request->title,
        'description'           => $request->description,
        'platform_id'           => $request->platform_id,
        'development_status_id' => $request->development_status_id,
      ]);

      if( !$project ){
        return back()->withInput();
      }

      return redirect()->route('projects.show', ['project'=>$project->id]);
    }

    public function show(Project $project)
    {
      return view('projects.show', ['project'=>$project]);
    }

    public function edit(Project $project)
    {
      return view('projects.edit', compact($project));
    }

    public function update(Request $request, Project $project)
    {
      $project->title = ( $request->title ) ? $request->title : $project->title;
      $project->description = ( $request->description ) ? $request->description : $project->description;
      $project->platform_id = ( $request->platform_id ) ? $request->platform_id : $project->platform_id;
      $project->development_status_id = ( $request->development_status_id ) ? $request->development_status_id : $project->development_status_id;

      if( !$project->save() ){
        return back()->withInput();
      }

      $request->session()->flash('success', 'Delete was successful!');
      return redirect()->route('projects.show', compact($project));
    }

    public function destroy(Project $project)
    {
      if( !$project->delete() ){
        $request->session()->flash('fail', 'Delete was failure!');
      }

      $request->session()->flash('success', 'Delete was successful!');
      return redirect()->route('projects.index');
    }
}
