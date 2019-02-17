<?php

namespace App\Http\Controllers;

use App\DevelopmentStatus;
use Illuminate\Http\Request;

class DevelopmentStatusController extends Controller
{
    public function index()
    {
      $dev_statuses = DevelopmentStatus::all();
      return view('development_statuses.index', compact($dev_statuses));
      // return $dev_statuses;
    }
    
    public function create()
    {
      return view('developmentStatuses.create');
    }

    public function store(Request $request)
    {
      $dev_status = DevelopmentStatus::create([
        'title' => $request->title
      ]);
    }

    public function show(DevelopmentStatus $developmentStatus)
    {
      return view('development_statuses.show', compact($developmentStatus));
      //return $developmentStatus;
    }

    public function edit(DevelopmentStatus $developmentStatus)
    {
      return view('development_statuses.edit', compact($developmentStatus));
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
