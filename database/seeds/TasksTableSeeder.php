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
        for ($i = 1; $i <= 30; $i++) {
            DB::table('tasks')->insert([
                'content' => 'test content ' . $i,
                'limit' => 'test' . $i
            ]);
        }
    }
}
