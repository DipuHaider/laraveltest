<?php

use Illuminate\Database\Seeder;
use App\Films;



class FilmsTableSeeder extends Seeder
{
 public function run()
      {
        for ($i=0; $i < 3; $i++) { 
	    	Films::create([
		'user_id' => rand(15,2),
	            'name' => str_random(8),
	            'description' => str_random(32),
		    'release_date' => rand(122010,122020),
		    'rating' => str_random(8),
		    'ticket_price' => str_random(8),
	            'country' => str_random(8),
		    'genre' => str_random(8),
		    'photo' => str_random(8),
	        ]);
    	}
    }
}