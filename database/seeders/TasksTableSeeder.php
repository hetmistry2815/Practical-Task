<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tasks = [
            [
                'title' => 'Complete project report',
                'description' => 'Write and finalize the project report',
                'due_date' => '2023-12-31',
            ],
            [
                'title' => 'Meeting with client',
                'description' => 'Discuss project requirements with the client',
                'due_date' => '2023-12-25',
            ],
            // Add more sample tasks if needed
        ];

        // Loop through the tasks array and create records in the tasks table
        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
