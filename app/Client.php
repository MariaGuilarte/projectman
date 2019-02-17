<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
  protected $fillable = ['name', 'email', 'phone', 'skype', 'payment_method_id'];
  
  public function projects(){
    return $this->belongsTo('App\DevelopmentStatus');
  }
  
  public function paymentmethod(){
    return $this->belongsTo('App\PaymentMethod');
  }
}
