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
            'name' => 'Task One',
        ]);

        DB::table('todos')->insert([
            'name' => 'Task Two',
        ]);

        DB::table('todos')->insert([
            'name' => 'Task Three',
        ]);
    }
}
