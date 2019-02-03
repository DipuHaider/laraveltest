<?php

use Illuminate\Database\Seeder;
use App\User;

class FilmsTableSeeder extends Seeder
{
 public function run()
    {
        $users = factory(Films::class, 3)->create();
    }
}