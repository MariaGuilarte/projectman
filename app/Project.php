<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  protected $fillable = ['title', 'description', 'platform_id', 'development_status_id'];
  
  public function platform(){
    return $this->belongsTo('App\Platform');
  }
  
  public function platforms(){
    return $this->belongsToMany('App\Platform', 'project_platform');
  }
  
  public function attachments(){
    return $this->hasMany('App\Attachment');
  }
  
  public function development_status(){
    return $this->belongsTo('App\DevelopmentStatus');
  }
  
  public function client(){
    return $this->belongsTo('App\Client');
  }
}
