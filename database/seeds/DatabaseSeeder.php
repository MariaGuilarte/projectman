<?php

use Illuminate\Database\Seeder;
use App\PaymentMethod;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
      // $this->call(UsersTableSeeder::class);
      $this->call(DevelopmentStatusTableSeeder::class);
      $this->call(PlatformsTableSeeder::class);
      //$this->call(ProjectsTableSeeder::class);

      $paypal = PaymentMethod::create([
        'name'     => 'Paypal',
        'icon_url' => ''
      ]);

      $uphold = PaymentMethod::create([
        'name'     => 'Uphold',
        'icon_url' => ''
      ]);

      $payoneer = PaymentMethod::create([
        'name'     => 'Payoneer',
        'icon_url' => ''
      ]);
    }
}
