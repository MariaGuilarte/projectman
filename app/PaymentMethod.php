<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
  protected $fillable = ['name', 'icon_url'];
  
  public function clients(){
    return $this->hasMany('App\Client');
  }
}
