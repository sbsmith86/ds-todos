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
    }
}
