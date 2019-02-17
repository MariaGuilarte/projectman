<?php

use Illuminate\Database\Seeder;
use App\Platform;

class PlatformsTableSeeder extends Seeder
{
    public function run()
    {
      $mobile = Platform::create([
        'title' => 'Mobile',
        'description' => 'Mobile development, featuring programming languages as Java, Swift, Objective C and Dart',
        'icon' => '',
        'icon_url' => ''
      ]);

      $web = Platform::create([
        'title' => 'Web',
        'description' => 'Web development, featuring programming languages as PHP, Javascript and others',
        'icon' => '',
        'icon_url' => ''
      ]);

      $api = Platform::create([
        'title' => 'API',
        'description' => 'REST API development oftenly with Laravel Framework',
        'icon' => '',
        'icon_url' => ''
      ]);
    }
}
