<?php

use Illuminate\Database\Seeder;


class TweetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('new_tweets')->insert( array(
        	'author' => 'Aak',
        	'message' => 'Hello, world'
        ) );
        DB::table('new_tweets')->insert( array(
        	'author' => 'Kulbir',
        	'message' => 'Heya, joe'
        ) );
        DB::table('new_tweets')->insert( array(
        	'author' => 'Mug',
        	'message' => 'Luluuu'
        ) );


        // Let's try faker ti prepopulate lots of imaginary data more faster than seeder.
        $faker = Faker\Factory::create();

        foreach( range( 1, 25 ) as $index ) {
        	DB::table('new_tweets')->insert( array(
        		'author' => $faker->name,
        		'message' => $faker->catchphrase
        	) );
        }

    }
}
