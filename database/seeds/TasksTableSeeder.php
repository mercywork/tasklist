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
            'content' => 'test タスク1',
            'limit' => 'test 1'
        ]);

        DB::table('tasks')->insert([
            'content' => 'test タスク2',
            'limit' => 'test 2'
        ]);

        DB::table('tasks')->insert([
            'content' => 'test タスク3',
            'limit' => 'test 3'
        ]);
    }
}
