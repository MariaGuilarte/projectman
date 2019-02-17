<?php

use Illuminate\Database\Seeder;
use App\DevelopmentStatus;

class DevelopmentStatusTableSeeder extends Seeder
{
    public function run()
    {
      DevelopmentStatus::create([
        'title' => 'idea'
      ]);
      
      DevelopmentStatus::create([
        'title' => 'boceto'
      ]);
      
      DevelopmentStatus::create([
        'title' => 'incompleto'
      ]);
      
      DevelopmentStatus::create([
        'title' => 'rediseño'
      ]);
      
      DevelopmentStatus::create([
        'title' => 'actualización'
      ]);
      
      DevelopmentStatus::create([
        'title' => 'completo'
      ]);
    }
}
