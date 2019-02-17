<?php

namespace App\Http\Controllers;

use App\Platform;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    public function index()
    {
      $platforms = Platform::all();
    }

    public function create()
    {
      return view('platform.create');
    }

    public function store(Request $request)
    {
      $platform = Platform::create([
        'title' => $request->title,
        'description' => $request->description,
        'icon' => $request->icon,
        'icon_url' => $request->icon_url
      ]);
      
      if( !$platform ){
        return back()->withInput();
      }
      
      return redirect()->route('platforms.show', compact($platform));
    }

    public function show(Platform $platform)
    {
      return view('platforms.show', compact($platform));
    }

    public function edit(Platform $platform)
    {
      return view('platforms.edit', compact($platform));
    }

    public function update(Request $request, Platform $platform)
    {
      $platform->title       = ( $request->title ) ? $request->title : $platform->title;
      $platform->description = ( $request->description ) ? $request->description : $platform->description;
      $platform->icon        = ( $request->icon ) ? $request->icon : $platform->icon;
      $platform->icon_url    = ( $request->icon_url ) ? $request->icon_url : $platform->icon_url;
      
      if( !$platform->save() ){
        return back()->withInput();
      }
      
      $request->session()->flash('success', 'Delete was successful!');
      return redirect()->route('platforms.show', compact($platform)); 
    }

    public function destroy(Platform $platform)
    {
      if( !$platform->delete() ){
        $request->session()->flash('fail', 'Delete was failure!');
      }
      
      $request->session()->flash('success', 'Delete was successful!');
      return redirect()->route('platforms.index');
    }
}
