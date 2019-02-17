<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientsTableSeeder extends Seeder
{
  public function run()
  {
    Client::create([
      'name'              => 'David Guilarte',
      'email'             => 'davidguilarte7@gmail.com',
      'phone'             => '+58-7912134',
      'skype'             => 'davixe7',
      'payment_method_id' => 'paypal'
    ]);
    
    Client::create([
      'name'              => 'María Salazar',
      'email'             => 'mariajose@gmail.com',
      'phone'             => '+58-7912134',
      'skype'             => 'mariajose',
      'payment_method_id' => 'payoneer'
    ]);
    
    Client::create([
      'name'              => 'Samuel Rojas',
      'email'             => 'samuel@gmail.com',
      'phone'             => '+58-7912138',
      'skype'             => 'samuel666',
      'payment_method_id' => 'uphold'
    ]);
    
    Client::create([
      'name'              => 'Anaiz Rojas',
      'email'             => 'anaizrojas@gmail.com',
      'phone'             => '+58-7957632',
      'skype'             => 'anaizrojas',
      'payment_method_id' => 'paypal'
    ]);
    
    Client::create([
      'name'              => 'Jhon Doe',
      'email'             => 'jhondoe@gmail.com',
      'phone'             => '+58-7912134',
      'skype'             => 'jhondoe',
      'payment_method_id' => 'paypal'
    ]);
  }
}
