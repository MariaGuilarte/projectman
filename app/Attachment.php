<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
  protected $fillable = ['filename', 'project_id'];
  
  public function project(){
    return $this->belongsTo('App\Project');
  }
}
