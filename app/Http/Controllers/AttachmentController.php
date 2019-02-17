<?php

namespace App\Http\Controllers;

use App\Attachment;
use Illuminate\Http\Request;

class AttachmentController extends Controller
{
    public function index()
    {
      $attachments = Attachment::all();
    }

    public function store(Request $request)
    {
      $att = Attachment::create([
        'filename'                 => $request->filename,
        'description'           => $request->description,
        'platform_id'           => $request->platform_id,
        'development_status_id' => $request->development_status_id
      ]);
      
      if( !$project ){
        return back()->withInput();
      }
      
      return redirect()->route('projects.show', compact($project));
    }

    public function show(Attachment $attachment)
    {
        //
    }

    public function edit(Attachment $attachment)
    {
        //
    }

    public function update(Request $request, Attachment $attachment)
    {
        //
    }

    public function destroy(Attachment $attachment)
    {
        //
    }
}
