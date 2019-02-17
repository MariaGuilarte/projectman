<?php

namespace App\Http\Controllers;

use App\DevelopmentStatus;
use Illuminate\Http\Request;

class DevelopmentStatusController extends Controller
{
    public function index()
    {
      $dev_statuses = DevelopmentStatus::all();
    }
    
    public function create()
    {
      
    }

    public function store(Request $request)
    {
      $dev_status = DevelopmentStatus::create([
        'title' => $request->title
      ]);
    }

    public function show(DevelopmentStatus $developmentStatus)
    {
        //
    }

    public function edit(DevelopmentStatus $developmentStatus)
    {
        //
    }

    public function update(Request $request, DevelopmentStatus $developmentStatus)
    {
      $developmentStatus->title = ( $request->title ) ? $request->title : $developmentStatus->title;
      $developmentStatus->save();
    }

    public function destroy(DevelopmentStatus $developmentStatus)
    {
      $developmentStatus->delete();
    }
}
