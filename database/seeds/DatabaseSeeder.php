<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
      // $this->call(UsersTableSeeder::class);
      $this->call(DevelopmentStatusTableSeeder::class);
      $this->call(PlatformsTableSeeder::class);
      //$this->call(ProjectsTableSeeder::class);
    }
}
