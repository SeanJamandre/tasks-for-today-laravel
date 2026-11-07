<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'seanjames',
            'full_name' => 'Sean James Jamandre',
            'email' => 'seanjames@example.com',
        ]);

        $today = today();
        $tasks = [
            ['title' => 'Review Laravel lessons', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Finish TSA3 requirements', 'status' => 'in progress', 'task_date' => $today],
            ['title' => 'Test all application pages', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Update project README', 'status' => 'completed', 'task_date' => $today],
            ['title' => 'Prepare database backup', 'status' => 'pending', 'task_date' => $today->copy()->addDay()],
            ['title' => 'Practice Eloquent queries', 'status' => 'pending', 'task_date' => $today->copy()->addDay()],
            ['title' => 'Check GitHub repository', 'status' => 'pending', 'task_date' => $today->copy()->addDays(2)],
            ['title' => 'Plan next web project', 'status' => 'pending', 'task_date' => $today->copy()->addDays(2)],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
