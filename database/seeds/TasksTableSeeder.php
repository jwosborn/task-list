<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'title' => 'test',
            'isDone' => '0',
            'weekly' => '0',
            'created_by' => 'Admin',
            'edit' => '0'
        ]);
        DB::table('tasks')->insert([
            'title' => 'weeklytest',
            'isDone' => '0',
            'weekly' => '1',
            'created_by' => 'Admin',
            'edit' => '0'
        ]);
    }
}
