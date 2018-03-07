<?php

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
            'name' => 'Set up app on Homestead',
            'description' => 'Set up a new laravel app using Homestead for local development.',
        ]);

        DB::table('todos')->insert([
            'name' => 'Add migrations',
            'description' => 'Add migrations to set up the database.',
        ]);

        DB::table('todos')->insert([
            'name' => 'Create database seeders',
            'description' => 'Create database seeder classes',
        ]);
      
        DB::table('todos')->insert([
            'name' => 'Treat myself for getting set up ayyee',
            'description' => 'get some black sesame ice cream',
        ]);
      
        DB::table('todos')->insert([
            'name' => 'Cook a dank french omelette',
            'description' => 'Nonstick pan, medium heat, butter, salt, pepper, chives if you feelin\' fancy',
        ]);
      
        DB::table('todos')->insert([
            'name' => 'Practice speaking Spanish',
            'description' => 'Me gusta tanto el español y la cultura Mexicana, ojalá tuviera más tiempo para practicar hablar.',
        ]);
      
        DB::table('todos')->insert([
            'name' => 'Make a Spotify playlist',
            'description' => 'no such thing as too many spotify playlists',
        ]);
      
        DB::table('todos')->insert([
            'name' => 'Love each other y\'all',
            'description' => 'Love in the face of hate and always be kind to one another.',
        ]);
        DB::table('todos')->insert([
            'name' => 'Change the world',
            'description' => 'There is so much pain, inequality, and injustice in the world but we all have the power to do something about it.',
        ]);
    }
}
