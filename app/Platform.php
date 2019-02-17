<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
  protected $fillable = ['title', 'description', 'icon', 'icon_url'];
  
  public function projects(){
    return $this->belongsToMany('App\Project', 'project_platform');
  }
}
