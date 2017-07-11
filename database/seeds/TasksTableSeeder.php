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
        DB::table('tasks')->insert(
    		array('task_name' => 'laravel',
    				'task_start' => '2017-8-10 3:0:0',
    				'task_end' => '2017-8-10 4:0:0',
    				'task_dur' => 1,
    				'task_desc' => 'test',
    				'category_id' => 1)
		);
    }
}
